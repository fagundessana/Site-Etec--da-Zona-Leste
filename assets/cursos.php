<?php
$page_title = "Cursos - Etec Zona Leste";
$active_page = "cursos";
include 'header.php';
?>


<?php echo '<section class="hero-section">'; ?>
  <?php echo '<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">'; ?>
    <?php echo '<div class="carousel-inner">'; ?>
      <?php echo '<div class="carousel-item active">'; ?>
        <?php echo '<div class="hero-slide text-center py-5">'; ?>
          <?php echo '<img class="hero-img" src="../assets/img/gestaoetec.png">'; ?>
          <?php echo '<a href="gestao.php" class="hero-cta"> CONHEÇA NOSSA GESTÃO</a>'; ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>
      <?php echo '<div class="carousel-item">'; ?>
        <?php echo '<div class="hero-slide text-center py-5">'; ?>
            <?php echo '<img class="hero-img" src="../assets/img/oportunidadesetec.png">'; ?>
          <?php echo '<a href="oportunidades.php" class="hero-cta"> CONHEÇA NOSSAS OPORTUNIDADES</a>'; ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>
    <?php echo '</div>'; ?>
    <?php echo '<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"><span class="carousel-arrow">&#10094;</span></button>'; ?>
    <?php echo '<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"><span class="carousel-arrow">&#10095;</span></button>'; ?>
    <?php echo '<div class="carousel-indicators-custom"><button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button><button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button></div>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php echo '<section class="cursos-section py-5">'; ?>
  <?php echo '<div class="container">'; ?>

    <?php echo '<h2 class="section-title mb-4">Cursos Técnicos</h2>'; ?>
    <?php echo '<div class="row g-4">'; ?>
    <?php
    $cursos_tecnicos = [
      ["nome" => "Desenvolvimento de Sistemas", "icon" => "💻", "turno" => "Manhã / Tarde / Noite", "duracao" => "1,5 anos", "desc" => "Forme-se em programação, banco de dados, desenvolvimento web e mobile."],
      ["nome" => "Administração", "icon" => "📊", "turno" => "Manhã / Noite", "duracao" => "1,5 anos", "desc" => "Aprenda gestão empresarial, finanças, recursos humanos e empreendedorismo."],
      ["nome" => "Logística", "icon" => "🚚", "turno" => "Tarde / Noite", "duracao" => "1,5 anos", "desc" => "Especialização em cadeia de suprimentos, transporte e gestão de estoques."],
      ["nome" => "Contabilidade", "icon" => "🧾", "turno" => "Noite", "duracao" => "1,5 anos", "desc" => "Domine a contabilidade empresarial, tributação e gestão financeira."],
      ["nome" => "Marketing", "icon" => "📣", "turno" => "Tarde / Noite", "duracao" => "1,5 anos", "desc" => "Estratégias de marketing digital, publicidade e gestão de marcas."],
    ];
    foreach ($cursos_tecnicos as $curso) {
      echo '<div class="col-md-6 col-lg-4">';
      echo '<div class="curso-card">';
      echo '<div class="curso-icon">' . $curso["icon"] . '</div>';
      echo '<h3 class="curso-nome">' . $curso["nome"] . '</h3>';
      echo '<p class="curso-desc">' . $curso["desc"] . '</p>';
      echo '<div class="curso-meta">';
      echo '<span class="curso-turno">🕐 ' . $curso["turno"] . '</span>';
      echo '<span class="curso-duracao">📅 ' . $curso["duracao"] . '</span>';
      echo '</div>';
      echo '<a href="contato.php" class="curso-btn">Saiba mais</a>';
      echo '</div>';
      echo '</div>';
    }
    ?>
    <?php echo '</div>'; ?>

    <?php echo '<h2 class="section-title mt-5 mb-4">Ensino Médio com Habilitação Técnica</h2>'; ?>
    <?php echo '<div class="row g-4">'; ?>
    <?php
    $cursos_em = [
      ["nome" => "Desenvolvimento de Sistemas", "icon" => "💻", "turno" => "Manhã e tarde", "duracao" => "3 anos", "desc" => "Ensino médio integrado com formação técnica em desenvolvimento de sistemas."],
      ["nome" => "Administração", "icon" => "🏢", "turno" => "Manhã e tarde", "duracao" => "3 anos", "desc" => "Ensino médio integrado com formação em gestão e negócios."],
      ["nome" => "Logística", "icon" => "🚚", "turno" => "Manhã e tarde", "duracao" => "3 anos", "desc" => "Ensino médio integrado com formação técnica em logística."],
      ["nome" => " Serviços jurídicos", "icon" => "🌐", "turno" => "tarde", "duracao" => "3 anos", "desc" => "Ensino médio integrado com formação técnica em serviços jurídicos."],
      ["nome" => "Recursos Humanos", "icon" => "👥", "turno" => "Manhã e tarde", "duracao" => "3 anos", "desc" => "Ensino médio integrado com formação técnica em recursos humanos."],


    ];
    foreach ($cursos_em as $curso) {
      echo '<div class="col-md-6">';
      echo '<div class="curso-card curso-card--em">';
      echo '<div class="curso-icon">' . $curso["icon"] . '</div>';
      echo '<h3 class="curso-nome">' . $curso["nome"] . '</h3>';
      echo '<p class="curso-desc">' . $curso["desc"] . '</p>';
      echo '<div class="curso-meta">';
      echo '<span class="curso-turno">🕐 ' . $curso["turno"] . '</span>';
      echo '<span class="curso-duracao">📅 ' . $curso["duracao"] . '</span>';
      echo '</div>';
      echo '<a href="contato.php" class="curso-btn">Saiba mais</a>';
      echo '</div>';
      echo '</div>';
    }
    ?>
    <?php echo '</div>'; ?>

    <?php echo '<div class="vestibulinho-banner mt-5">'; ?>
      <?php echo '<div class="row align-items-center">'; ?>
        <?php echo '<div class="col-md-8">'; ?>
          <?php echo '<h3>Próximo Vestibulinho</h3>'; ?>
          <?php echo '<p>Inscrições abertas! Garanta sua vaga nos cursos técnicos da Etec Zona Leste.</p>'; ?>
        <?php echo '</div>'; ?>
        <?php echo '<div class="col-md-4 text-md-end">'; ?>
          <?php echo '<a href="https://eteczonaleste.cps.sp.gov.br/vestibulinho/" class="vestibulinho-btn">Inscreva-se agora</a>'; ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>
    <?php echo '</div>'; ?>

  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php include 'footer.php'; ?>