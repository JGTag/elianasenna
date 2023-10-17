<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="public/assets/js/scripts.js"></script>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JGTag - Login</title>
  <link rel="stylesheet" href="public/assets/css/style.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="icon" href="public/assets/images/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
  <script>
  
   $("#lnkcadastrar").click(function(event){
      event.preventDefault();
      $('#inicial').load("cadastrar");
        });
      
  </script>

</head>
<body>
  <main class="arealogin centralizacao">
    <section class="login-item shadow rounded">
      <h2>Entrar</h2>
      <form>
        <label for="email"></label>
        <input type="email" id="email" placeholder="E-mail" name="email" onblur="validarEmail()" onfocus="redefinirMsg()">

        <span id="error-email"></span>

        <label for="pwd"></label>
        <input type="password" id="pwd" placeholder="Senha" name="pwd">
        <div class="form-check mb-3">
          <label class="form-check-label" id="lembras"><input type="checkbox" class="form-check-input" name="remember">Remember-me</label>
        </div>
        <button type="submit">Submit</button>
      </form>
    </section>

    <section class="login-item shadow rounded">
      <h2>Cadastre-se</h2>
      <p>Faça o seu cadastro e favorite os produtos da confeitaria que mais te agradaram!!!</p>
      <img src="public/assets/images/pagcad.png" class="img-fluid">
      <form>
        <button data="cadastrar" id="lnkcadastrar" type="button">Cadastrar</button>
      </form>
    </section>
  </main>
</body>

<script type="text/javascript">
  function validarEmail() {
    var email = document.querySelector('#email');
    var error = document.querySelector('#error-email');

    if (!email.checkValidity()) {
      error.innerHTML = "E-mail inválido";
    }
  }

  function redefinirMsg() {
    var error = document.querySelector('#error-email');
    if (error.innerHTML == "E-mail inválido") {
      error.innerHTML = "";
    }

    $(document).on('submit', '#ctt_form', function() {
      $("input").val("");
    });
  }

  $(document).ready(function() {
    $("#ctt_form").submit(function(event) {
      event.preventDefault();
      alert("Login efetuado com sucesso!!");
    });

    $("input").keypress(function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        $(this).blur();
      }
    });
  });
</script>

<script>
  feather.replace()
</script>
</body>

</html>