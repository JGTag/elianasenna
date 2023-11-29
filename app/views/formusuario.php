<!-- <div id="tableUsuarios"> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Listar Usuários</title>
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
				<h1 class="text-center">Adicionar Usuários</h1>
				<hr><br>
				<form id="frmUsuario">
					<input type="hidden" name="idUsuario" value="0">
					<div>
					<label for="nomeUsuario"
							class="form-label">Nome:</label>
						<input type="text" class="form-control" id="nomeUsuario"
							name="nomeUsuario" placeholder="Ex: Usuário" required> 
					</div>
					<div>
					<label for="email" class="form-label">E-mail:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Ex: Usuario@gmail.com"
							required> 
					</div>
					<div >
						<label for="senha" class="form-label">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Ex: senha123"
							required> 
					</div>
					<input type="hidden" name="action" value="insert">
					<div>
						<button type="submit">Adicionar Usuário</button>
					</div>
				</form>
			</div>

		<div class="consulta mt-5 mb-5">
			<h1 class="text-center">Excluir e Editar Usuários</h1>
			<hr><br>
            <?php
            use models\Usuario;

            function showTable()
            {
                $usuario = new Usuario();
                $rows = $usuario->listAll();

                echo "<form class='frmLine' id='frmLine'>";

                echo "<table class='consulta'>";

                echo "
                <tr class='text-center'>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                </tr>";
                foreach ($rows as $row) {

                    echo "<tr>
            <td><input class='form-control' type='text' id='idUsuario' name='idUsuario' value='" . $row['idUsuario'] . "' readonly ></td>
            <td><input class='form-control' type='text' id='nomeUsuario' name='nomeUsuario'      value='" . $row['nomeUsuario'] . "'  ></td>
            <td><input class='form-control' type='text' id='email' name='email'     value='" . $row['email'] . "'  ></td>
            <td><input class='form-control' type='text' id='senha' name='senha'  value='" . $row['senha'] . "'  ></td>
            <input type='hidden'   name='action'    value='' >
            <td><button type='button' class='btnDelete' data-idusuario='" . $row['idUsuario'] . "'>Excluir</button></td>
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
         var idUsuario = form.find("input[name='idUsuario']").val();
         var nomeUsuario = form.find("input[name='nomeUsuario']").val();
         var email = form.find("input[name='email']").val();
         var senha = form.find("input[name='senha']").val();
         var action = 'update';

         var dados = {
             idUsuario: idUsuario,
             nomeUsuario: nomeUsuario,
             email: email,
             senha: senha,
             action: action
         };

         console.log(btnSave.attr('class') + " : " + form.attr('id') + " : " + JSON.stringify(dados));

         var url = "usuarios/add";
         $.post(url, dados, function(dataResponse) {
             if (dataResponse.saved === true) {
                 //alert("Dado Atualizado com Sucesso!");
                 	Swal.fire({
  						title: "Usuário editado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
             } else {
                 //alert("Não Atualizado!");
                 Swal.fire({
  						title: "Falha ao editar o usuário!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
             }
         }, "json")
         .fail(function(data, textStatus, errorThrown) {
             console.log("Resposta do Servidor: " + data.responseText);
         });

         $("#tableUsuarios").load('showUsuarios');
     } else {
         console.error("O botão update não está dentro de um formulário.");
     }
 });
	    
$(".btnDelete").click(function(event) {
    var btnDelete = $(this);
    var idUsuario = btnDelete.data('idusuario');
    var form = btnDelete.closest('form');
     
    
    // Verificar se 'form' está definido antes de acessar suas propriedades
    if (form.length) {
    	form.find("input[name='idUsuario']").val(idUsuario);
        form.find("input[name='action']").val('delete');
        var dados = form.serialize();

        console.log(btnDelete.attr('class') + " : " + form.attr('id') + " : " + dados);

        var url = "usuarios/add";
        $.post(url, dados, function(dataResponse) {
            if (dataResponse.saved === true) {
                //alert("Dado Excluído com Sucesso!");
                	Swal.fire({
  						title: "Usuário excluído com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
            } else {
                //alert("Não Excluído!");
                Swal.fire({
  						title: "Falha ao excluir o usuário!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
            }
        }, "json")
        .fail(function(data, textStatus, errorThrown) {
            console.log("Resposta do Servidor: " + data.responseText);
        });

        $("#tableUsuarios").load('showUsuarios');
    } else {
        console.error("O botão delete não está dentro de um formulário.");
    }
});
	    
	    
	});
	
		$(document).ready(function() {
	    $("#frmUsuario").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmUsuario").serialize();
	        console.log(dados);
	        var url = "usuarios/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                //alert("Dado Cadastrado com Sucesso!");
					Swal.fire({
  						title: "Usuário adicionado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
	                const frmUsuario = document.querySelector('#frmUsuario');
					frmUsuario.reset();
	            } else {
	                //alert("Não Cadastrado! Inclua todos os Dados!");
	                Swal.fire({
  						title: "Falha ao adicionar o usuário!",
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
