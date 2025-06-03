<?php
  if (isset($_GET['content'])) {
    $page = $_GET['content'];
    $filePath = './src/pages/' . basename($page) . '.php';

    if (file_exists($filePath)) {
      include($filePath);
    } else {
      echo '<p>Conteúdo não encontrado!</p>';
      http_response_code(404);
    }
    exit;
  }

  include('./src/templates/header.php');
?>

  <div class="container" id="main-container">
    <?php
      include('./src/pages/home.php');
    ?>
  </div>

<?php include('./src/templates/footer.php');?>
