<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliana Senna - Bolos & Doces</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <header>
        <nav>
            <img src="img/logo.png" alt="logo do site escrito 'Eliana Senna - Bolos & Doces' em letra cursiva">
            <ul>
                <li><a data="inicial.php" class="aLink" href="#">HOME</a></li>
                <li><a data="catalogo.php" class="aLink" href="#">CATÁLOGO</a></li>
                <li><a data="sobre.php" class="aLink" href="#">SOBRE</a></li>
                <li><a data="contato.php" class="aLink" href="#">CONTATO</a></li>
                <li><a data="entrar.php" class="aLink" href="#">ENTRAR</a></li>
            </ul>
        </nav>
    </header>

    <section id="inicial">

    </section>


    <footer id="contato">
        <p><i data-feather="phone"></i> ENTRE EM CONTATO COM A CONFEITEIRA</p>
        <p>
            <a href=""><i data-feather="instagram"></i></a>
            <a href="mailto:eliana.fank@gmail.com" target="_blank"><i data-feather="mail"></i></a>
        </p>
        <p>(11) 96589-9216</p>
        <p>Desenvolvido por JGTag &copy todos os direitos reservados.</p>
    </footer>


    <script>
        feather.replace()

        $(document).ready(function() {
            $('#inicial').load("inicial.php");


            $(".aLink").click(function(event) {
                event.preventDefault();
                $('#inicial').load($(event.target).attr("data"));
            });



        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>