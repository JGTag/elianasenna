<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="scripts.js"></script>
</head>
<script>
  $("#lnkusuarios").click(function(event) {
    event.preventDefault();
    $('#inicial').load("FormUsuario");
  });

  $("#lnkproduto").click(function(event) {
    event.preventDefault();
    $('#inicial').load("FormProduto");
  });

  $("#lnkmensagem").click(function(event) {
    event.preventDefault();
    $('#inicial').load("FormMensagem");
  });

  $("#lnkfeedback").click(function(event) {
    event.preventDefault();
    $('#inicial').load("FormFeedback");
  });
</script>
<style>
  .areagere {
    text-align: center;
    padding:  0px 30px;
  }

  .areagere img {
    width: 4%;
  }

  .cartao_geren {
    width: 50%;
    height: auto;
    margin: 30px;
    border: 5px solid #A63737;
    border-radius: 30px;
    padding: 25px;
  }

  .cartao_geren img {
    width: 20%;
  }

  .cartao_geren h2 {
    font-weight: bold;
  }
  .cartao_geren p{
    font-size: 1.1rem;
  }

  .cartaogeren-item {
    display: flex;
    align-items: center;
    justify-content: space-around;
  }

  .info_geren {
    width: 40%;
  }

  .info_geren a {
    display: block;
    width: 70%;
    cursor: context-menu;
    margin: 10px auto;
  }

  .info_geren a {
    padding: 0.6rem;
    color: #f2f2f2;
    font: inherit;
    border: none;
    border-radius: 8px;
    transition: 0.2s;
  }

  .info_geren a,
  .info_geren a:hover,
  .info_geren a:focus {
    background-color: #A64141;
  }

  .info_geren a:hover,
  .info_geren a:focus {
    outline: none;
    opacity: 0.8;
  }
</style>

<body>
  <section class="centralizacao areagere">
    <h1>Área de gerenciamento <img src="img/gerenciamento.png" class="img-fluid"></h1>
    <hr>
    <div class="row ms-5 me-5 mt-5">
      <article class="cartao_geren col">

        <div class="cartaogeren-item">

          <div class="info_geren">
            <h2>Gerenciar <br> Usuários</h2>
            <a data="formusuario" id="lnkusuarios" href="#">Gerenciar</a>
          </div>

          <div class="info_geren">
            <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar uma informação</p>
          </div>

        </div>

      </article>

      <article class="cartao_geren col">

        <div class="cartaogeren-item">

          <div class="info_geren">
            <h2>Gerenciar <br> Produto</h2>
            <a data="formproduto" id="lnkproduto" href="#">Gerenciar</a>
          </div>

          <div class="info_geren">
            <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar uma informação</p>
          </div>

        </div>

      </article>
    </div>

    <div class="row ms-5 me-5 mb-5">
      <article class="cartao_geren col">

        <div class="cartaogeren-item">

          <div class="info_geren">
            <h2>Gerenciar <br> Mensagem</h2>
            <a data="formmensagem" id="lnkmensagem" href="#">Gerenciar</a>
          </div>

          <div class="info_geren">
            <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar uma informação</p>
          </div>

        </div>

      </article>

      <article class="cartao_geren col">

        <div class="cartaogeren-item">

          <div class="info_geren">
            <h2>Gerenciar <br> Feedback</h2>
            <a data="formfeedback" id="lnkfeedback" href="#">Gerenciar</a>
          </div>

          <div class="info_geren">
            <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar uma informação</p>
          </div>

        </div>

      </article>
    </div>

  </section>
  <script>
    feather.replace()
  </script>


</body>

</html>