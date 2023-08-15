<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JGTag - Login</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="icon" href="img/logo.png">

  <script>
    $(document).ready(function() {

      let trigger = $('.navegacao ul li a'),
        container = $('#inicial');

      trigger.on('click', function(event) {
        event.preventDefault();

        let $this = $(this),
          target = $this.data('target');

        container.load(target + '.php');
      })
    })
  </script>

</head>
<style>
  footer {
    width: 100%;
    margin-top: -2px;
    height: 20vh;
    font-size: 1.2rem;
    font-family: 'Montserrat', sans-serif;
    background-color: #f0eced;
    text-align: center;
  }

  .container-formulario {
    padding: 12%;
    height: 100vh;
    background-image: url("img/fundo1.jpg");
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }

  .fundinho {
    background-color: #4B4234;
    width: 40vh;
    height: 35vh;
    padding: 10px 20px 0px 0px;
    border-radius: 8px;
    margin: 20px;
  }

  .formulario {
    width: 40vh;
    height: 35vh;
    background-color: #D9AB9A;
    padding: 20px;
    border-radius: 8px;
    margin: 20px;
  }

  .formulario h1 {
    text-align: center;
  }

  form label {
    font-size: 1.2rem;
    font-style: italic;
  }

  @media screen and (max-width:767px) {
    * {
      font-family: 'Montserrat', sans-serif;
    }

    ul {
      display: block;
      margin: 10px 30px 0px 30px;
      padding: 0px;
    }

    li {
      margin: 0px;
      margin-top: 10px;
      background-color: #EDE4DD;
      border: 2px solid white;
      border-radius: 20px;
    }

    nav {
      text-align: center;
      display: block;
      margin: 0px;
      font-size: 1.1rem;
    }

    nav li a {
      display: block;
      text-align: center;
      padding: 5px 0px;
    }

    nav img {
      height: 8vh;
    }

    footer {
      height: auto;
      font-size: 0.8rem;
      padding: 50px 0px;
    }

    footer p {
      margin: 0px;
      line-height: 30px;
    }

    .container-formulario {
      width: 100%;
      padding: 100px 0px;
      background-position: 60%;
      height: auto;
    }

    .fundinho {
      width: 75%;
      height: auto;
      padding: 30px 0px 0px 0px;
      margin: auto;
    }

    .formulario {
      font-size: 1rem;
      width: auto;
      height: 50vh;
      padding: 35px;
      margin: 0px;
    }

    .formulario h1 {
      text-align: center;
    }

    form label {
      font-style: italic;
    }
  }
</style>

<body>


  <div class="container-formulario">
    <div class="fundinho">
      <div class="formulario">
        <h1>Login</h1>
        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label"></label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" onblur="validarEmail()" onfocus="redefinirMsg()">
          </div>
          <span id="error-email"></span>

          <div class="mb-3">
            <label for="pwd" class="form-label"></label>
            <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">
          </div>
          <div class="form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>
          <button type="submit" class="botao">Submit</button>
        </form>
      </div>
    </div>
  </div>

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