<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="stylesheet" href="public/assets/css/style.css">
<script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliana Senna - Bolos & Doces</title>
    
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="icon" href="public/assets/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script>
  $("#lnkusuarios").click(function(event) {
    event.preventDefault();
    $('#gerenciamento').load("formusuario");
  });

  $("#lnkproduto").click(function(event) {
    event.preventDefault();
    $('#gerenciamento').load("formproduto");
  });

  $("#lnkmensagem").click(function(event) {
    event.preventDefault();
    $('#gerenciamento').load("formmensagem");
  });

  $("#lnkfeedback").click(function(event) {
    event.preventDefault();
    $('#gerenciamento').load("formfeedback");
  });
    $("#lnkpedido").click(function(event) {
    event.preventDefault();
    $('#gerenciamento').load("formpedido");
  });
</script>


<style>
  .info_geren a {
    display: block;
    width: 70%;
    cursor: pointer;
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
	<main class="container centralizacao areagere">
	<div class="px-2 mb-5">
		<h1>
			Área de gerenciamento <img
				src="public/assets/images/gerenciamento.png" class="img-fluid">
		</h1>
		<hr>
		<div class="row justify-content-center mt-5">
			<div class="col-sm-5 cartao_geren mx-3">
				<div class="info_geren">
					<h2>
						Gerenciar Usuários
					</h2>
					<a data="formusuario" id="lnkusuarios" href="#">Gerenciar</a>
				</div>

				<div>
					<p>Atenção, o formulário a seguir afeta diretamente o banco de
						dados deste site, devido aos conflitos que possam gerar no mau
						gerenciamento desses dados, tome cuidado ao adicionar uma
						informação</p>
				</div>
			</div>
			<div class="col-sm-5  cartao_geren mx-3">
				<div class="info_geren">
					<h2>
						Gerenciar Produto
					</h2>
					<a data="formproduto" id="lnkproduto" href="#">Gerenciar</a>
				</div>

				<div>
					<p>Atenção, o formulário a seguir afeta diretamente o banco de
						dados deste site, devido aos conflitos que possam gerar no mau
						gerenciamento desses dados, tome cuidado ao adicionar uma
						informação</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-sm-5  cartao_geren mx-3">
				<div class="info_geren">
					<h2>
						Gerenciar Mensagem
					</h2>
					<a data="formmensagem" id="lnkmensagem" href="#">Gerenciar</a>
				</div>

				<div>
					<p>Atenção, o formulário a seguir afeta diretamente o banco de
						dados deste site, devido aos conflitos que possam gerar no mau
						gerenciamento desses dados, tome cuidado ao adicionar uma
						informação</p>
				</div>
			</div>
			<div class="col-sm-5  cartao_geren mx-3">
				<div class="info_geren">
					<h2>
						Gerenciar Feedback
					</h2>
					<a data="formfeedback" id="lnkfeedback" href="#">Gerenciar</a>
				</div>

				<div>
					<p>Atenção, o formulário a seguir afeta diretamente o banco de
						dados deste site, devido aos conflitos que possam gerar no mau
						gerenciamento desses dados, tome cuidado ao adicionar uma
						informação</p>
				</div>
			</div>
		</div>
				<div class="row justify-content-center mt-4">
			<div class="col-sm-5  cartao_geren mx-3">
				<div class="info_geren">
					<h2>
						Gerenciar Pedido
					</h2>
					<a data="formpedido" id="lnkpedido" href="#">Gerenciar</a>
				</div>

				<div>
					<p>Atenção, o formulário a seguir afeta diretamente o banco de
						dados deste site, devido aos conflitos que possam gerar no mau
						gerenciamento desses dados, tome cuidado ao adicionar uma
						informação</p>
				</div>
			</div>

		</div>
		</div>
	</main>
	<script>
    feather.replace()
  </script>
	<script src="public/assets/js/scripts.js"></script>
	<script type="text/javascript">
	function logout() {
            // Redireciona para o script PHP de logout
            window.location.href = 'logout';
        }
	</script>
</body>

</html>