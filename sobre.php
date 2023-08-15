<!DOCTYPE html>
<html lang="pt-br">
<style>
    .history {
        background-color: #f2f2f2;
        width: 60vh;
        height: 60vh;
        margin: 20px;
        border-radius: 10px;
    }

    .history p {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2rem;
        margin: 5px;
        text-align: center;
    }

    .history1 {
        background-color: #D9AB9A;
        width: 60vh;
        height: 60vh;
        margin-top: 20px;
        margin-left: 70px;
        border-radius: 10px;
        padding: 10px 10px 0px 0px;
    }

    .history2 {
        margin: 60px;
        height: 100vh;
    }

    .history img {
        width: 50vh;
        height: 50vh;
        margin: 50px 50px 0px 50px;
        border-radius: 5px;
    }

    .objetivos {
        margin-top: 120px;
        margin-left: 400px;
        font-size: 1.5rem;
        width: 50vh;
    }

    .objetivos ul {
        display: block;
        list-style: square;
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

        .history2 {
            width: 100%;
            margin: 0px;
        }

        .history {
            width: auto;
            height: auto;
            margin: 0px;
            padding: 50px 30px;
            border-radius: 10px;
            text-align: center;
        }

        .history1 {
            width: 60%;
            height: auto;
            border-radius: 10px;
            padding: 0px;
            padding-top: 30px;
            margin: 50px auto;
        }

        .history img {
            width: 80%;
            height: 80%;
            margin: 0px;
        }

        .history p {
            font-size: 1rem;
            margin: 0px;
            margin-top: 5px;
        }

        .objetivos {
            margin-top: 0px;
            margin-left: 0px;
            font-size: 1.1rem;
            width: 60%;
            margin: auto;
        }

        .objetivos ul {
            margin: 0px;
            padding: 0px;
            list-style: inside square;
        }

        .objetivos li {
            background-color: white;
        }
    }
</style>

<body>
    <section class="history2">
        <div class="row m-0">

            <div class="history1" class="col-sm-4">
                <div class="history">
                    <img src="img/perfil.png">
                    <p>ELIANA SENNA</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="objetivos">
                    <ul>
                        <li>Alguns objetivos da nossa cliente</li>
                        <li>Alguns objetivos da nossa cliente</li>
                        <li>Alguns objetivos da nossa cliente</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>