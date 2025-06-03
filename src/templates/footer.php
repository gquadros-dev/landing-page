        </main>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top px-3">
          <p class="col-md-4 mb-0 text-muted">&copy;<?php echo date("Y"); ?> GQuadros</p>

          <ul class="nav col-md-4 justify-content-end align-items-center">
            <img src="../../imgs/logos/logo-gquadros-sem-fundo.png" alt="Bootstrap" width="64" height="64">

            <li class="nav-item pointer" hx-get="/index.php?content=home" hx-target="#main-container" hx-swap="innerHTML">
              <a class="nav-link px-2 text-muted">Home</a>
            </li>
            <li class="nav-item pointer" hx-get="/index.php?content=contato" hx-target="#main-container" hx-swap="innerHTML">
              <a class="nav-link px-2 text-muted">Contato</a>
            </li>
            <li class="nav-item pointer" hx-get="/index.php?content=sobre" hx-target="#main-container" hx-swap="innerHTML">
              <a class="nav-link px-2 text-muted">Sobre</a>
            </li>
          </ul>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>
