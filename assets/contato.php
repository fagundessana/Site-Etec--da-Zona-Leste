
<?php
session_start();

$erros = $_SESSION['erros'] ?? [];
$old = $_SESSION['old'] ?? [];

// Limpa da sessão depois de usar, pra não ficar aparecendo de novo
unset($_SESSION['erros']);
unset($_SESSION['old']);

$page_title = "Contato - Etec Zona Leste";
$active_page = "contato";
include 'header.php';
?>

<?php echo '<section class="page-hero">'; ?>
  <?php echo '<div class="container text-center py-5">'; ?>
    <?php echo '<h1 class="page-hero-title">Entre em Contato</h1>'; ?>
    <?php echo '<p class="page-hero-sub">Estamos aqui para ajudar você</p>'; ?>
  <?php echo '</div>'; ?>
<?php echo '</section>'; ?>

<?php echo '<section class="contato-section py-5">'; ?>
  <?php echo '<div class="container">'; ?>
    <?php echo '<div class="row g-5">'; ?>

      <?php echo '<div class="col-lg-6">'; ?>
        <?php echo '<div class="contato-form-card">'; ?>
          <?php echo '<h2 class="contato-form-title">Envie sua mensagem</h2>'; ?>
          <?php echo '<form action="processa.php" method="POST" novalidate>'; ?>

           <?php echo '<div class="mb-4">'; ?>
  <?php echo '<label class="form-label-etec" for="nome">Nome completo</label>'; ?>
  <input type="text"
         class="form-input-etec input-erro <?php echo isset($erros['nome']) ? 'input-erro' : ''; ?>"
         id="nome" name="nome" placeholder="Seu nome completo"
         value="<?php echo $old['nome'] ?? ''; ?>" required>
  <?php if (isset($erros['nome'])) { ?>
    <small class="erro-campo"><?php echo $erros['nome']; ?></small>
  <?php } ?>
<?php echo '</div>'; ?>

<?php echo '<div class="mb-4">'; ?>
  <?php echo '<label class="form-label-etec" for="email">E-mail</label>'; ?>
  <input type="email"
         class="form-input-etec <?php echo isset($erros['email']) ? 'input-erro' : ''; ?>"
         id="email" name="email" placeholder="seuemail@exemplo.com"
         value="<?php echo $old['email'] ?? ''; ?>" required>
  <?php if (isset($erros['email'])) { ?>
    <small class="erro-campo"><?php echo $erros['email']; ?></small>
  <?php } ?>
<?php echo '</div>'; ?>

<?php echo '<div class="mb-4">'; ?>
  <?php echo '<label class="form-label-etec" for="telefone">Telefone</label>'; ?>
  <input type="tel"
         class="form-input-etec <?php echo isset($erros['telefone']) ? 'input-erro' : ''; ?>"
         id="telefone" name="telefone" placeholder="(11) 99999-9999"
         value="<?php echo $old['telefone'] ?? ''; ?>" required>
  <?php if (isset($erros['telefone'])) { ?>
    <small class="erro-campo"><?php echo $erros['telefone']; ?></small>
  <?php } ?>
<?php echo '</div>'; ?>

<?php echo '<div class="mb-4">'; ?>
  <?php echo '<label class="form-label-etec" for="quem">Quem você é?</label>'; ?>
  <select class="form-input-etec <?php echo isset($erros['quem']) ? 'input-erro' : ''; ?>"
          id="quem" name="quem" required>
    <option value="">Selecione uma opção</option>
    <option value="aluno" <?php echo (isset($old['quem']) && $old['quem'] === 'aluno') ? 'selected' : ''; ?>>Aluno</option>
    <option value="professor" <?php echo (isset($old['quem']) && $old['quem'] === 'professor') ? 'selected' : ''; ?>>Professor</option>
    <option value="responsavel" <?php echo (isset($old['quem']) && $old['quem'] === 'responsavel') ? 'selected' : ''; ?>>Responsável</option>
    <option value="outro" <?php echo (isset($old['quem']) && $old['quem'] === 'outro') ? 'selected' : ''; ?>>Outro</option>
  </select>
  <?php if (isset($erros['quem'])) { ?>
    <small class="erro-campo"><?php echo $erros['quem']; ?></small>
  <?php } ?>
<?php echo '</div>'; ?>

<?php echo '<div class="mb-4">'; ?>
  <?php echo '<label class="form-label-etec" for="mensagem">Mensagem</label>'; ?>
  <textarea class="form-input-etec <?php echo isset($erros['mensagem']) ? 'input-erro' : ''; ?>"
            id="mensagem" name="mensagem" placeholder="Sua mensagem"
            required><?php echo $old['mensagem'] ?? ''; ?></textarea>
  <?php if (isset($erros['mensagem'])) { ?>
    <small class="erro-campo"><?php echo $erros['mensagem']; ?></small>
  <?php } ?>
<?php echo '</div>'; ?>

            <?php echo '<button type="submit" class="contato-submit-btn">Enviar mensagem</button>'; ?>
          <?php echo '</form>'; ?>
        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>

      <?php echo '<div class="col-lg-6">'; ?>
        <?php echo '<div class="contato-info">'; ?>

          <?php echo '<h2 class="contato-info-title">Informações de Contato</h2>'; ?>

          <?php echo '<div class="contato-info-item">'; ?>
            <?php echo '<div class="contato-info-icon">📍</div>'; ?>
            <?php echo '<div>'; ?>
              <?php echo '<h4>Endereço</h4>'; ?>
              <?php echo '<p>Avenida Águia de Haia, 2.633<br>Cidade AE Carvalho · São Paulo/SP<br>CEP: 03694-000</p>'; ?>
            <?php echo '</div>'; ?>
          <?php echo '</div>'; ?>

          <?php echo '<div class="contato-info-item">'; ?>
            <?php echo '<div class="contato-info-icon">📞</div>'; ?>
            <?php echo '<div>'; ?>
              <?php echo '<h4>Telefone</h4>'; ?>
              <?php echo '<p>(11) 2045-4000<br>(11) 2045-4016</p>'; ?>
            <?php echo '</div>'; ?>
          <?php echo '</div>'; ?>

          <?php echo '<div class="contato-info-item">'; ?>
            <?php echo '<div class="contato-info-icon">⏰</div>'; ?>
            <?php echo '<div>'; ?>
              <?php echo '<h4>Horário de Funcionamento</h4>'; ?>
              <?php echo '<p>Segunda a Sexta<br>das 09h às 21h</p>'; ?>
            <?php echo '</div>'; ?>
          <?php echo '</div>'; ?>

          <?php echo '<div class="contato-info-item">'; ?>
            <?php echo '<div class="contato-info-icon">✉️</div>'; ?>
            <?php echo '<div>'; ?>
              <?php echo '<h4>E-mail Institucional</h4>'; ?>
              <?php echo '<p>eteczonaleste@cps.sp.gov.br</p>'; ?>
            <?php echo '</div>'; ?>
          <?php echo '</div>'; ?>

          <?php echo '<div class="contato-social mt-4">'; ?>
            <?php echo '<h4>Redes Sociais</h4>'; ?>
            <?php echo '<div class="social-links">'; ?>
              <?php echo '<a href="#" class="social-link" > Facebook</a>'; ?>
              <?php echo '<a href="#" class="social-link" > Instagram</a>'; ?>
              <?php echo '<a href="#" class="social-link"> YouTube</a>'; ?>
            <?php echo '</div>'; ?>
          <?php echo '</div>'; ?>

        <?php echo '</div>'; ?>
      <?php echo '</div>'; ?>

    <?php echo '</div>'; ?>
  <?php echo '</div>'; ?>
  <?php echo '<script src="assets/script.js"></script>'; ?>
<?php echo '</section>'; ?>

<?php include 'footer.php'; ?>