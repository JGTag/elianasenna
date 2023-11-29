<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="public/assets/css/style.css">

</head>

<body>
	<main class="container centralizacao mb-5">
		<div class="row areacontato">
			<div class="col-sm-6 areaaviso">
				<p class="textocontato">Use o seguinte formulário para nos enviar uma mensagem. Nossa
					equipe ficará feliz em responder a todas as suas perguntas e
					atender às suas necessidades . Queremos tornar seus momentos
					especiais ainda mais doces.</p>

				<p>*Não aceitamos encomendas por E-mail, ou pelo site. As encomendas
					deverão ser feitas pelo telefone ou Whatsapp.</p>
				<img src="public/assets/images/image.png">
			</div>
			<div class="col-sm-6 areaform">
				<form
					action="https://formsubmit.co/ajax/elianasenna.contato@gmail.com"
					id="ctt_form" class="emsg" method="POST" data-form>
					<h1>Entre em contato!</h1>

					<label for="nome"></label> 
					<input type="text" id="nome" name="nome" placeholder="Nome"> 
					<label for="email"></label> 
					<input type="email" id="email" name="email" placeholder="E-mail">
					
					<span id="error-email"></span> 
					
					<label for="mensagem"></label>
					<textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
					<button type="submit" data-button>Enviar</button>

					<input type="hidden" name="_subject" value="Entrei em contato!">

				</form>
			</div>
		</div>
	</main>
	<script src="public/assets/js/app.js"></script>
	<script src="public/assets/js/scripts.js"></script>
</body>

</html>