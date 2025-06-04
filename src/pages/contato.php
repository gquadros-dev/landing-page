<h2 class="title">Entre em Contato</h2>

<section id="contato">
    <h1>Entre em Contato</h1>
    <p>Ficarei feliz em responder suas dúvidas ou discutir oportunidades!</p>

    <div class="informacoes-contato">
      <h2>Minhas Redes e Contato Direto:</h2>
      <ul>
        <li>
          <img src="https://lh3.googleusercontent.com/fife/ALs6j_GerfPGa3Qo9Dx-lPJE4RDS1XcqbK_n3gSBxEfksZbqwo7XJMOHTwBsa0rtc9mYZMSfLD1rWSi-DnHZ3OVZv1TJZcLeJO-Tmd0eW2F2c4R3fCljdQdfnud_iviwIrLVMrpeG6c8NPSxVBq7t-0j5A5Yt7EC6acrSU5rbHaCa6H5khxSAwxkvky2QW5HNxmltkM0ox833k3IHAFFMHx1-cx_hiY2gjDDC64UH17GSCwaJ6mbBBARkWp1v5q3hVO2nffvnTufNN5ulh_JuFE9XrkHzyPXrNB1d1MS9JVN8_wobvjxRrXqd_8TVEJQhAW-zvjGaa0zuK5G3EJlnaXSJBp4YEvJ47PbGLc-ZhBo0TOFAnTKAkXgCRhQC2wCYaIiWIYYQJZmNsZUQkD4MphIcwWJdmEtYRM7MjnO21hsEu9Se4aVsCdDLkTXpOl0bWh9VXCrSZ0a3B_S4mVULEHxzc84ExmY40tqSI1OzX5QfsLSED57aHvNC0KdV7ChG1_5M6_VE2bFJqIjG34xyGXjVOrWs0u-HasWtgjvCh9CmDijZFtehDCdd4RZ2UsjnDkT6_JiWF04yhILqglHDARgZN6W1epkK3FMZx6dMGMQaQH8P5b6VO0Yg6OUqr7VkaqwFLsZEEI31ficgyPawfGeDmD5QHBjqagMgo7TYsiQraobKx9ixsqP_SsO8JIdpoShZYX8mDIvREnKb0Rz2_htyMLb9yV44A1HWnILQv9G4MvNqJ_9qkeaUC-luAP7bGdVH5RiX78h3QW3x8WbOQeyr3D-0G8bHtF3_0Ha5xxWGqxaCB5h1GsOdCP2Y743xMbNf6KsRv6skCy8ZjnjWKer_BuExUc7k7W3FhO_gOJm42x10ujqAvlKZAM5LQt5ThNNx2TCvhgs97ocRenZqeD27OKcHiFm6StcJFA-0h2Tm7xKpg07M8hnA9HnBepHwPOJ0Xvbhn2_7HfVlh8oVvmmrl8PlB2uHv7ksLOHVaYfKAtJBPePkge1jtbwaWt90EL1AtnG2ujxDelQEYL6VHG_kWtIXzOYcoLr1_LrdRDfRXRGk72a-uDOs7GtRp0iTb1ySoH794tzkICyBXaTd78ff5gDS2VqtolPnxoKV4hiEauTlckt1pUErAlTCq1FI2xuSI-upQJIb2CcfRQ_QUU8xTRjPYrStU9sO6Y6-R-CNuDQ0jSw_CncgdAV3r3iwMcFc6xVl0R_AqcuUKf5BNESENs7k6qK4TMUNwtxouyIDcgHT_5gHxdiATu5p_duBAI8b0zGMmQCXXuH6JXvwQDJ5sWFXXWbWBkgAwnqWq9MKFGcP_3XiWO5zYg9dvOaGc7be5m_poLZggNVCVnkETtEe3eEQR6DsNufL5f1R3dbZg76dMBM1P-QrYWNIjeOXUdOKDdd2mTfgRz8gU8vqFOpwl0dZgFfBvOJxEvYBItSrTXw62khvITyLVb-r3vD7w4FpseziAiFLWJOo_uPMor-BNn3whePU-0W4XsO-P9GJLHxzxFSTr_iZU1NOT_S2TlliTpU75LpN6MxhvxdAy-h-Wmliqybg8h8UGbtIacPg_1IW6j9V1iFM1hnYKXZPHHsKgC8TQMxJxRJ7dqwF8eTpdOVUELRdOMdvrru3b4" alt="LinkedIn" width="32" height="32">
          <a href="https://www.linkedin.com/in/seu-usuario-linkedin" target="_blank" rel="noopener noreferrer">Meu LinkedIn</a>
        </li>
        <li>
          <img src="icon-github.png" alt="GitHub" width="20" height="20"> {/* Adicione um ícone */}
          <a href="https://github.com/seu-usuario-github" target="_blank" rel="noopener noreferrer">Meu GitHub</a>
        </li>
        <li>
          <img src="icon-email.png" alt="Email" width="20" height="20"> {/* Adicione um ícone */}
          <a href="mailto:seuemail@provedor.com">seuemail@provedor.com</a>
        </li>
          {/* Se desejar adicionar telefone/WhatsApp:
          <li>
              <img src="icon-whatsapp.png" alt="WhatsApp" width="20" height="20">
              <a href="https://wa.me/55SEUDDDSEUNUMERO" target="_blank" rel="noopener noreferrer">(XX) XXXXX-XXXX</a>
          </li>
          */}
      </ul>
    </div>

    <hr>

    <div class="formulario-contato">
      <h2>Ou me envie uma mensagem:</h2>

      <?php
        // Exibe mensagens de sucesso ou erro do envio do formulário
        if (isset($_GET['status'])) {
          if ($_GET['status'] == 'sucesso') {
            echo '<p style="color: green;">Mensagem enviada com sucesso!</p>';
          } elseif ($_GET['status'] == 'erro') {
            echo '<p style="color: red;">Ocorreu um erro ao enviar a mensagem. Tente novamente.</p>';
          } elseif ($_GET['status'] == 'invalido') {
            echo '<p style="color: orange;">Por favor, preencha todos os campos obrigatórios.</p>';
          }
        }
      ?>

    <form action="enviar_contato.php" method="POST">
      <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div>
        <label for="assunto">Assunto:</label>
        <input type="text" id="assunto" name="assunto">
      </div>
      <div>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
      </div>
      <div>
        <button type="submit">Enviar Mensagem</button>
      </div>
    </form>
  </div>
</section>
