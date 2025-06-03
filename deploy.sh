#!/bin/bash

# Defina suas variáveis aqui para facilitar a manutenção
REMOTE_USER="root"
REMOTE_HOST="170.81.43.124" # Substitua pelo IP do seu servidor
REMOTE_PORT="2214"          # Substitua pela porta SSH correta
PROJECT_DIR="projetos/my-landing-page"
DOCKER_IMAGE_NAME="my-landing-page"
DOCKER_CONTAINER_NAME="myLandingPage"

# Pega a mensagem de commit do primeiro argumento passado para o script
COMMIT_MESSAGE="$1"

# Verifica se uma mensagem de commit foi fornecida
if [ -z "$COMMIT_MESSAGE" ]; then
  echo "Erro: Por favor, forneça uma mensagem de commit como argumento."
  echo "Exemplo de uso: ./deploy.sh \"Sua mensagem de commit\""
  exit 1
fi

echo "----------------------------------------------------"
echo " PASSO 1: Fazendo commit e push das alterações locais "
echo "----------------------------------------------------"
git add -A
git commit -m "$COMMIT_MESSAGE"
git push origin main

# Verifica se o push foi bem-sucedido
if [ $? -ne 0 ]; then
  echo "Erro: Falha no git push. Abortando deploy."
  exit 1
fi

echo ""
echo "----------------------------------------------------"
echo " PASSO 2: Executando deploy no servidor remoto     "
echo "----------------------------------------------------"
# Conecta via SSH e executa os comandos remotamente
ssh -p "$REMOTE_PORT" "$REMOTE_USER@$REMOTE_HOST" << EOF
  echo "==> Conectado ao servidor: $REMOTE_HOST"
  echo "==> Navegando para o diretório do projeto: $PROJECT_DIR"
  cd $PROJECT_DIR || { echo "Falha ao acessar o diretório $PROJECT_DIR no servidor"; exit 1; }

  echo "==> Fazendo pull das últimas alterações do repositório..."
  git pull origin main || { echo "Falha no git pull no servidor"; exit 1; }

  echo "==> Parando container Docker existente (se houver)..."
  docker stop "$DOCKER_CONTAINER_NAME" || echo "Nota: Container $DOCKER_CONTAINER_NAME não estava rodando ou não existe."

  echo "==> Removendo container Docker existente (se houver)..."
  docker rm "$DOCKER_CONTAINER_NAME" || echo "Nota: Container $DOCKER_CONTAINER_NAME não existia."

  echo "==> Construindo nova imagem Docker: $DOCKER_IMAGE_NAME..."
  docker build -t "$DOCKER_IMAGE_NAME" . || { echo "Falha ao construir a imagem Docker no servidor"; exit 1; }

  echo "==> Iniciando novo container Docker: $DOCKER_CONTAINER_NAME..."
  docker run -d --name "$DOCKER_CONTAINER_NAME" -p 8080:80 -v ./src:/var/www/html/src "$DOCKER_IMAGE_NAME" || { echo "Falha ao iniciar o container Docker no servidor"; exit 1; }

  echo "==> Deploy no servidor concluído com sucesso!"
EOF

# Verifica o status de saída do comando SSH
#SSH_EXIT_STATUS=$?
#if [ $SSH_EXIT_STATUS -ne 0 ]; then
#  echo ""
#  echo "----------------------------------------------------"
#  echo " ERRO: Ocorreu um problema durante a execução dos comandos no servidor remoto (status de saída SSH: $SSH_EXIT_STATUS)."
#  echo "----------------------------------------------------"
#  exit $SSH_EXIT_STATUS
#fi

echo ""
echo "----------------------------------------------------"
echo " PROCESSO DE DEPLOY FINALIZADO "
echo "----------------------------------------------------"
