<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="stylesheet" href="public/assets/css/style.css">
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
" rel="stylesheet">
</head>

<style>
    .slider {
    	overflow: hidden;
    }
    
    .slider>.slider-content {
    	display: flex;
    	flex-wrap: nowrap;
    	width: 100%;
    	transition: all 500ms ease;
    }
    
    .slider>.slider-content>.slider-item {
    	flex: 0 0 auto;
    	width: 100%;
    }
    
    .slider>input:nth-child(1):checked ~ .slider-content {
    	transform: translateX(0%);
    }
    
    .slider>input:nth-child(2):checked ~ .slider-content {
    	transform: translateX(-100%);
    }
    
    .slider>input:nth-child(3):checked ~ .slider-content {
    	transform: translateX(-200%);
    }
    
    .slider>input:nth-child(4):checked ~ .slider-content {
    	transform: translateX(-300%);
    }
    .slider>input:nth-child(5):checked ~ .slider-content {
    	transform: translateX(-400%);
    }
    .slider>input:nth-child(6):checked ~ .slider-content {
    	transform: translateX(-500%);
    }
    .slider>input:nth-child(7):checked ~ .slider-content {
    	transform: translateX(-600%);
    }
    .slider>input:nth-child(8):checked ~ .slider-content {
    	transform: translateX(-700%);
    }
</style>

<body>
	<main class="centralizacao conteiner-produto">
		<section class="prod-conteiner">
			<article class="prod-item cartaoprod ">
				<section class="slider">
					<input name='slide' type="radio" checked> 
					<input name='slide' type="radio" > 
					<input name='slide' type="radio"> 
					<input name='slide' type="radio">
					<input name='slide' type="radio">
					<input name='slide' type="radio">
					<input name='slide' type="radio">
					<input name='slide' type="radio">

					<div class="slider-content">
						<div class="slider-item"><img src="public/assets/images/bolo1.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolo2.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolo3.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolo4.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolo6.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolo7.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolo8.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolo10.jpeg" class="img-fluid"></div>
					</div>
				</section>
			</article>
			<article class="prod-item3">
				<h3>
					<u>BOLO DECORADO</u>
				</h3>
				<p>A decoração, sabor e tamanho do bolo é feita de acordo com o
					gosto do cliente, apenas entrar em contato.</p>
				<p>O número de fatias pode variar de acordo com a espessura que for
					cortada.</p>
				<p>
					<b>R$80,00/kg</b>
				</p>
				<div id="linhahorizontal"></div>
				<a href="https://wa.me/5511965899216"><h3>PEÇA AGORA POR WHATSAPP!</h3></a>
			</article>
		</section>

		<section class="prod-conteiner">
			<article class="prod-item areaform">
				<H3>DEIXE UM COMENTÁRIO SOBRE O PRODUTO!</H3>
				<form id="frmBolodecorado">
					<input type="hidden" name="idBoloDecorado" value="0">
					<div>
						<label for="nomeUserBolo" class="form-label">Nome:</label> <input
							type="text" id="nomeUserBolo" name="nomeUserBolo"
							placeholder="Ex: anonimo123" required>
					</div>
					<div>
						<label for="comentarioUserBolo" class="form-label">Comentario:</label>
						<input type="text" id="comentarioUserBolo"
							name="comentarioUserBolo" placeholder="Ex: Gostei!" required>
					</div>
					<input type="hidden" name="action" value="insert">
					<!--<textarea name="message" id="comentario" placeholder="Comentário"></textarea>-->
					<div>
						<button type="submit">Enviar</button>
					</div>
				</form>


				<div class="lhorizontal"></div>
			</article>
			<article class="prod-item2">
				<H3>COMENTÁRIOS</H3>
				<div class="comentarios">
                        <?php
                        use models\Bolodecorado;

                        function showTable()
                        {
                            $bolodecorado = new Bolodecorado();
                            $rows = $bolodecorado->listAll();

                            foreach ($rows as $row) {

                                echo "
                                    <div class='feedback'>
                                          <div class='profile'></div>
                                            <p class='profile-user'><input type='text'  id='nomeUserBolo' name='nomeUserBolo' value='" . $row['nomeUserBolo'] . "' readonly ></p>
                                             <input type='text'  id='comentarioUserBolo' name='comentarioUserBolo'  value='" . $row['comentarioUserBolo'] . "'  readonly>
                                    </div>";
                            }
                        }
                        showTable();
                        ?>
            
				</div>
			</article>
		</section>
	</main>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

	<script src="public/assets/js/jquery.min.js"></script>
	<script src="public/assets/js/jquery.mask.js"></script>
	<script src="public/assets/js/jquery.maskedinput.js"></script>
	<script type="text/javascript">
	
		$(document).ready(function() {
	    $("#frmBolodecorado").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmBolodecorado").serialize();
	        console.log(dados);
	        var url = "bolodecorado/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                //alert("Dado Cadastrado com Sucesso!");
	                   Swal.fire({
  						title: "Comentário adicionado!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
	               	const frmBolodecorado = document.querySelector('#frmBolodecorado');
					frmBolodecorado.reset();
	            } else {
	                //alert("Não Cadastrado! Inclua todos os Dados!");
	           	Swal.fire({
  						title: "Comentário não foi adicionado!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
	            }
	        }, "json")
	        .fail(function(data, textStatus, errorThrown) {
	            console.log("Resposta do Servidor: " + data.responseText);
	            //alert("Ocorreu um erro na requisição.");
	        });
	    });
	});
	
	
	</script>
</body>

</html>