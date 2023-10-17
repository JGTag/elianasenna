<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>


<div class="container-formulario row">

      <div class="formulario col">
        <h1>Adicionar Usuario</h1>

        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código:</label>
            <input class="form-control" placeholder="Digite o código">
          </div>
          <div class="mb-3 mt-3">
            <label for="nome" class="form-label"> Nome:</label>
            <input class="form-control" placeholder="Digite o nome">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label"> Email:</label>
            <input class="form-control" placeholder="Digite o email">
          </div>
          <div class="mb-3 mt-3">
            <label for="senha" class="form-label"> Senha:</label>
            <input class="form-control" placeholder="Digite a senha">
          </div>
          <button type="adicionar" class="botao-form">Adicionar</button>
        </form>
      </div>

      <div class="formulario col">
        <h1>Alterar Usúario</h1>

        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código:</label>
            <input class="form-control" placeholder="Digite o código atual">
          </div>
          <div class="mb-3 mt-3">
            <label for="nome" class="form-label"> Nome:</label>
            <input class="form-control" placeholder="Alterar nome">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label"> Email:</label>
            <input class="form-control" placeholder="Alterar email">
          </div>
          <div class="mb-3 mt-3">
            <label for="senha" class="form-label"> Senha:</label>
            <input class="form-control" placeholder="Alterar senha">
          </div>
          <button type="alterar" class="botao-form">Alterar</button>
        </form>
      </div>

      <div class="formulario col">
        <h1>Excluir Usúario</h1>

        <form action="" id="ctt_form">
          <div class="mb-3 mt-3">
            <label for="codigo" class="form-label"> Código:</label>
            <input class="form-control" placeholder="Digite o código do usuario que será excluido">
          </div>
         
          <button type="excluir" class="botao-form">Excluir</button>
        </form>
      </div>
  </div>

  </div>

  <script>
    feather.replace()
  </script>
</body>

</html>