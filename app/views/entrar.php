


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Links das bibliotecas, estão internas agora-->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">

    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/jquery.mask.js"></script>
    <script src="public/assets/js/jquery.maskedinput.js"></script>
    <script src="public/assets/js/scripts.js"></script>
</head>

<body id="body" class="login">
  <main class="arealogin centralizacao">
  <section class="login-item shadow rounded">
    <h2>Você entrará como administrador</h2>
    
    <div>
                    <form id="login-form">
                        <div>
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn2 p-2 mt-3" onclick="login()">Entrar</button>
                        </div>
                        <div class="d-flex justify-content-center">
                    <button class="btn3 p-2"><a href="home" class="text-white">Voltar</a></button>
                </div>
                    </form>
                </div>
  </section>
  </main>


    <script>
        function login() {
            var email = $("#email").val();
            var senha = $("#senha").val();

            $.ajax({
                type: "POST",
                url: "usuario",
                data: {
                    action: "entrar",
                    email: email,
                    senha: senha
                },
                success: function(response) {
                    window.location.href = "adm";
                },
                error: function(xhr, status, error) {
                    console.error("Erro na solicitação AJAX:", error);
                    console.log("Detalhes do erro:", xhr.responseText);
                    displayErrorMessage("Erro na solicitação AJAX");
                }
            });
        }

        function displayErrorMessage(message) {
            $("#error-message").text(message);
        }
    </script>
</body>

</html>