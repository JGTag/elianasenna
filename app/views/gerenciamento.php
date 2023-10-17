<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="public/assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="public/assets/js/scripts.js"></script>
</head>
<script>
    $("#lnkusuarios").click(function(event){
      event.preventDefault();
      $('#inicial').load("formusuario");
        });

        $("#lnkproduto").click(function(event){
      event.preventDefault();
      $('#inicial').load("formproduto");
        });

        $("#lnkmensagem").click(function(event){
      event.preventDefault();
      $('#inicial').load("formmensagem");
        });

        $("#lnkfeedback").click(function(event){
      event.preventDefault();
      $('#inicial').load("formfeedback");
        });


  </script>
<body>
<div class="form-gerenciamento row">

 
      <div class="form-link col">
        <h1>Usuario</h1>
        <a data="formusuario" id="lnkusuarios" href="#">Gerenciar</a>
        <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar um usuário</p>
      </div>
    
          
      <div class="form-link col">
        <h1>Produto</h1>
        <a data="formproduto" id="lnkproduto" href="#">Gerenciar</a>
        <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar um usuário</p>
 
      </div>

      <div class="form-link col">
        <h1>Mensagem</h1>
        <a data="formmensagem" id="lnkmensagem" href="#">Gerenciar</a>
        <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar um usuário</p>
      </div>

      <div class="form-link col">
        <h1>Feedback</h1>
        <a data="formfeedback" id="lnkfeedback" href="#">Gerenciar</a>
        <p>Atenção, o formulário a seguir afeta diretamente o banco de dados deste site, devido aos conflitos que possam gerar no mau gerenciamento desses dados, tome cuidado ao adicionar um usuário</p>
      </div>

    
  </div>
  <script>
    feather.replace()
  </script>


</body>

</html>