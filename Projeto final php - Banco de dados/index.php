<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Climed</title>

  <!-- Caminho para o arquivo custom.css -->
  <link rel="stylesheet" type="text/css" href="custom.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Icons do bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Fonte do site -->
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- ----------------------------------PARTE DA NAVBAR INTEIRA-------------------------------------------- -->
  <!-- Barra de navegação do Bootstrap que expande e recolhe conforme o tamanho da tela -->
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">

      <!-- Logotipo ou nome da clínica, direcionando para a página inicial -->
      <a class="navbar-brand" href="#">
        <img src="image/logo.png" alt="Logo" width="50" height="50">
        <div class="slogan">
          <span>Climed acessível para todos</span>
          <span class="highlight">• Cuidando do seu bem-estar •</span>
        </div>
      </a>

      <!-- Botão para alternar a visibilidade do menu em dispositivos menores -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu de navegação principal -->
      <div class="collapse navbar-collapse d-flex justify-content-between align-items-center" id="navbarSupportedContent">
        <!-- Lista de itens de menu (botões) centralizados -->
        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Home
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?home.php">Bem-vindo</a></li>
              <li><a class="dropdown-item" href="?index.php#fundo-section">Como funciona</a></li>
            </ul>
          </li>

          <!-- Menu dropdown para acessar páginas relacionadas a Médicos -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Médicos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
              <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
            </ul>
          </li>
          <!-- Menu dropdown para acessar páginas relacionadas a Pacientes -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pacientes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
              <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
            </ul>
          </li>
          <!-- Menu dropdown para acessar páginas relacionadas a Consultas -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Consulta
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
              <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
            </ul>
          </li>
        </ul>

        <!-- Formulário de busca para pesquisa na navbar, alinhado à direita -->
        <form class="d-flex ms-auto" role="search" method="GET" action="index.php">
          <div class="input-group">
            <input type="search" name="query" placeholder="Digite aqui..." required>
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>

      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-5">
      <div class="col">

        <?php
        // Conexão com o banco de dados
        include('config.php');

        // Verifica qual página foi requisitada e inclui o respectivo arquivo
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'home';
        switch ($page) {
          case 'cadastrar-medico':
            include('cadastrar-medico.php');
            break;
          case 'editar-medico':
            include('editar-medico.php');
            break;
          case 'listar-medico':
            include('listar-medico.php');
            break;
          case 'salvar-medico':
            include('salvar-medico.php');
            break;
          case 'cadastrar-paciente':
            include('cadastrar-paciente.php');
            break;
          case 'editar-paciente':
            include('editar-paciente.php');
            break;
          case 'listar-paciente':
            include('listar-paciente.php');
            break;
          case 'salvar-paciente':
            include('salvar-paciente.php');
            break;
          case 'cadastrar-consulta':
            include('cadastrar-consulta.php');
            break;
          case 'editar-consulta':
            include('editar-consulta.php');
            break;
          case 'listar-consulta':
            include('listar-consulta.php');
            break;
          case 'salvar-consulta':
            include('salvar-consulta.php');
            break;
          default:
            include('home.php');
        }
        ?>

        <!-- ----------------------------------PARTE DA EXPLICAÇÃO DO SITE-------------------------------------------- -->
        <?php
        // Verifica se a página atual é o index.php
        if ($page == 'home') {
        ?>
          <section id="fundo-section" class="fundo-section">
            <div class="fundo-div">
              <h2>Menu Principal do nosso sistema</h2>
              <div class="cards-section">
                <div class="card">
                  <img src="image/card1.png" alt="Imagem Protocolo de Consultas" class="card-img">
                  <h5>Protocolo de Consultas</h5>
                  <p>Permite registrar, visualizar e organizar os agendamentos de consultas de forma prática, garantindo que os compromissos sejam facilmente acessíveis e atualizados em tempo real.</p>
                  <div class="dots">
                    <img src="image/tres pontinho.png" alt="" height="40" width="40">
                  </div>
                </div>
                <div class="card">
                  <img src="image/card2.png" alt="Imagem Gerenciar Médicos" class="card-img">
                  <h5>Gerenciar Médicos</h5>
                  <p>Facilita o controle sobre os dados dos médicos, como especialidades e horários de atendimento, permitindo uma melhor organização da agenda da clínica e a alocação de médicos de acordo com a demanda.</p>
                  <div class="dots">
                    <img src="image/tres pontinho.png" alt="" height="40" width="40">
                  </div>
                </div>
                <div class="card">
                  <img src="image/card3.png" alt="Imagem Gerenciar Pacientes" class="card-img">
                  <h5>Gerenciar Pacientes</h5>
                  <p>A funcionalidade de cadastro de pacientes oferece a possibilidade de adicionar novos registros, atualizar informações essenciais e acompanhar o histórico médico de cada paciente, permitindo um atendimento mais personalizado e eficiente.</p>
                  <div class="dots">
                    <img src="image/tres pontinho.png" alt="" height="40" width="40">
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
      </section>

      <!-- ----------------------------------FINALIZAÇÃO DO SITE-------------------------------------------- -->
      <!-- Seção de finalização -->
      <section id="finalizacao">
        <div class="finalizacao-div">
          <img src="image/logo.png" alt="Logo da Climed">
        </div>
        <nav class="finalizacao-links">
          <a href="#assistencia" class="footer-link">Assistência TI</a>
          <a href="#termos" class="footer-link">Termos de uso</a>
          <a href="#contato" class="footer-link">Fale conosco</a>
          <a href="#privacidade" class="footer-link">Política de privacidade</a>
        </nav>
        <p class="finalizacao-credito">
          © 2024 Kauã dos Reis Garcia
        </p>
      </section>

    <?php } ?>
    </div>
  </div>
  </div>

  <!-- Caminho para os scripts JS -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>