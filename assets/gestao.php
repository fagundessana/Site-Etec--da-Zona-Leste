<?php
$page_title = "Gestão - Etec Zona Leste";
$active_page = "gestao";
include 'header.php';
?>

<?php echo '<section class="page-hero">'; ?>
  <?php echo '<div class="container text-center py-5">'; ?>
    <?php echo '<h1 class="page-hero-title">Gestão Escolar</h1>'; ?>
    <?php echo '<p class="page-hero-sub">Conheça a equipe que faz a Etec Zona Leste acontecer</p>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php echo '<section class="gestao-section py-5">'; ?>
  <?php echo '<div class="container">'; ?>
    
    <?php echo '<h2 class="section-title mb-4">Direção</h2>'; ?>
    <?php echo '<div class="row g-4 mb-5">'; ?>
    <?php
    $direcao = [
      ["nome" => "Diretora", "cargo" => "Amanda Bueno", "icon" => "", "desc" => "Responsável pela administração geral da unidade escolar, garantindo a qualidade do ensino e o cumprimento das diretrizes do Centro Paula Souza."],
      ["nome" => "Assessor Técnico Administrativo II ", "cargo" => "Patrick Moreno da Silva", "icon" => "", "desc" => "Coordena os serviços administrativos, financeiros e de infraestrutura da unidade."],
    ];
    foreach ($direcao as $d) {
      echo '<div class="col-md-6">';
      echo '<div class="gestao-card gestao-card--direcao">';
      echo '<div class="gestao-icon">' . $d["icon"] . '</div>';
      echo '<h3 class="gestao-nome">' . $d["nome"] . '</h3>';
      echo '<p class="gestao-cargo">' . $d["cargo"] . '</p>';
      echo '<p class="gestao-desc">' . $d["desc"] . '</p>';
      echo '</div>';
      echo '</div>';
    }
    ?>
    <?php echo '</div>'; ?>

    <?php echo '<h2 class="section-title mb-4">Coordenação Pedagógica</h2>'; ?>
    <?php echo '<div class="row g-4 mb-5">'; ?>
    <?php
    $coord = [
      ["area" => "Desenvolvimento de Sistemas", "icon" => "💻"],
      ["area" => "Administração", "icon" => "📊"],
      ["area" => "Logística", "icon" => "🚚"],
      ["area" => "Serviços jurídicos", "icon" => "⚖️"],
      ["area" => "Recursos Humanos", "icon" => "👥"],
    ];
    foreach ($coord as $c) {
      echo '<div class="col-md-6 col-lg-3">';
      echo '<div class="gestao-card">';
      echo '<div class="gestao-icon-sm">' . $c["icon"] . '</div>';
      echo '<h4 class="gestao-area">Coordenação de</h4>';
      echo '<p class="gestao-area-nome">' . $c["area"] . '</p>';
      echo '</div>';
      echo '</div>';
    }
    ?>
    <?php echo '</div>'; ?>

    <?php echo '<h2 class="section-title mb-4">Setores Administrativos</h2>'; ?>
    <?php echo '<div class="row g-3">'; ?>
    <?php
    $setores = [
      ["nome" => "Secretaria Acadêmica", "icon" => "📁", "horario" => "Seg. a Sex. 08h–21h"],
      ["nome" => "Biblioteca", "icon" => "📚", "horario" => "Seg. a Sex. 08h–21h"],
      ["nome" => "Coordenação Acadêmica", "icon" => "👔", "horario" => "Seg. a Sex. 08h–18h"],
      ["nome" => "Orientação Educacional", "icon" => "💬", "horario" => "Seg. a Sex. 09h–17h"],
    ];
    foreach ($setores as $setor) {
      echo '<div class="col-md-4">';
      echo '<div class="setor-card">';
      echo '<span class="setor-icon">' . $setor["icon"] . '</span>';
      echo '<div>';
      echo '<p class="setor-nome">' . $setor["nome"] . '</p>';
      echo '<p class="setor-horario">⏰ ' . $setor["horario"] . '</p>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    ?>
    <?php echo '</div>'; ?>

    <?php echo '<div class="documentos-section mt-5">'; ?>
      <?php echo '<h2 class="section-title mb-4">Documentos e Regulamentos</h2>'; ?>
      <?php echo '<div class="row g-3">'; ?>
      <?php
      $docs = [
        ["nome" => "Regimento Escolar", "icon" => "📄"],
        ["nome" => "Manual do aluno", "icon" => "📋"],
        ["nome" => "Plano de Gestão", "icon" => "📊"],
        ["nome" => "Calendário Acadêmico", "icon" => "📅"],
      ];
      foreach ($docs as $doc) {
        echo '<div class="col-md-3 col-6">';
        echo '<a href="#" class="doc-card">';
        echo '<div class="doc-icon">' . $doc["icon"] . '</div>';
        echo '<p class="doc-nome">' . $doc["nome"] . '</p>';
        echo '<span class="doc-download">⬇ Baixar</span>';
        echo '</a>';
        echo '</div>';
      }
      ?>
      <?php echo '</div>'; ?>
    <?php echo '</div>'; ?>

  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php include 'footer.php'; ?>