<?php
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
          <?php echo '<form action="processa.php" method="POST">'; ?>

            <?php echo '<div class="mb-4">'; ?>
              <?php echo '<label class="form-label-etec" for="nome">Nome completo</label>'; ?>
              <?php echo '<input type="text" class="form-input-etec" id="nome" name="nome" placeholder="Seu nome completo" required>'; ?>
            <?php echo '</div>'; ?>

              <?php echo '<div class="mb-4">'; ?>
              <?php echo '<label class="form-label-etec" for="email">E-mail</label>'; ?>
              <?php echo '<input type="email" class="form-input-etec" id="email" name="email" placeholder="seuemail@exemplo.com" required>'; ?>
            <?php echo '</div>'; ?>

            <?php echo '<div class="mb-4">'; ?>
              <?php echo '<label class="form-label-etec" for="telefone">Telefone</label>'; ?>
              <?php echo '<input type="tel" class="form-input-etec" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>'; ?>
            <?php echo '</div>'; ?>

            <?php echo '<div class="mb-4">'; ?>
              <?php echo '<label class="form-label-etec" for="quem">Quem você é?</label>'; ?>
              <?php echo '<select class="form-input-etec" id="quem" name="quem" required>'; ?>
                <option value="">Selecione uma opção</option>
                <option value="aluno">Aluno</option>
                <option value="professor">Professor</option>
                <option value="responsavel">Responsável</option>
                <option value="outro">Outro</option>
              <?php echo '</select>'; ?>
            <?php echo '</div>'; ?>

              <?php echo '<div class="mb-4">'; ?>
              <?php echo '<label class="form-label-etec" for="mensagem">Mensagem</label>'; ?>
              <?php echo '<textarea class="form-input-etec" id="mensagem" name="mensagem" placeholder="Sua mensagem" required></textarea>'; ?>
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
<?php echo '</section>'; ?>

<?php include 'footer.php'; ?>