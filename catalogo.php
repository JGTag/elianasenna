<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    * {
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
    }

    .catalogo {
        background-color: #f0eced;
        display: grid;
        grid-template-columns: 2fr 3fr;
        grid-template-rows: 95vh;
        grid-template-areas:
            "mc gc";
    }

    .menu_catalogo {
        grid-area: mc;
        width: 100%;
        min-height: 80vh;
        padding-top: 15px;
        margin: auto;
    }

    .texto_cat {
        width: 57%;
        position: relative;
        top: 50px;
        left: 225px;
    }

    .lista_catalogo {
        display: block;

    }

    .lista_catalogo li {
        cursor: pointer;
        line-height: 15px;
        list-style: none;
    }

    .lista_catalogo li::before {
        content: "\25B6";
        color: #4B4234;
        margin-right: 15px;
    }

    .backcat {
        height: 80vh;
        background-image: url("img/catalogo.png");
        background-repeat: no-repeat;
        background-position: right;
        background-size: 75% 97%;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2rem;
    }

    .backcat h1,
    .backcat p {
        text-align: center;
    }

    section.gallery {
        grid-area: gc;
        width: 95%;
        min-height: 70vh;
        text-align: center;
        padding: 50px;
        margin-left: 0px;
    }

    .gallery {
        margin: auto;
    }

    .gallery img {
        border-radius: 5px;
        background: #E1E1E1;
        padding: 20px;
        width: 225px;
        height: 175px;
        box-shadow: 0px 0px 80px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    #gallery-popup .modal-img {
        width: 100%;
    }

    @media screen and (max-width:767px) {
        * {
            font-family: 'Montserrat', sans-serif;
        }

        ul {
            display: block;
            margin: 10px 30px 0px 30px;
            padding: 0px;
        }

        li {
            margin: 0px;
            margin-top: 10px;
            background-color: #EDE4DD;
            border: 2px solid white;
            border-radius: 20px;
        }

        nav {
            text-align: center;
            display: block;
            margin: 0px;
            font-size: 1.1rem;
        }

        nav li a {
            display: block;
            text-align: center;
            padding: 5px 0px;
        }

        nav img {
            height: 8vh;
        }

        footer {
            height: auto;
            font-size: 0.8rem;
            padding: 50px 0px;
        }

        footer p {
            margin: 0px;
            line-height: 30px;
        }

        .catalogo {
            grid-template-columns: 1fr;
            grid-template-rows: 650px auto;
            grid-template-areas:
                "mc"
                "gc";
        }

        .menu_catalogo {
            padding-top: 0px;
            margin: 0px;
        }

        .backcat {
            height: 70vh;
            background-position: center;
            background-size: 75% 93%;
            font-size: 1rem;
            padding-top: 50px;
            margin-top: 40px;
        }

        .texto_cat {
            width: 50%;
            position: static;
            top: 0px;
            left: 0px;
            margin: auto;
            padding: 0px 0px 0px 20px;
        }

        .lista_catalogo li {
            max-width: 90%;
            line-height: 20px;
            margin: 8px 0px 0px 0px;
            background: transparent;
            border: none;
            border-radius: 0px;
        }

        section.gallery {
            width: 100%;
            min-height: 70vh;
            text-align: center;
            padding: 30px;
            margin-left: 0px;
        }

        .gallery {
            margin: auto;
        }

        .gallery img {
            background: #E1E1E1;
            padding: 20px;
            max-width: 100%;
        }

        #gallery-popup .modal-img {
            width: 50%;
        }

    }
</style>

<body>
    <main class="catalogo">
        <section class="menu_catalogo">
            <div class="backcat">
                <h1 class="texto_cat">Catálogo</h1><br>
                <p class="texto_cat"><i>Espalhe amor<br>através de doces!</i></p><br>
                <ul class="lista_catalogo texto_cat">
                    <li>Bolos</li>
                    <li>Bolos decorados</li>
                    <li>Bolos de pote</li>
                    <li>Cupcakes</li>
                    <li>Brigadeiros</li>
                    <li>Doces diversos</li>
                    <li>Mousse</li>
                    <li>Cones trufados</li>
                    <li>Pão de mel</li>
                </ul>
            </div>
        </section>

        <section class="gallery">
            <div class="container-lg">
                <div class="row gy-5 row gx-4 row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
                    <div class="col ">
                        <img src="img/bolo1.jpg" class="gallery-item" alt="Bolo com detalhe rosa">
                    </div>

                    <div class="col ">
                        <img src="img/bolo2.jpg" class="gallery-item" alt="Bolo com detalhe azul">
                    </div>

                    <div class="col ">
                        <img src="img/bolo3.jpg" class="gallery-item" alt="Bolo meme">
                    </div>

                    <div class="col ">
                        <img src="img/bolo4.jpg" class="gallery-item" alt="Bolo de homem aranha">
                    </div>

                    <div class="col ">
                        <img src="img/bolopote5.jpg" class="gallery-item" alt="Bolo de pote">
                    </div>

                    <div class="col ">
                        <img src="img/bolo6.jpg" class="gallery-item" alt="Bolo do Roblox">
                    </div>

                    <div class="col ">
                        <img src="img/bolo7.jpg" class="gallery-item" alt="Bolo com detalhe rosa e verde">
                    </div>

                    <div class="col ">
                        <img src="img/bolo8.jpg" class="gallery-item" alt="Bolo das fadas">
                    </div>

                    <div class="col ">
                        <img src="img/bolocone9.jpg" class="gallery-item" alt="Cones de chocolate">
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="images/1.jpg" class="modal-img" alt="Modal Image">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("gallery-item")) {
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
                myModal.show();
            }
        })
    </script>
</body>

</html>