<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<div class="container-formulario row">

      <div class="formulario col">
        <h1>Adicionar Feedback</h1>

        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código do feedback:</label>
            <input class="form-control" placeholder="Digite o código do feedback">
          </div>
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código do usúario:</label>
            <input class="form-control" placeholder="Digite o código do usúario">
          </div>
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código do produto:</label>
            <input class="form-control" placeholder="Digite do produto">
          </div>
          <div class="mb-3 mt-3">
            <label for="mensagem" class="form-label"> Comentário:</label>
            <input class="form-control" placeholder="Digite o comentário">
          </div>
          <button type="adicionar" class="botao-form">Adicionar</button>
        </form>
      </div>

      <div class="formulario col">
        <h1>Alterar Feedback</h1>

        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código do feedback:</label>
            <input class="form-control" placeholder="Digite o código do feedback atual">
          </div>
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código do usúario:</label>
            <input class="form-control" placeholder="Alterar código do usúario">
          </div>
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código do produto:</label>
            <input class="form-control" placeholder="Alterar código do produto">
          </div>
          <div class="mb-3 mt-3">
            <label for="mensagem" class="form-label"> Comentário:</label>
            <input class="form-control" placeholder="Alterar comentário">
          </div>
          <button type="Alterar" class="botao-form">Alterar</button>
        </form>
      </div>

      <div class="formulario col">
        <h1>Excluir Feedback</h1>

        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código do feedback:</label>
            <input class="form-control" placeholder="Digite o código do feedback que será excluido">
          </div>
         
          <button type="excluir" class="botao-form">Excluir</button>
        </form>
      </div>
  </div>

  </div>

  <script>
    feather.replace()
  </script>
  <script src="scripts.js"></script>
</body>

</html>