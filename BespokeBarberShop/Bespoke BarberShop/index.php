<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bespoke BarberShop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@55&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll(".scroll-anim");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        } else {
          entry.target.classList.remove("show");
        }
      });
    }, {
      threshold: 0.6
    });

    elements.forEach(el => observer.observe(el));
  });
</script>

<body>

  <nav class="navbar sticky-top navbar-expand-lg" style="background-color: black;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="imagens/Logo.jpeg" alt="Bootstrap" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="offcanvas offcanvas-end" style="background-color: black;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between">


          <ul class="navbar-nav d-none d-lg-flex gap-5">
            <li class="nav-item">
              <a class="nav-link" href="#Inicio">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#SobreNos">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Espaco">Espaço</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Localizacao">Localização</a>
            </li>
          </ul>

          <ul class="navbar-nav d-lg-none flex-column gap-2">
            <li class="nav-item">
              <a class="nav-link" href="#Inicio">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#SobreNos">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Espaco">Espaço</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Localizacao">Localização</a>
            </li>
          </ul>


          <div class="d-lg-none d-flex flex-column gap-3 mt-4">
            <a href="login.php" class="btn btn-outline-warning fw-bold btn-lg">
              Login
            </a>
            <a href="cadastro.php" class="btn btn-warning fw-bold text-dark btn-lg">
              Cadastro
            </a>
          </div>
        </div>
      </div>


      <div class="d-none d-lg-flex gap-2 ms-auto ">
        <a href="login.php" class="btn btn-outline-warning fw-bold px-3">
          Login
        </a>
        <a href="cadastro.php" class="btn btn-warning fw-bold text-dark px-3">
          Cadastro
        </a>
      </div>
    </div>
  </nav>



  <a href="login.php" class="botao_agen"><span>Marque já seu horário</span></a>
  <div class="container" style="background-image: url(imagens/Fundo.jpeg);" id="Inicio">
    <h1 class="title scroll-anim">Bespoke BarberShop</h1>
    <p class="subtitle scroll-anim">A barbearia pensada para o seu conforto.</p>
    <div class="divider"></div>

  </div>
  <hr>
  <!-- Seção "Nós Somos Bespoke" -->
  <div class="container py-5" id="SobreNos" style="background-image: url('imagens/image 1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="col-12 col-lg-10 mx-auto">
      <div class="p-5 rounded-4" style="background: transparent;">
        <h1 class="fw-bold mb-2 text-center" style="font-family: 'Yellowtail', cursive; font-size: 4rem; color: #daa520; letter-spacing: 3px;">
          Nós Somos Bespoke
        </h1>
        <div class="mx-auto mb-4" style="height:8px; width:600px; background:#daa520; border-radius:4px;"></div>
        <p class="fs-2 text-white text-center mb-5" style="font-family: 'Arapey', serif; max-width: 900px; margin: 0 auto; opacity: 0.97;">
          Mais do que uma barbearia, somos uma experiência feita sob medida para você.<br>
          Atendimento exclusivo, ambiente sofisticado e profissionais que entendem o seu estilo.
        </p>
        <div class="row text-center justify-content-center g-4">
          <div class="col-6 col-md-3">
            <div class="p-3">
              <i class="fa-solid fa-user-tie mb-3 diferencial-icone" style="color:#daa520; font-size:3.2rem;"></i>
              <div class="fw-semibold text-white" style="font-size:1.25rem;">Atendimento Premium</div>
              <div class="text-secondary" style="font-size:1rem;">Foco total em você</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3">
              <i class="fa-solid fa-scissors mb-3 diferencial-icone" style="color:#daa520; font-size:3.2rem;"></i>
              <div class="fw-semibold text-white" style="font-size:1.25rem;">Profissionais Experts</div>
              <div class="text-secondary" style="font-size:1rem;">Técnica e estilo</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3">
              <i class="fa-solid fa-couch mb-3 diferencial-icone" style="color:#daa520; font-size:3.2rem;"></i>
              <div class="fw-semibold text-white" style="font-size:1.25rem;">Ambiente Exclusivo</div>
              <div class="text-secondary" style="font-size:1rem;">Conforto e privacidade</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="p-3">
              <i class="fa-solid fa-star mb-3 diferencial-icone" style="color:#daa520; font-size:3.2rem;"></i>
              <div class="fw-semibold text-white" style="font-size:1.25rem;">Excelência</div>
              <div class="text-secondary" style="font-size:1rem;">Detalhes que fazem diferença</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="container-fluid py-5" id="Espaco" style="background-image: url('imagens/image 3.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
      <div class="row gy-4 align-items-center">

        <!-- Texto -->
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center align-items-lg-start scroll-anim">
          <h1 class="fw-bold mb-3" style="font-family: 'Yellowtail', cursive; font-size: 3.5rem; color: #daa520; letter-spacing: 2px;">
            Como é o nosso Espaço?
          </h1>
          <div style="height:7px; width:600px; background:#daa520; border-radius:4px; margin-bottom:32px;"></div>
          <p class="fs-2 text-white text-center text-lg-start" style="font-family: 'Arapey', serif; max-width: 600px; opacity: 0.95;">
            Moderno, confortável e feito para você relaxar. Venha viver a experiência Bespoke.
          </p>
          <ul class="list-unstyled mt-4 mb-0" style="color:#fff; font-size:1.7rem; font-family:'Archivo Narrow',sans-serif;">
            <li class="mb-3">
              <i class="fa-solid fa-couch me-3" style="color:#daa520; font-size:2.5rem;"></i>
              Lounge aconchegante
            </li>
            <li class="mb-3">
              <i class="fa-solid fa-tv me-3" style="color:#daa520; font-size:2.5rem;"></i>
              TV e entretenimento
            </li>
            <li class="mb-3">
              <i class="fa-solid fa-beer-mug-empty me-3" style="color:#daa520; font-size:2.5rem;"></i>
              Cerveja gelada
            </li>
            <li>
              <i class="fa-solid fa-gamepad me-3" style="color:#daa520; font-size:2.5rem;"></i>
              Espaço para jogos
            </li>
          </ul>
        </div>

        <div class="col-12 col-lg-6 text-center">
          <div class="p-3 bg-opacity-50 rounded-4 shadow-lg d-inline-block">
            <img src="imagens/Frame 21.png" alt="Espaço" class="img-fluid rounded-4 shadow frame21" style="max-width: 420px;">
          </div>
        </div>
      </div>
    </div>
  </div>


  <hr>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>




  
</body>

</html>

