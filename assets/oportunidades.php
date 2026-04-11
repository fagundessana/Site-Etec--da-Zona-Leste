<?php
$page_title = "Oportunidades - Etec Zona Leste";
$active_page = "oportunidades";
include 'header.php';
?>

<?php echo '<section class="hero-section">'; ?>
  <?php echo '<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">'; ?>
    <?php echo '<div class="carousel-inner">'; ?>
      <?php echo '<div class="carousel-item active">'; ?>
        <?php echo '<div class="hero-slide text-center py-5">'; ?>
          <?php echo '<img class="hero-img" src="../assets/img/oportunidadesetec.png">'; ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>
      <?php echo '<div class="carousel-item">'; ?>
        <?php echo '<div class="hero-slide text-center py-5">'; ?>
            <?php echo '<img class="hero-img" src="../assets/img/contatoetec.png">'; ?>
          <?php echo '<a href="contato.php" class="hero-cta"> Entre em contato</a>'; ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>
    <?php echo '</div>'; ?>
    <?php echo '<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"><span class="carousel-arrow">&#10094;</span></button>'; ?>
    <?php echo '<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"><span class="carousel-arrow">&#10095;</span></button>'; ?>
    <?php echo '<div class="carousel-indicators-custom"><button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button><button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button></div>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php echo '<section class="agenda-newsletter-section py-5">'; ?>
  <?php echo '<div class="container">'; ?>
    <?php echo '<div class="row g-4">'; ?>

      <?php echo '<div class="col-lg-6">'; ?>
        <?php echo '<div class="agenda-card">'; ?>
          <?php echo '<div class="agenda-header">'; ?>
            <?php echo '<h2 class="agenda-title">Agenda de oportunidades</h2>'; ?>
            <?php echo '<a href="#" class="ver-mais"><i class="ri-add-circle-line"></i> ver mais</a>'; ?>
          <?php echo '</div>'; ?>
          <?php
          $eventos = [
            ["23 a 14", "maio", "Inscrições para a feira do empreendedor "],
            ["01", "maio", "Entrega dos vídeos do Ef Challenge"],
            ["06 e 07", "maio","Feira de estágios"],
            ["09", "jun", "Obmep 2026"],
            ["10", "jun", "Inscrições para FETEPS 2026"],
          ];
          foreach ($eventos as $evento) {
            echo '<div class="evento-item">';
            echo '<div class="evento-data"><span class="dia">' . $evento[0] . '</span><span class="mes">' . $evento[1] . '</span></div>';
            echo '<div class="evento-nome">' . $evento[2] . '</div>';
            echo '<div class="evento-bell"><i class="ri-notification-2-line"></i></div>';
            echo '</div>';
          }
          ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>
      <?php echo '<div class="col-lg-6">'; ?>
        <?php echo '<div class="newsletter-card">'; ?>
          <?php echo '<h2 class="newsletter-title">Newsletter</h2>'; ?>
          <?php echo '<p class="newsletter-desc">Deseja estar por dentro de todas as oportunidades que acontecem aqui?</p>'; ?>
          <?php echo '<form>'; ?>
            <?php echo '<input type="email" class="newsletter-input" placeholder="email">'; ?>
            <?php echo '<p class="voce-um">Você é um :</p>'; ?>
            <?php
            $opcoes = ["Aluno", "Responsável", "Professor", "Outro"];
            foreach ($opcoes as $opcao) {
              echo '<div class="newsletter-check"><input type="checkbox" id="check_' . strtolower($opcao) . '"><label for="check_' . strtolower($opcao) . '">' . $opcao . '</label></div>';
            }
            ?>
            <?php echo '<button type="submit" class="newsletter-btn">enviar</button>'; ?>
          <?php echo '</form>'; ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>

    <?php echo '</div>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php echo '<section class="destaques-section py-5">'; ?>
  <?php echo '<div class="container">'; ?>
    <?php echo '<h2 class="section-title text-center mb-4">Destaques</h2>'; ?>
    <?php echo '<div class="row g-4">'; ?>
    <?php
    $destaques = [
      ["img" => "../assets/img/16aFETEPS.jpg", "href" => "https://feteps.cps.sp.gov.br/sobre-a-feteps/", "titulo" => "De Projetos Locais ao Reconhecimento Global: A Jornada na FETEPS", "desc" => "A FETEPS (Feira Tecnológica do Centro Paula Souza) é muito mais do que um espaço para apresentar projetos. É um..."],
      ["img" => "../assets/img/feiratecnologica.png", "href" => "https://eteczonaleste.cps.sp.gov.br/feira-tecnologica-2025-etec-zona-leste/", "titulo" => "Feira Tecnológica 2025", "desc" => "A exposição dos projetos de Feira Tecnológica 2025 acontecerá a partir do dia 26/11/2025; será aberto ao público e contemplará..."],
      ["img" => "../assets/img/cnit2025.png", "href" => "https://eteczonaleste.cps.sp.gov.br/ams-da-etec-zona-leste-recebe-uma-premiacao-no-cnit-do-estado-de-sao-paulo/", "titulo" => "CNIT 2025", "desc" => "Na edição 2025 do Congresso Nacional Integra Portos (CNIT) AMS da Etec Zona Leste recebe uma premiação no CNIT do Estado de São Paulo..."],
    ];
    foreach ($destaques as $d) {
      echo '<div class="col-md-4">';
      echo '<div class="destaque-card">';
      echo '<img src="' . $d["img"] . '" class="destaque-img" alt="' . $d["titulo"] . '">';
      echo '<div class="destaque-body">';
      echo '<p class="destaque-titulo">' . $d["titulo"] . '</p>';
      echo '<p class="destaque-desc">' . $d["desc"] . '</p>';
      echo '<a href="' . $d["href"] . '" class="destaque-btn">Leia +</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    ?>
    <?php echo '</div>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php include 'footer.php'; ?>