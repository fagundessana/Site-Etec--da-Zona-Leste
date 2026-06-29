
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('form[action="processa.php"]');

  form.addEventListener('submit', function (e) {
    let valido = true;

    // Limpa erros antigos
    document.querySelectorAll('.erro-campo').forEach(el => el.remove());
    document.querySelectorAll('.form-input-etec').forEach(el => el.classList.remove('input-erro'));

    function mostrarErro(campo, mensagem) {
      campo.classList.add('input-erro');
      const erro = document.createElement('small');
      erro.className = 'erro-campo';
      erro.style.color = '#dc3545';
      erro.textContent = mensagem;
      campo.insertAdjacentElement('afterend', erro);
      valido = false;
    }

    const nome = document.getElementById('nome');
    const email = document.getElementById('email');
    const telefone = document.getElementById('telefone');
    const quem = document.getElementById('quem');
    const mensagem = document.getElementById('mensagem');

    if (nome.value.trim().length < 3) {
      mostrarErro(nome, 'Digite seu nome completo.');
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
      mostrarErro(email, 'Informe um e-mail válido.');
    }

    const telefoneRegex = /^\(\d{2}\)\s?\d{4,5}-\d{4}$/;
    if (!telefoneRegex.test(telefone.value.trim())) {
      mostrarErro(telefone, 'Use o formato (11) 99999-9999.');
    }

    if (quem.value === '') {
      mostrarErro(quem, 'Selecione uma opção.');
    }

    if (mensagem.value.trim().length < 10) {
      mostrarErro(mensagem, 'Escreva uma mensagem com pelo menos 10 caracteres.');
    }

    if (!valido) {
      e.preventDefault(); // impede o envio se tiver erro
    }
  });
});
