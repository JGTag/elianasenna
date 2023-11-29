<!-- <div id="tableFeedback"> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Listar Feedbacks</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
" rel="stylesheet">

</head>


<body>

	<main class="container centralizacao">

			<div class="areaform formularios mb-5">
				<h1 class="text-center">Adicionar Feedbacks</h1>
				<hr><br>
				<form id="frmFeedback">
					<input type="hidden" name="idFeedback" value="0">
					<div >
						<label for="idUsuario"
							class="form-label">ID do Usuário:</label>
						<input type="text" class="form-control" id="idUsuario"
							name="idUsuario" required> 
					</div>
					<div >
						<label for="idProduto" class="form-label">ID do Produto:</label>
						<input type="text" class="form-control" id="idProduto" name="idProduto"
							required> 
					</div>
					<div>
						<label for="comentario" class="form-label">Comentário:</label>
						<input type="text" class="form-control" id="comentario" name="comentario"
							required> 
					</div>
					<input type="hidden" name="action" value="insert">
					<div >
						<button type="submit">Adicionar Feedback</button>
					</div>
				</form>
			</div>


		<div class="consulta mt-5 mb-5">
			<h1 class="text-center">Excluir e Editar Feedbacks</h1>
			<hr><br>
            <?php
            use models\Feedback;

            function showTable()
            {
                $feedback = new Feedback();
                $rows = $feedback->listAll();

                echo "<form class='frmLine ' id='frmLine'>";

                echo "<table class='consulta'>";

                echo "
                <tr class='text-center'>
                    <th>IDFeedback</th>
                    <th>IDUsuário</th>
                    <th>IDProduto</th>
                    <th>Comentário</th>
                </tr>";
                foreach ($rows as $row) {

                    echo "<tr>
            <td><input class='form-control' type='text' id='idFeedback' name='idFeedback' value='" . $row['idFeedback'] . "' readonly ></td>
            <td><input class='form-control' type='text' id='idUsuario' name='idUsuario'      value='" . $row['idUsuario'] . "'  readonly></td>
            <td><input class='form-control' type='text' id='idProduto' name='idProduto'     value='" . $row['idProduto'] . "'  readonly ></td>
            <td><input class='form-control' type='text' id='comentario' name='comentario'  value='" . $row['comentario'] . "'  ></td>
            <input type='hidden'   name='action'    value='' >
            <td><button type='button' class='btnDelete' data-idfeedback='" . $row['idFeedback'] . "'>Excluir</button></td>
            <td><button type='button'  class='btnSave' >Editar</button></td>

        </tr>";
                }
                echo "</table>";
                echo "</form>";
            }
            showTable();
            ?>
            
        </div>
        <p class="text-center text-muted h6 mb-5"><b>OBS:</b> Atualize a página após adicionar, excluir ou editar algum registro!</p>

	</main>
	<!--</div>  -->


	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

	<script src="public/assets/js/jquery.min.js"></script>
	<script src="public/assets/js/jquery.mask.js"></script>
	<script src="public/assets/js/jquery.maskedinput.js"></script>
	<script type="text/javascript">
	

		$(document).ready(function() {
		
$(".btnSave").click(function(event) {
     var btnSave = $(this);
     var form = btnSave.closest('tr');

     if (form.length) {
         var idFeedback = form.find("input[name='idFeedback']").val();
         var idUsuario = form.find("input[name='idUsuario']").val();
         var idProduto = form.find("input[name='idProduto']").val();
         var comentario = form.find("input[name='comentario']").val();
         var action = 'update';

         var dados = {
             idFeedback: idFeedback,
             idUsuario: idUsuario,
             idProduto: idProduto,
             comentario: comentario,
             action: action
         };

         console.log(btnSave.attr('class') + " : " + form.attr('id') + " : " + JSON.stringify(dados));

         var url = "feedbacks/add";
         $.post(url, dados, function(dataResponse) {
             if (dataResponse.saved === true) {
                 //alert("Dado Atualizado com Sucesso!");
                 	Swal.fire({
  						title: "Feedback editado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
             } else {
                 //alert("Não Atualizado!");
                 	Swal.fire({
  						title: "Falha ao editar o feedback!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
             }
         }, "json")
         .fail(function(data, textStatus, errorThrown) {
             console.log("Resposta do Servidor: " + data.responseText);
         });
         
         $("#tableFeedback").load('showUsuarios');

     } else {
         console.error("O botão update não está dentro de um formulário.");
     }
 });
	    
$(".btnDelete").click(function(event) {
    var btnDelete = $(this);
    var idFeedback = btnDelete.data('idfeedback');
    var form = btnDelete.closest('form');
     
    
    // Verificar se 'form' está definido antes de acessar suas propriedades
    if (form.length) {
    	form.find("input[name='idFeedback']").val(idFeedback);
        form.find("input[name='action']").val('delete');
        var dados = form.serialize();

        console.log(btnDelete.attr('class') + " : " + form.attr('id') + " : " + dados);

        var url = "feedbacks/add";
        $.post(url, dados, function(dataResponse) {
            if (dataResponse.saved === true) {
                //alert("Dado Excluído com Sucesso!");
               	Swal.fire({
  						title: "Feedback excluído com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
            } else {
                //alert("Não Excluído!");
                	 Swal.fire({
  						title: "Falha ao excluir o feedback!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
            }
        }, "json")
        .fail(function(data, textStatus, errorThrown) {
            console.log("Resposta do Servidor: " + data.responseText);
        });
        
        $("#tableFeedback").load('showUsuarios');

    } else {
        console.error("O botão delete não está dentro de um formulário.");
    }
});
	    
	    
	});
	
		$(document).ready(function() {
	    $("#frmFeedback").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmFeedback").serialize();
	        console.log(dados);
	        var url = "feedbacks/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                //alert("Dado Cadastrado com Sucesso!");
	                Swal.fire({
  						title: "Feedback adicionado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
	                const frmUsuario = document.querySelector('#frmUsuario');
					frmUsuario.reset();
	            } else {
	                //alert("Não Cadastrado! Inclua todos os Dados!");
	               	Swal.fire({
  						title: "Falha ao adicionar o feedback!",
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