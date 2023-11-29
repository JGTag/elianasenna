<!-- <div id="tableMensagens"> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Listar Mensagens</title>
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
				<h1 class="text-center">Adicionar Mensagens</h1>
				<hr><br>
				<form  id="frmMensagem">
					<input type="hidden" name="idMensagem" value="0">
					<div >
						<label for="idUsuario"
							class="form-label">ID do Usuário:</label>
						<input type="text" class="form-control" id="idUsuario"
							name="idUsuario" required> 
					</div>
					<div >
						<label for="emailMsg" class="form-label">E-mail:</label>
						<input type="email" class="form-control" id="emailMsg" name="emailMsg" placeholder="Ex: seuemail@gmail.com"
							required> 
					</div>
					<div >
						<label for="mensagem" class="form-label">Mensagem:</label>
						<input type="text" class="form-control" id="mensagem" name="mensagem"
							required> 
					</div>
					<input type="hidden" name="action" value="insert">
					<div >
						<button type="submit">Adicionar Mensagem</button>
					</div>
				</form>
			</div>


		<div class="consulta mt-5 mb-5">
			<h1 class="text-center">Excluir e Editar Mensagens</h1>
			<hr><br>
            <?php
            use models\Mensagem;

            function showTable()
            {
                $mensagens = new Mensagem();
                $rows = $mensagens->listAll();

                echo "<form class='frmLine ' id='frmLine'>";

                echo "<table class='consulta'>";

                echo "
                <tr class='text-center'>
                    <th>ID</th>
                    <th>IDUsuario</th>
                    <th>E-mail</th>
                    <th>Mensagem</th>
                </tr>";
                foreach ($rows as $row) {

                    echo "<tr>
            <td><input class='form-control' type='text' id='idMensagem' name='idMensagem' value='" . $row['idMensagem'] . "' readonly ></td>
            <td><input class='form-control' type='text' id='idUsuario' name='idUsuario'      value='" . $row['idUsuario'] . "' readonly ></td>
            <td><input class='form-control' type='text' id='emailMsg' name='emailMsg'     value='" . $row['emailMsg'] . "'  ></td>
            <td><input class='form-control' type='text' id='mensagem' name='mensagem'  value='" . $row['mensagem'] . "'  ></td>
            <input type='hidden'   name='action'    value='' >
            <td><button type='button' class='btnDelete' data-idmensagem='" . $row['idMensagem'] . "'>Excluir</button></td>
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
         var idMensagem = form.find("input[name='idMensagem']").val();
         var idUsuario = form.find("input[name='idUsuario']").val();
         var emailMsg = form.find("input[name='emailMsg']").val();
         var mensagem = form.find("input[name='mensagem']").val();
         var action = 'update';

         var dados = {
             idMensagem: idMensagem,
             idUsuario: idUsuario,
             emailMsg: emailMsg,
             mensagem: mensagem,
             action: action
         };

         console.log(btnSave.attr('class') + " : " + form.attr('id') + " : " + JSON.stringify(dados));

         var url = "mensagens/add";
         $.post(url, dados, function(dataResponse) {
             if (dataResponse.saved === true) {
                 //alert("Dado Atualizado com Sucesso!");
                 	Swal.fire({
  						title: "Mensagem editada com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
             } else {
                 //alert("Não Atualizado!");
                 	Swal.fire({
  						title: "Falha ao editar a mensagem!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
             }
         }, "json")
         .fail(function(data, textStatus, errorThrown) {
             console.log("Resposta do Servidor: " + data.responseText);
         });

         $("#tableMensagens").load('showUsuarios');
     } else {
         console.error("O botão update não está dentro de um formulário.");
     }
 });
	    
$(".btnDelete").click(function(event) {
    var btnDelete = $(this);
    var idMensagem = btnDelete.data('idmensagem');
    var form = btnDelete.closest('form');
     
    
    // Verificar se 'form' está definido antes de acessar suas propriedades
    if (form.length) {
    	form.find("input[name='idMensagem']").val(idMensagem);
        form.find("input[name='action']").val('delete');
        var dados = form.serialize();

        console.log(btnDelete.attr('class') + " : " + form.attr('id') + " : " + dados);

        var url = "mensagens/add";
        $.post(url, dados, function(dataResponse) {
            if (dataResponse.saved === true) {
                //alert("Dado Excluído com Sucesso!");
                	Swal.fire({
  						title: "Mensagem excluída com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
            } else {
                //alert("Não Excluído!");
                 Swal.fire({
  						title: "Falha ao excluir a mensagem!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
            }
        }, "json")
        .fail(function(data, textStatus, errorThrown) {
            console.log("Resposta do Servidor: " + data.responseText);
        });

        $("#tableMensagens").load('showMensagens');
    } else {
        console.error("O botão delete não está dentro de um formulário.");
    }
});
	    
	    
	});
	
		$(document).ready(function() {
	    $("#frmMensagem").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmMensagem").serialize();
	        console.log(dados);
	        var url = "mensagens/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                //alert("Dado Cadastrado com Sucesso!");
	                Swal.fire({
  						title: "Mensagem adicionada com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
	               	const frmUsuario = document.querySelector('#frmUsuario');
					frmUsuario.reset();
	            } else {
	                //alert("Não Cadastrado! Inclua todos os Dados!");
	                Swal.fire({
  						title: "Falha ao adicionar a mensagem!",
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
