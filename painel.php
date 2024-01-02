<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel Administrativo | Dashboard</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/fontello.css">  
  <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="barra-lateral col-12 col-sm-auto">
        <div class="logo">
            <center>
    <img src="img/solor.jpg" width="200" alt="image description" align="iddle">
          <h2></h2>
        </div>
        <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
          <a href="#"><i class="icon-home"></i><span>Início</span></a>
          <a href="entrada/subentrada.php"><i class="icon-doc-text"></i><span>Entradas</span></a>
          <a href="agenda/agenda.html"><i class="icon-users"></i><span>Agenda</span></a>
          <a href="#"><i class="icon-cog-alt"></i><span>Configurações</span></a>
          <a href="index.php"><i class="icon-logout"></i><span>Sair</span></a>

          
        </nav>
      </div>
      <main class="main col">
        <div class="row">
          <div class="coluna col-lg-7">
            <div class="widget nova-entrada">
              <h3 class="titulo">Nova Entrada</h3>
              <form action="">
                <input type="text" placeholder="Título da Entrada">
                <textarea placeholder=" "></textarea>
                <div class="d-flex justify-content-end">
                  <button><i class="icon icon-edit"></i> Enviar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="coluna col-lg-5">
            <div class="widget estatisticas">
              <h3 class="titulo">Estatísticas</h3>
              <div class="conteudo d-flex flex-wrap">
                <div class="caixa">
                  <img src="img/1.png" width="100" alt="">
                  <p>Corporativo</p>
                </div>
                <div class="caixa">
                  <img src="img/2.png" width="100" alt="">
                  <p>SIA ADM</p>
                </div>
                <div class="caixa">
                  <img src="img/1.png" width="100" alt="">
                  <p>Processos</p>
                </div>
                <div class="caixa">
                  <img src="img/1.png" width="100" alt="">
                  <p>Processos</p>
                </div>
              </div>
            </div>
            <div class="widget comentarios">
              <h3 class="titulo">Comentários</h3>
              <div class="conteudo">
                <div class="comentario d-flex flex-wrap">
                  <div class="foto">
                    <a href="#">
                      <img src="img/persona1.png" width="100" alt="">
                    </a>
                  </div>
                  <div class="texto">
                    <a href="#">Marcelo Leão</a>
                    <p>A <a href="#">primeira entrada</a></p>
                    <p class="texto-comentario">
                      Atenção para novas atualizações
                    </p>
                  </div>
                  <div class="botoes d-flex justify-content-start flex-wrap w-100">
                    <button class="aprovar">
                      <i class="icon icon-ok"></i>Aprovar
                    </button>
                    <button class="eliminar">
                      <i class="icon icon-cancel"></i>Eliminar
                    </button>
                    <button class="bloquear">
                      <i class="icon icon-flag"></i>Bloquear Usuário
                    </button>
                  </div>
                </div>
                <div class="comentario d-flex flex-wrap">
                  <div class="foto">
                    <a href="#">
                      <img src="img/persona2.png" width="100" alt="">
                    </a>
                  </div>
                  <div class="texto">
                    <a href="#">Vagner Santos</a>
                    <p>A <a href="#">primeira entrada</a></p>
                    <p class="texto-comentario">
                      Servidores ON
                    </p>
                  </div>
                  <div class="botoes d-flex justify-content-start flex-wrap w-100">
                    <button class="aprovar">
                      <i class="icon icon-ok"></i>Aprovar
                    </button>
                    <button class="eliminar">
                      <i class="icon icon-cancel"></i>Eliminar
                    </button>
                    <button class="bloquear">
                      <i class="icon icon-flag"></i>Bloquear Usuário
                    </button>
                  </div>
                </div>
                <div class="comentario d-flex flex-wrap">
                  <div class="foto">
                    <a href="#">
                      <img src="img/persona3.png" width="100" alt="">
                    </a>
                  </div>
                  <div class="texto">
                    <a href="#">Pedro Bessa</a>
                    <p>A <a href="#">primeira entrada</a></p>
                    <p class="texto-comentario">
                      Regras de FW realizadas 
                    </p>
                  </div>
                  <div class="botoes d-flex justify-content-start flex-wrap w-100">
                    <button class="aprovar">
                      <i class="icon icon-ok"></i>Aprovar
                    </button>
                    <button class="eliminar">
                      <i class="icon icon-cancel"></i>Eliminar
                    </button>
                    <button class="bloquear">
                      <i class="icon icon-flag"></i>Bloquear Usuário
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>