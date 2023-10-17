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
</head>

<body>

  <section class="areacontato ">

    <article class="areaaviso">
      <p class="textocontato">
        Use o seguinte formulário para nos enviar uma mensagem.
        Nossa equipe ficará feliz em responder a todas as suas perguntas e atender às suas necessidades .
        Queremos tornar seus momentos especiais ainda mais doces.
      </p>

      <p>
        *Não aceitamos encomendas por E-mail, ou pelo site. As encomendas deverão ser feitas pelo telefone ou Whatsapp.
      </p>
      <img src="public/assets/images/image.png">
    </article>
    <aside class="areaform">
      <form action="" id="ctt_form">
        <h1>Entre em contato!</h1>
        <label for="email"></label>
        <input type="email" id="email" placeholder="Nome" name="email" onblur="validarEmail()" onfocus="redefinirMsg()">

        <span id="error-email"></span>

        <label for="pwd"></label>
        <input type="password" id="pwd" placeholder="E-mail" name="pswd">

        <label for="message"></label>
        <textarea name="message" id="message" placeholder="Mensagem"></textarea>
        <button type="submit">Enviar mensagem</button>

      </form>
    </aside>
  </section>

</body>

</html>