<h2 class="title">Gabriel Quadros</h2>

<div>
  <div>
    <p>Olá, me chamo Gabriel, tenho <?php echo date('Y') - 2005 ?> anos e sou estudante de Ciência da Computação na Universidade Comunitária de Chapecó (Unochapecó).</p>
    <p>Atualmente, estou trabalhando como desenvolvedor Delphi, mas também tenho experiência com PHP e JavaScript.</p>
    <p>Desde pequeno eu sempre fui muito curioso, então quando ganhei meu primeiro video game (um playstation 2), surgiram duas paixões:</p>
    <ul>
      <li>Jogos</li>
      <li>Inglês</li>
    </ul>
    <p>Depois de um tempo eu ganhei meu primeiro notebook e a primeira coisa que fiz foi instalar a Unity, para desenvolver um jogo. Mas não deu muito tempo o notebook parou de funcionar :(</p>
    <p>Com o tempo eu fui aprendendo inglês e também foi crescendo essa minha curiosidade sobre "como jogos são feitos", assim, eu caí no canal do "Curso em vídeo", onde dei meus primeiros passos na programação.</p>
  </div>
</div>

<hr>

<h2 class="title">Projetos</h2>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active" data-project-id="whatsapp-api">
      <a href="https://github.com/gquadros-dev/whatsapp-api" target="_blank">
        <img src="https://drive.google.com/file/d/1U1gENpcsmAFXttb1OZfqkwC6mxqd2y18/view" class="d-block w-100" alt="Projeto API para WhatsApp">
      </a>
    </div>
    <div class="carousel-item" data-project-id="polls">
      <a href="https://github.com/gquadros-dev/polls" target="_blank">
        <img src="../../imgs/projetos/projeto-polls.png" class="d-block w-100" alt="Projeto Polls">
      </a>
    </div>
    <div class="carousel-item" data-project-id="abex">
      <a href="https://github.com/gquadros-dev/abex" target="_blank">
        <img src="../../imgs/projetos/projeto-abex.png" class="d-block w-100" alt="Projeto ABEX Brechó Online">
      </a>
    </div>
    <div class="carousel-item" data-project-id="landing-page">
      <a href="https://github.com/gquadros-dev/landing-page" target="_blank">
        <img src="../../imgs/projetos/projeto-landing-page.png" class="d-block w-100" alt="Projeto Landing Page">
      </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="project-description-container" class="mt-4">
  <div class="mt-4"><p>Selecione um projeto para ver os detalhes.</p></div>
</div>

<hr>

<h2 class="title text-center">Tecnologias que domino:</h2>
<div class="d-flex justify-content-center flex-wrap gap-3">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/visual_studio_code.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/phpstorm.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/android_studio.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/php_(elephpant).png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/laravel.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/typescript.png" alt="" width="64" height="64">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/512px-React-icon.svg.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/bootstrap.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/tailwind_css.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/postgresql.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/redis.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/mongodb.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/docker.png" alt="" width="64" height="64">
  <img src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/nginx.png" alt="" width="64" height="64">
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const carouselElement = document.getElementById('carouselExample');
    const descriptionContainerTargetId = 'project-description-container';

    if (carouselElement && document.getElementById(descriptionContainerTargetId)) {
      function loadDescriptionForSlide(slideElement) {
        if (!slideElement) return;
        const projectId = slideElement.getAttribute('data-project-id');
        if (projectId) {
          htmx.ajax('GET', `/src/responses/get-project-description.php?id=${projectId}`, {
            target: `#${descriptionContainerTargetId}`,
            swap: 'innerHTML'
          });
        }
      }

      const activeItem = carouselElement.querySelector('.carousel-item.active');
      if (activeItem) {
        loadDescriptionForSlide(activeItem);
      }

      carouselElement.addEventListener('slid.bs.carousel', function (event) {
        if (event.relatedTarget) {
          loadDescriptionForSlide(event.relatedTarget);
        }
      });
    }
  });
</script>
