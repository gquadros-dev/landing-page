<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Minha Aplicação'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://unpkg.com/htmx.org@2.0.4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../../imgs/logos/logo-gquadros-sem-fundo.png" alt="Bootstrap" width="64" height="64">
              GQuadros Dev
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item pointer" hx-get="/index.php?content=home" hx-target="#main-container" hx-swap="innerHTML">
                <a class="nav-link <?php if(isset($pageTitle) &&$pageTitle === 'Home') echo 'active'; ?>">Home</a>
              </li>
              <li class="nav-item pointer" hx-get="/index.php?content=contato" hx-target="#main-container" hx-swap="innerHTML">
                <a class="nav-link <?php if(isset($pageTitle) && $pageTitle === 'Contato') echo 'active' ?>">Contato</a>
              </li>
              <li class="nav-item pointer" hx-get="/index.php?content=sobre" hx-target="#main-container" hx-swap="innerHTML">
                <a class="nav-link <?php if(isset($pageTitle) && $pageTitle === 'Sobre') echo 'active' ?>">Sobre</a>
              </li>
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form> -->
          </div>
          </div>
        </nav>
    </header>
    <main>

