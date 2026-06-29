<?php
session_start();

$erros = [];

$nome = isset($_POST['nome']) ? trim(htmlspecialchars($_POST['nome'])) : '';
$email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
$telefone = isset($_POST['telefone']) ? trim(htmlspecialchars($_POST['telefone'])) : '';
$quem = isset($_POST['quem']) ? trim(htmlspecialchars($_POST['quem'])) : '';
$mensagem = isset($_POST['mensagem']) ? trim(htmlspecialchars($_POST['mensagem'])) : '';

// Validações
if (strlen($nome) < 3) {
    $erros['nome'] = "Digite seu nome completo.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros['email'] = "Informe um e-mail válido.";
}

if (!preg_match('/^\(\d{2}\)\s?\d{4,5}-\d{4}$/', $telefone)) {
    $erros['telefone'] = "Use o formato (11) 99999-9999.";
}

if ($quem === '') {
    $erros['quem'] = "Selecione uma opção.";
}

if (strlen($mensagem) < 10) {
    $erros['mensagem'] = "A mensagem deve ter pelo menos 10 caracteres.";
}

// Se tiver erro, volta para o formulário com os dados e os erros
if (!empty($erros)) {
    $_SESSION['erros'] = $erros;
    $_SESSION['old'] = [
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone,
        'quem' => $quem,
        'mensagem' => $mensagem
    ];
    header('Location: contato.php');
    exit;
}

// Se chegou até aqui, está tudo certo — segue para a página de sucesso
$page_title = "Mensagem Enviada - Etec Zona Leste";
$active_page = "";
include 'header.php';
?>

<?php echo '<section class="processa-section py-5">'; ?>
  <?php echo '<div class="container">'; ?>
    <?php echo '<div class="processa-card">'; ?>

      <?php echo '<div class="processa-check">✅</div>'; ?>
      <h1 class="processa-title">Mensagem Enviada!</h1>
      <p class="processa-msg">
        Obrigado <strong><?php echo $nome; ?></strong>, por entrar em contato.
        Enviaremos uma mensagem para seu e-mail: <strong><?php echo $email; ?></strong>.
      </p>

      <div class="processa-resumo">
        <h3>Dados enviados:</h3>
        <ul>
          <li><strong>Nome:</strong> <?php echo $nome; ?></li>
          <li><strong>Telefone:</strong> <?php echo $telefone; ?></li>
          <li><strong>E-mail:</strong> <?php echo $email; ?></li>
          <li><strong>Quem é você:</strong> <?php echo $quem; ?></li>
          <li><strong>Mensagem:</strong> <?php echo $mensagem; ?></li>
        </ul>
      </div>

      <a href="index.php" class="processa-btn-home">Voltar para Home</a>
      <a href="contato.php" class="processa-btn-back">Enviar outro contato</a>

    <?php echo '</div>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php include 'footer.php'; ?>