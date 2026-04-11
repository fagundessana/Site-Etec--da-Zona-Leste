<?php
if (!isset($page_title)) $page_title = "Etec Zona Leste";
if (!isset($active_page)) $active_page = "";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo '<title>' . $page_title . '</title>'; ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>

<?php echo '<nav class="navbar navbar-expand-lg etec-navbar">'; ?>
  <?php echo '<div class="container">'; ?>
    <?php echo '<a class="navbar-brand etec-brand" href="index.php">'; ?>
      <?php echo '<img src="../assets/img/logo_etec_cor.png" class="brand-logo">'; ?>
    <?php echo '</a>'; ?>
    <?php echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"><span class="navbar-toggler-icon"></span></button>'; ?>
    <?php echo '<div class="collapse navbar-collapse justify-content-end" id="navMenu">'; ?>
      <?php echo '<ul class="navbar-nav gap-3">'; ?>
        <?php
        $nav_items = [
          ["label" => "Home", "href" => "index.php", "key" => "home"],
          ["label" => "Gestão", "href" => "gestao.php", "key" => "gestao"],
          ["label" => "Cursos", "href" => "cursos.php", "key" => "cursos"],
          ["label" => "Oportunidades", "href" => "oportunidades.php", "key" => "oportunidades"],
          ["label" => "Contato", "href" => "contato.php", "key" => "contato"],
        ];
        foreach ($nav_items as $item) {
          $is_active = ($active_page === $item["key"]) ? ' nav-active' : '';
          echo '<li class="nav-item">';
          echo '<a class="nav-link etec-nav-link' . $is_active . '" href="' . $item["href"] . '">' . $item["label"] . '</a>';
          echo '</li>';
        }
        ?>
      <?php echo '</ul>'; ?>
    <?php echo '</div>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</nav>'; ?>