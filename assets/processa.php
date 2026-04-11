<?php
$page_title = "Mensagem Enviada - Etec Zona Leste";
$active_page = "";
include 'header.php';

$nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$telefone = isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : '';
$endereco = isset($_POST['endereco']) ? htmlspecialchars($_POST['endereco']) : '';
?>

<?php echo '<section class="processa-section py-5">'; ?>
  <?php echo '<div class="container">'; ?>
    <?php echo '<div class="processa-card">'; ?>

      <?php echo '<div class="processa-check">✅</div>'; ?>

      <?php
      if (!empty($nome) && !empty($email)) {
        echo '<h1 class="processa-title">Mensagem Enviada!</h1>';
        echo '<p class="processa-msg">';
        echo 'Obrigado <strong>' . $nome . '</strong>, por entrar em contato. ';
        echo 'Enviaremos uma mensagem para seu e-mail: <strong>' . $email . '</strong>.';
        echo '</p>';

        echo '<div class="processa-resumo">';
        echo '<h3>Dados enviados:</h3>';
        echo '<ul>';
        echo '<li><strong>Nome:</strong> ' . $nome . '</li>';
        if (!empty($endereco)) echo '<li><strong>Endereço:</strong> ' . $endereco . '</li>';
        if (!empty($telefone)) echo '<li><strong>Telefone:</strong> ' . $telefone . '</li>';
        echo '<li><strong>E-mail:</strong> ' . $email . '</li>';
        echo '<li><strong>Quem é você:</strong> ' . (isset($_POST['quem']) ? htmlspecialchars($_POST['quem']) : 'Não informado') . '</li>';
        echo '<li><strong>Mensagem:</strong> ' . (isset($_POST['mensagem']) ? htmlspecialchars($_POST['mensagem']) : 'Não informada') . '</li>';
        echo '</ul>';
        echo '</div>';
      } else {
        echo '<h1 class="processa-title">Ops! Dados incompletos</h1>';
        echo '<p class="processa-msg">Por favor, preencha todos os campos obrigatórios.</p>';
      }
      ?>

      <?php echo '<a href="index.php" class="processa-btn-home">Voltar para Home</a>'; ?>
      <?php echo '<a href="contato.php" class="processa-btn-back">Enviar outro contato</a>'; ?>

    <?php echo '</div>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php include 'footer.php'; ?>