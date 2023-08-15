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
</head>

<style>
  .container-contato {
    padding: 12%;
    height: 100vh;
    background-image: linear-gradient(#f2f2f2, #b1abab);
  }

  .contato {
    width: 80vh;
    height: 35vh;
    padding: 20px;
    border-radius: 8px;
    margin: 20px;
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

    .container-contato {
      padding: 90px 20px;
      height: auto;
      width: 100%;
      text-align: center;
      font-size: 1rem;
    }

    .contato {
      width: 80%;
      height: auto;
      padding: 0px;
      border-radius: 0px;
      margin: auto;
    }
  }
</style>

<body>

  <div class="container-contato">

    <div class="contato">
      <h1>Entre em contato!</h1>
      <form action="" id="ctt_form">
        <div class="mb-3 mt-3">
          <label for="email" class="form-label"></label>
          <input type="email" class="form-control" id="email" placeholder="Nome" name="email" onblur="validarEmail()" onfocus="redefinirMsg()">
        </div>
        <span id="error-email"></span>

        <div class="mb-3">
          <label for="pwd" class="form-label"></label>
          <input type="password" class="form-control" id="pwd" placeholder="E-mail" name="pswd">
        </div>
        <div class="form-check mb-3">
          <button type="submit" class="botao">Enviar mensagem</button>
      </form>
    </div>

  </div>


</body>

</html>