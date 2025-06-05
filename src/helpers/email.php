<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require __DIR__ . '/../../vendor/autoload.php';

  try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();
  } catch (Dotenv\Exception\InvalidPathException $e) {
    die('Erro ao carregar o arquivo .env: ' . $e->getMessage() . ' Verifique o caminho: ' . __DIR__ . '/../../');
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_raw = filter_input(INPUT_POST, 'name');
    $nome = $nome_raw ? htmlspecialchars($nome_raw, ENT_QUOTES | ENT_HTML5, 'UTF-8') : '';

    $email_visitante = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $numero_raw = filter_input(INPUT_POST, 'numero');
    $numero_visitante = $numero_raw ? htmlspecialchars($numero_raw, ENT_QUOTES | ENT_HTML5, 'UTF-8') : '';

    $mensagem_raw = filter_input(INPUT_POST, 'mensagem');
    $mensagem_visitante = $mensagem_raw ? htmlspecialchars($mensagem_raw, ENT_QUOTES | ENT_HTML5, 'UTF-8') : '';

    if (empty($nome) || empty($email_visitante) || empty($mensagem_visitante) || empty($numero_visitante)) {
      echo '<p class="warning-message">Por favor, preencha todos os campos obrigatórios.</p>';
      exit;
    }

    $mail = new PHPMailer(true);

    try {
      $mail->isSMTP();
      $mail->Host       = $_ENV['SMTP_HOST'];
      $mail->SMTPAuth   = true;
      $mail->Username   = $_ENV['SMTP_USERNAME'];
      $mail->Password   = $_ENV['SMTP_PASSWORD'];
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = (int)$_ENV['SMTP_PORT'];
      $mail->CharSet    = 'UTF-8';

      $mail->setFrom($_ENV['SMTP_FROM_EMAIL'], $_ENV['SMTP_FROM_NAME']);
      $mail->addAddress($_ENV['EMAIL_DESTINO']);
      $mail->addReplyTo($email_visitante, $nome);


      $mail->isHTML(false);
      $assunto = "Novo Contato da Landing Page de: " . $nome;
      $mail->Subject = $assunto;

      $corpo = "Você recebeu uma nova mensagem:\n\n";
      $corpo .= "Nome: " . $nome . "\n";
      $corpo .= "Email: " . $email_visitante . "\n";
      $corpo .= "Número de Telefone: " . $numero_visitante . "\n";
      $corpo .= "Mensagem:\n" . $mensagem_visitante . "\n";
      $mail->Body = $corpo;

      $mail->send();
      echo '<p class="success-message">Mensagem enviada com sucesso!</p>';
    } catch (\Throwable $th) {
      echo "<p class=\"error-message\">A mensagem não pôde ser enviada. Erro: {$mail->ErrorInfo}</p>";
    }
    exit;
  } else {
    echo '<p class="error-message">Acesso inválido ao script.</p>';
    exit;
  }
?>
