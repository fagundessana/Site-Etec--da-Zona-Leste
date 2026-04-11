# 🏫 Site Etec da Zona Leste

Este repositório contém a resolução de uma atividade avaliativa desenvolvida na disciplina **Programação Web II**, com foco na criação de um site institucional completo utilizando **HTML, CSS, Bootstrap e PHP**.

O objetivo da atividade é reformular o site da Etec da Zona Leste, aplicando conceitos de estruturação de páginas, estilização, componentes responsivos e processamento de formulários com PHP.

---

## 📌 Informações da Atividade

| Campo | Informação |
|---|---|
| 📚 Disciplina | Programação Web II |
| 👩‍💻 Aluna | Ana Beatriz Araujo Fagundes |
| 🏫 Turma | 2 DS/AMS – Grupo A |
| 🏛️ Instituição | Etec da Zona Leste |

---

## 🎯 Objetivo da Atividade

- Reformular o site institucional da Etec da Zona Leste
- Estruturar páginas com as tags semânticas corretas (`<nav>`, `<section>`, `<footer>`, etc.)
- Utilizar **PHP com `echo`** para exibir todo o conteúdo do site
- Criar um formulário de contato funcional com envio e processamento via PHP
- Aplicar **Bootstrap** para responsividade e componentes visuais

---

## 🧠 Tecnologias Utilizadas

- **HTML5** – estrutura e semântica das páginas
- **CSS3** – estilização e layout customizado
- **Bootstrap 5** – componentes responsivos e grid system
- **PHP** – geração de conteúdo dinâmico e processamento de formulário

---

## 🗂️ Páginas do Projeto

### 🏠 index.php — Home
Página principal do site, contendo:
- Carrossel de imagens institucionais
- Agenda de eventos com datas
- Seção de newsletter
- Destaques de notícias
- Links rápidos para outras seções

### 📖 cursos.php — Cursos
Página com os cursos oferecidos pela Etec, contendo:
- Listagem de cursos técnicos disponíveis
- Cursos de Ensino Médio com Habilitação Técnica
- Informações de turno e duração
- Banner de chamada para o Vestibulinho

### 🏛️ gestao.php — Gestão
Página institucional com informações sobre a equipe gestora, contendo:
- Seção de Direção com foto e descrição
- Coordenações Pedagógicas por área
- Setores Administrativos com horários
- Documentos e regulamentos para download

### 🌟 oportunidades.php — Oportunidades
Página dedicada a oportunidades para os alunos, contendo:
- Carrossel de imagens institucionais
- Agenda de oportunidades com datas
- Feiras tecnológicas como a FETEPS
- Competições e olimpíadas (ex: OBMEP, EF Challenge)
- Feiras de estágio e emprego
- Destaques de eventos e notícias

### 📬 contato.php — Contato
Página com formulário de contato, contendo os campos:
- Nome completo
- Endereço
- Telefone
- E-mail

> O formulário utiliza `method="POST"` e `action="processa.php"`

### ✅ processa.php — Processamento
Página de confirmação após envio do formulário, exibindo a mensagem:

> *"Obrigado [nome], por entrar em contato. Enviaremos uma mensagem para seu e-mail: [email]."*

---

## 🗃️ Estrutura de Pastas

```
📁 SITE_ETEC/
├── index.php
├── cursos.php
├── gestao.php
├── contato.php
├── processa.php
├── header.php
├── footer.php
├── styles.css
└── 📁 assets/
    └── 📁 img/
        ├── futuroetec.png
        ├── compromissoetec.png
        ├── gestaoetec.png
        └── ...
```

---

## 🚀 Como Executar

1. Clone o repositório:
```bash
git clone https://github.com/fagundessana/Site-Etec--da-Zona-Leste.git
```

2. Mova a pasta para o diretório do XAMPP:
```
C:\xampp\htdocs\SITE_ETEC\
```

3. Inicie o **Apache** no XAMPP Control Panel

4. Acesse no navegador:
```
http://localhost/SITE_ETEC/index.php
```

---

## 👩‍💻 Autoria

**Ana Beatriz Araujo Fagundes**
Estudante de Desenvolvimento de Sistemas (AMS) – Etec da Zona Leste
