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
    
</style>

<body>
	<main class="centralizacao conteiner-produto">
		<section class="prod-conteiner">
			<article class="prod-item cartaoprod ">
				<section class="slider">
					<input name='slide' type="radio" > 
					<input name='slide' type="radio" checked> 

					<div class="slider-content">
						<div class="slider-item"><img src="public/assets/images/bolofatia.jpg" class="img-fluid"></div>
						<div class="slider-item"><img src="public/assets/images/bolopote5.jpg" class="img-fluid"></div>
					</div>
				</section>
			</article>
			<article class="prod-item3">
				<h3>
					<u>BOLO DE POTE E DE CORTE</u>
				</h3>
				<p>Massa de chocolate e recheios de mousse de Sensação, mousse de
					maracujá, mousse de Prestígio e outros</p>
				<p>
					<b>R$10,00/un</b>
				</p>
				<div id="linhahorizontal"></div>
				<a href="https://wa.me/5511965899216"><h3>PEÇA AGORA POR WHATSAPP!</h3></a>
			</article>
		</section>

		<section class="prod-conteiner">
			<article class="prod-item areaform">
				<H3>DEIXE UM COMENTÁRIO SOBRE O PRODUTO!</H3>
				<form id="frmBolodepote">
					<input type="hidden" name="idBoloPote" value="0">
					<div>
						<label for="nomeUserPote" class="form-label">Nome:</label> <input
							type="text" id="nomeUserPote" name="nomeUserPote"
							placeholder="Ex: anonimo123" required>
					</div>
					<div>
						<label for="comentarioUserPote" class="form-label">Comentario:</label>
						<input type="text" id="comentarioUserPote"
							name="comentarioUserPote" placeholder="Ex: Gostei!" required>
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
                        use models\Bolodepote;

                        function showTable()
                        {
                            $bolodepote = new Bolodepote();
                            $rows = $bolodepote->listAll();

                            foreach ($rows as $row) {

                                echo "
                                    <div class='feedback'>
                                          <div class='profile'></div>
                                            <p class='profile-user'><input type='text'  id='nomeUserPote' name='nomeUserPote' value='" . $row['nomeUserPote'] . "' readonly ></p>
                                            <input type='text'  id='comentarioUserPote' name='comentarioUserPote'  value='" . $row['comentarioUserPote'] . "'  readonly>
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
	    $("#frmBolodepote").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmBolodepote").serialize();
	        console.log(dados);
	        var url = "bolodepotes/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                //alert("Dado Cadastrado com Sucesso!");
		             Swal.fire({
  						title: "Comentário adicionado!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
	               	const frmBolodepote = document.querySelector('#frmBolodepote');
					frmBolodepote.reset();
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