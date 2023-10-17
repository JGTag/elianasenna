<!DOCTYPE html>
<html lang="pt-br">

<head>
 
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<script>

 $(".aProd").click(function(event) {
          event.preventDefault();
          $('#inicial').load($(event.target).attr("data"));
      });
      
</script>
<style>

body{
 background-color: #F4EFEC;
}
    .gallery {
        margin: 50px auto;
        padding-left: 55px;
        width: 80%;
        color: #E1E1E1;
        cursor: default;
    }

    .gallery img {
        border-radius: 5px;
        background: #E1E1E1;
        padding: 20px;
        max-width: 100%;
        box-shadow: 0px 0px 80px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    #gallery-popup .modal-img {
        width: 100%;
    }


    .cartao {
        background-color: #BF584E;
        width: 30%;
        height: auto;
        padding: 25px;
        margin-bottom: 35px;
        border-radius: 5px;
    }

    .cartao h4 {
        color: #3D0000;
        text-align: left;
        margin: 20px 10px 15px 10px;
       
    }

    .cartao p {
        color: #F4EFEC;
        text-align: justify;
        padding: 0px 10px;
    }

    .cartao h5 {
        text-align: right;

    }

 

    @media screen and (max-width:767px) {

        #gallery-popup .modal-img {
            width: 50%;
        }

        .gallery {
            width: 95%;
            margin: auto;
            padding: 50px 0;
        }

        .cartao {
            align-self: center;
            width: 80%;
        }

    }

    @media screen and (min-width: 767px) and (max-width:1240px) {
        .gallery {
            width: 100%;
            padding: 0;

        }

        .cartao {
            width: 40%;
        }

        .medio {
            padding-left: 100px;
        }
    }
</style>

<body>
    <main class="centralizacao">
        <section class="container-fluid gallery">
            <div class="medio d-flex flex-md-row flex-column row row-cols-3 row-cols-sm-2">
                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo1.jpg" class="gallery-item img-fluid" alt="Bolo com detalhe rosa">
                    <h4>Bolo simples, rosetas rosa</h4>
                    <p>Um bolo redondo de 3 kilos, serve em média 25 fatias [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                  
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo2.jpg" class="gallery-item img-fluid" alt="Bolo com detalhe azul">
                    <h4>Bolo simples, rosetas azul</h4>
                    <p>Um bolo redondo de 5 kilos, serve em média 33 fatias [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                 
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo4.jpg" class="gallery-item img-fluid" alt="Bolo Flork">
                    <h4>Bolo temático: Homem Aranha</h4>
                    <p>Um bolo redondo de 2 kilos, serve em média 20 fatias [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                 
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo3.jpg" class="gallery-item img-fluid" alt="Bolo do Homem Aranha">
                    <h4>Bolo especial de aniversário: Flork</h4>
                    <p>Um bolo redondo de 2 kilos, serve em média 20 fatias [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                 
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolopote5.jpg" class="gallery-item img-fluid" alt="Bolo de pote">
                    <h4>Bolo de pote</h4>
                    <p>Bolo no pote de 300 ml, recheios variados [...]</p>
                    <h5>Preço: R$10,00 a unidade</h5>
                  
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo6.jpg" class="gallery-item img-fluid" alt="Bolo do Roblox">
                    <h4>Bolo tematico: Roblox</h4>
                    <p>Um bolo redondo de 2,5 kilos, serve em média 20 fatias [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                 
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo7.jpg" class="gallery-item img-fluid" alt="Bolo com detalhe rosa e branco">
                    <h4>Bolo simples, rosa e branco</h4>
                    <p>Um bolo uadrado de 2 kilos, serve em média 22 pedaços [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo8.jpg" class="gallery-item img-fluid" alt="Bolo da Tinker Bell">
                    <h4>Bolo temático: Tinker Bell</h4>
                    <p>Um bolo quadrado de 2 kilos, serve em média 20 pedaços [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                 
                </div>

                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolocone9.jpg" class="gallery-item img-fluid" alt="Cones de chocolate">
                    <h4>Cone trufado</h4>
                    <p>Cone recheado de recheios variados [...]</p>
                    <h5>Preço: R$7,00 a unidade</h5>
                   
                </div>
                
                <div class="col cartao mx-3">
                    <img src="public/assets/images/bolo10.jpeg" class="gallery-item img-fluid" alt="Bolo da Lana Del Rey">
                    <h4>Bolo temático: Lana Del Rey</h4>
                    <p>Um bolo quadrado de 5 kilos, serve em média 33 fatias [...]</p>
                    <h5>Preço: R$80,00 o kilo</h5>
                 
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
                        <img src="public/assets/images/1.jpg" class="modal-img" alt="Modal Image">
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