<?php
$projects = [
    'whatsapp-api' => [
        'title' => 'API para WhatsApp',
        'html_content' => '
            <h5>API para WhatsApp</h5>
            <p>Esta API serve como um gateway para enviar mensagens via WhatsApp, utilizando a biblioteca whatsapp-web.js.</p>
            <p>Ela é construída com Express.js e gerencia o envio de mensagens através de filas (Bull + Redis) organizadas por CNPJ da empresa.</p>
            <p>Além disso, utiliza MongoDB para armazenar métricas de envio e logs de erro.</p>
            <ul>
                <li>Node.js</li>
                <li>Express.js</li>
                <li>whatsapp-web.js</li>
                <li>Bull</li>
                <li>RedisDB</li>
                <li>MongoDB</li>
            </ul>',
    ],
    'polls' => [
        'title' => 'Projeto Polls',
        'html_content' => '
            <h5>Projeto Polls</h5>
            <p>O projeto Polls (enquetes) foi desenvolvido na imersão NLW 2024, da RocketSeat, e foi lá onde conheci novas tecnologias como o RedisDB e WebSocket.</p>
            <p>Depois desse projeto meu interesse por novas tecnologias cresceu, também criei outros projetos com RedisDB por conta desse projeto.</p>',
    ],
    'abex' => [
        'title' => 'Brechó Online - Projeto ABEX',
        'html_content' => '
            <h5>Brechó Online - Projeto ABEX</h5>
            <p>Esse é um projeto que ainda está em desenvolvimento, tenho uma matéria na faculdade chamada Aprendizado Baseado em EXperiências (ABEX).</p>
            <p>O objetivo dessa matéria é aplicar os conhecimentos adquiridos durante a faculdade, por isso, estamos criando um App mobile, sobre um brechó online.</p>
            <p>As tecnologias usadas até o momento foram:</p>
            <ul>
                <li>React Native + Expo</li>
                <li>PHP + Laravel</li>
                <li>PostgreSQL</li>
            </ul>',
    ],
    'landing-page' => [
        'title' => 'Landing page',
        'html_content' => '
            <h5>Landing page</h5>
            <p>Esse é o código dessa Landing Page!</p>
            <p>Essa landing page foi desenvolvida com PHP e HTMX, minha ideia foi ser um SPA (Single Page Application) onde eu substituo o HTML do container principal. Uma "única página", pois o link não troca, mas o conteúdo sim.</p>
            <p>O objetivo foi entender como funciona o HTMX ao mesmo tempo que exponho meus projetos.</p>',
    ],
];

$projectId = $_GET['id'] ?? null;

if ($projectId && isset($projects[$projectId])) {
    echo '<div class="d-none d-md-block mt-4">';
    echo $projects[$projectId]['html_content'];
    echo '</div>';
} else {
    echo '<div class="d-none d-md-block mt-4"><p>Descrição não encontrada ou projeto inválido.</p></div>';
}
?>
