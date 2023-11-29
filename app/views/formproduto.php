<!-- <div id="tableProdutos"> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Listar Produtos</title>
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
				<h1 class="text-center">Adicionar Produtos</h1>
				<hr><br>
				<form id="frmProduto">
					<input type="hidden" name="idProduto" value="0">
					<div>
						<label for="nomeProduto" class="form-label">Nome do produto:</label>
						<input type="text" class="form-control" id="nomeProduto"
							name="nomeProduto" required> 
					</div>
					<div >
					<label for="descricao" class="form-label">Descrição:</label>
						<input type="text" class="form-control" id="descricao"
							name="descricao" required> 
					</div>
					<div >
						<label for="preco" class="form-label">Preço:</label>
						<input type="text" class="form-control" id="preco" name="preco" placeholder="Ex: 100"
							required> 
					</div>
					<div >
						<label for="ativo" class="form-label">Ativo:</label>
						<input type="text" class="form-control" id="ativo" name="ativo" placeholder="Ex: Digite 's' para ativo ou 'n' para não disponível"
							required> 
					</div>
					<input type="hidden" name="action" value="insert">
					<div>
						<button type="submit">Adicionar Produto</button>
					</div>
				</form>
			</div>


		<div class="consulta mt-5 mb-5">
			<h1 class="text-center">Excluir e Editar Produtos</h1>
			<hr><br>
            <?php
            use models\Produto;

            function showTable()
            {
                $produto = new Produto();
                $rows = $produto->listAll();

                echo "<form class='frmLine ' id='frmLine'>";

                echo "<table class='consulta'>";

                echo "
                <tr class='text-center'>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ativo</th>
                </tr>";
                foreach ($rows as $row) {

                    echo "<tr>
            <td><input class='form-control' type='text' id='idProduto' name='idProduto' value='" . $row['idProduto'] . "' readonly ></td>
            <td><input class='form-control' type='text' id='nomeProduto' name='nomeProduto'      value='" . $row['nomeProduto'] . "'  ></td>
            <td><input class='form-control' type='text' id='descricao' name='descricao'     value='" . $row['descricao'] . "'  ></td>
            <td><input class='form-control' type='text' id='preco' name='preco'  value='" . $row['preco'] . "'  ></td>
            <td><input class='form-control' type='text' id='ativo' name='ativo'  value='" . $row['ativo'] . "'  ></td>
            <input type='hidden'   name='action'    value='' >
            <td><button type='button' class='btnDelete' data-idproduto='" . $row['idProduto'] . "'>Excluir</button></td>
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
         var idProduto = form.find("input[name='idProduto']").val();
         var nomeProduto = form.find("input[name='nomeProduto']").val();
         var descricao = form.find("input[name='descricao']").val();
         var preco = form.find("input[name='preco']").val();
         var ativo = form.find("input[name='ativo']").val();
         var action = 'update';

         var dados = {
             idProduto: idProduto,
             nomeProduto: nomeProduto,
             descricao: descricao,
             preco: preco,
             ativo: ativo,
             action: action
         };

         console.log(btnSave.attr('class') + " : " + form.attr('id') + " : " + JSON.stringify(dados));

         var url = "produtos/add";
         $.post(url, dados, function(dataResponse) {
             if (dataResponse.saved === true) {
                 //alert("Dado Atualizado com Sucesso!");
                 	Swal.fire({
  						title: "Produto editado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
             } else {
                 //alert("Não Atualizado!");
                	Swal.fire({
  						title: "Falha ao editar o produto!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
             }
         }, "json")
         .fail(function(data, textStatus, errorThrown) {
             console.log("Resposta do Servidor: " + data.responseText);
         });

         $("#tableProdutos").load('showUsuarios');
     } else {
         console.error("O botão update não está dentro de um formulário.");
     }
 });
	    
$(".btnDelete").click(function(event) {
    var btnDelete = $(this);
    var idProduto = btnDelete.data('idproduto');
    var form = btnDelete.closest('form');
     
    
    // Verificar se 'form' está definido antes de acessar suas propriedades
    if (form.length) {
    	form.find("input[name='idProduto']").val(idProduto);
        form.find("input[name='action']").val('delete');
        var dados = form.serialize();

        console.log(btnDelete.attr('class') + " : " + form.attr('id') + " : " + dados);

        var url = "produtos/add";
        $.post(url, dados, function(dataResponse) {
            if (dataResponse.saved === true) {
                //alert("Dado Excluído com Sucesso!");
                	Swal.fire({
  						title: "Produto excluído com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
            } else {
                //alert("Não Excluído!");
                Swal.fire({
  						title: "Falha ao excluir o produto!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
            }
        }, "json")
        .fail(function(data, textStatus, errorThrown) {
            console.log("Resposta do Servidor: " + data.responseText);
        });

        $("#tableProdutos").load('showUsuarios');
    } else {
        console.error("O botão delete não está dentro de um formulário.");
    }
});
	    
	    
	});
	
		$(document).ready(function() {
	    $("#frmProduto").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmProduto").serialize();
	        console.log(dados);
	        var url = "produtos/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                //alert("Dado Cadastrado com Sucesso!");
	                Swal.fire({
  						title: "Produto adicionado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
					const frmProduto = document.querySelector('#frmProduto');
					frmProduto.reset();
	            } else {
	                //alert("Não Cadastrado! Inclua todos os Dados!");
	                Swal.fire({
  						title: "Falha ao adicionar o produto!",
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
