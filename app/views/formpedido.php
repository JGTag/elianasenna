<!-- <div id="tablePedidos"> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Listar Pedidos</title>
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
				<h1 class="text-center">Adicionar Pedidos</h1>
				<hr><br>
				<form id="frmPedido">
					<input type="hidden" name="idPedido" value="0">
					<div>
						<label for="nomeCliente" class="form-label">Nome do cliente:</label>
						<input type="text" class="form-control" id="nomeCliente"
							name="nomeCliente" required> 
					</div>
					<div >
					<label for="idProduto" class="form-label">ID do produto:</label>
						<input type="text" class="form-control" id="idProduto"
							name="idProduto" required> 
					</div>
					<div >
						<label for="valorTotal" class="form-label">Valor total do pedido:</label>
						<input type="text" class="form-control" id="valorTotal" name="valorTotal" placeholder="Ex: 100"
							required> 
					</div>
                    <div >
						<label for="valorInicial" class="form-label">Valor de entrada pago:</label>
						<input type="text" class="form-control" id="valorInicial" name="valorInicial" placeholder="Ex: 50"
							required> 
					</div>
                    <div >
						<label for="valorFinal" class="form-label">Valor restante pago:</label>
						<input type="text" class="form-control" id="valorFinal" name="valorFinal" placeholder="Ex: 50"
							required> 
					</div>
                    <div >
						<label for="dataEntrega" class="form-label">Data de entrega do pedido:</label>
						<input type="text" class="form-control" id="dataEntrega" name="dataEntrega" placeholder="Ex: Digite: '00/00/0000'"
							required> 
					</div>
					<div >
						<label for="status" class="form-label">Status do pedido:</label>
						<input type="text" class="form-control" id="status" name="status" placeholder="Ex: Efetuado, Pago, Em andamento, Feito, Entregue..."
							required> 
					</div>
					<input type="hidden" name="action" value="insert">
					<div>
						<button type="submit">Adicionar Pedido</button>
					</div>
				</form>
			</div>


		<div class="consulta mt-5 mb-5">
			<h1 class="text-center">Excluir e Editar Pedidos</h1>
			<hr><br>
            <?php
            use models\Pedido;

            function showTable()
            {
                $pedido = new Pedido();
                $rows = $pedido->listAll();

                echo "<form class='frmLine ' id='frmLine'>";

                echo "<table class='consulta'>";

                echo "
                <tr class='text-center'>
                    <th>IDPedido</th>
                    <th>NomeCliente</th>
                    <th>IDProduto</th>
                    <th>ValorTotal</th>
                    <th>ValorInicial</th>
                    <th>ValorFinal</th>
                    <th>DataEntrega</th>
                    <th>Status</th>
                </tr>";
                foreach ($rows as $row) {

                    echo "<tr>
            <td><input class='form-control' type='text' id='idPedido' name='idPedido' value='" . $row['idPedido'] . "' readonly ></td>
            <td><input class='form-control' type='text' id='nomeCliente' name='nomeCliente'      value='" . $row['nomeCliente'] . "'  ></td>
            <td><input class='form-control' type='text' id='idProduto' name='idProduto'     value='" . $row['idProduto'] . "'  ></td>
            <td><input class='form-control' type='text' id='valorTotal' name='valorTotal'  value='" . $row['valorTotal'] . "'  ></td>
            <td><input class='form-control' type='text' id='valorInicial' name='valorInicial'  value='" . $row['valorInicial'] . "'  ></td>
            <td><input class='form-control' type='text' id='valorFinal' name='valorFinal'  value='" . $row['valorFinal'] . "'  ></td>
            <td><input class='form-control' type='text' id='dataEntrega' name='dataEntrega'  value='" . $row['dataEntrega'] . "'  ></td>
            <td><input class='form-control' type='text' id='status' name='status'  value='" . $row['status'] . "'  ></td>
            <input type='hidden'   name='action'    value='' >
            <td><button type='button' class='btnDelete' data-idpedido='" . $row['idPedido'] . "'>Excluir</button></td>
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
         var idPedido = form.find("input[name='idPedido']").val();
         var nomeCliente = form.find("input[name='nomeCliente']").val();
         var idProduto = form.find("input[name='idProduto']").val();
         var valorTotal = form.find("input[name='valorTotal']").val();
         var valorInicial = form.find("input[name='valorInicial']").val();
         var valorFinal = form.find("input[name='valorFinal']").val();
         var dataEntrega = form.find("input[name='dataEntrega']").val();
         var status = form.find("input[name='status']").val();
         var action = 'update';

         var dados = {
             idPedido: idPedido,
             nomeCliente: nomeCliente,
             idProduto: idProduto,
             valorTotal: valorTotal,
             valorInicial: valorInicial,
             valorFinal: valorFinal,
             dataEntrega: dataEntrega,
             status: status,
             action: action
         };

         console.log(btnSave.attr('class') + " : " + form.attr('id') + " : " + JSON.stringify(dados));

         var url = "pedidos/add";
         $.post(url, dados, function(dataResponse) {
             if (dataResponse.saved === true) {
                 //alert("Dado Atualizado com Sucesso!");
                 Swal.fire({
  						title: "Pedido editado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
             } else {
                 //alert("Não Atualizado!");
       				Swal.fire({
  						title: "Falha ao editar o pedido!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
             }
         }, "json")
         .fail(function(data, textStatus, errorThrown) {
             console.log("Resposta do Servidor: " + data.responseText);
         });

         $("#tablePedidos").load('showUsuarios');
     } else {
         console.error("O botão update não está dentro de um formulário.");
     }
 });
	    
$(".btnDelete").click(function(event) {
    var btnDelete = $(this);
    var idPedido = btnDelete.data('idpedido');
    var form = btnDelete.closest('form');
     
    
    // Verificar se 'form' está definido antes de acessar suas propriedades
    if (form.length) {
    	form.find("input[name='idPedido']").val(idPedido);
        form.find("input[name='action']").val('delete');
        var dados = form.serialize();

        console.log(btnDelete.attr('class') + " : " + form.attr('id') + " : " + dados);

        var url = "pedidos/add";
        $.post(url, dados, function(dataResponse) {
            if (dataResponse.saved === true) {
                //alert("Dado Excluído com Sucesso!");
                 Swal.fire({
  						title: "Pedido excluído com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
            } else {
                //alert("Não Excluído!");
                  	Swal.fire({
  						title: "Falha ao excluir o pedido!",
  						confirmButtonColor: '#A64141',
  						icon: "error"
					});
            }
        }, "json")
        .fail(function(data, textStatus, errorThrown) {
            console.log("Resposta do Servidor: " + data.responseText);
        });

        $("#tablePedidos").load('showUsuarios');
    } else {
        console.error("O botão delete não está dentro de um formulário.");
    }
});
	    
	    
	});
	
		$(document).ready(function() {
	    $("#frmPedido").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmPedido").serialize();
	        console.log(dados);
	        var url = "pedidos/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                //alert("Dado Cadastrado com Sucesso!");
	               	Swal.fire({
  						title: "Pedido adicionado com sucesso!",
  						confirmButtonColor: '#A64141',
  						icon: "success"
					});
					const frmUsuario = document.querySelector('#frmUsuario');
					frmUsuario.reset();
	            } else {
	                //alert("Não Cadastrado! Inclua todos os Dados!");
	               	Swal.fire({
  						title: "Falha ao adicionar o pedido!",
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
