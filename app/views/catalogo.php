<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="stylesheet" href="public/assets/css/style.css">
</head>
<script>

 $(".aProd").click(function(event) {
          event.preventDefault();
          $('#inicial').load($(event.target).attr("data"));
      });
 $(".aProd").click(function(event) {
          event.preventDefault();
          $('#gerenciamento').load($(event.target).attr("data"));
      });
      
</script>

<body>
    <main class="centralizacao">
        <section class="container gallery ">
            <div class="medio d-flex flex-md-row flex-column row row-cols-3 row-cols-sm-2 justify-content-center">
                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo1.jpg" class=" img-fluid" alt="Bolo branco com flores e borboletas rosas">
                    <h4>Bolo decorado - rosetas cor de rosa</h4>
                    <p>Bolo redondo com chantilly branco e em decoração rosa.</p>
                    <a data="bolodecorado" class="aProd text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5>
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo2.jpg" class=" img-fluid" alt="Bolo branco com detalhes em azul e roxo com borboletas douradas">
                    <h4>Bolo decorado -  rosetas azuis</h4>
                    <p>Bolo redondo com chantilly branco e em decoração azul, roxo e dourado.</p>
                    <a data="bolodecorado" class="aProd text-white text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5>
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo4.jpg" class=" img-fluid" alt="Bolo Flork: rep bardei tiuiu">
                    <h4>Bolo decorado - Homem Aranha</h4>
                    <p>Bolo redondo com chantilly azul temático do Homem Aranha.</p>
                    <a data="bolodecorado" class="aProd text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5>
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo3.jpg" class=" img-fluid" alt="Bolo do Homem Aranha">
                    <h4>Bolo decorado - Flork</h4>
                    <p>Bolo redondo com chantilly branco do boneco Flork.</p>
                    <a data="bolodecorado" class="aProd text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5> 
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolopote5.jpg" class=" img-fluid" alt="Bolo de pote">
                    <h4>Bolo de pote</h4>
                    <p>Bolo no pote de 300 ml, massa de chocolate e recheios variados.</p>
                    <a data="bolodepote" class="aProd text-white" id="bolodepote" href="#">VER PRODUTO</a>
                    <h5>Preço: R$10,00/un</h5>
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo6.jpg" class=" img-fluid" alt="Bolo do Roblox">
                    <h4>Bolo decorado - Roblox</h4>
                    <p>Bolo redondo com chantilly azul temático do jogo Roblox.</p>
                    <a data="bolodecorado" class="aProd text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5>
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo7.jpg" class=" img-fluid" alt="Bolo parabéns branco com flores rosas e borboletas douradas">
                    <h4>Bolo decorado - flores rosas</h4>
                    <p>Bolo quadrado com chantilly decorado com flores rosas.</p>
                    <a data="bolodecorado" class="aProd text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5>
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo8.jpg" class=" img-fluid" alt="Bolo da Tinker Bell">
                    <h4>Bolo decorado - Tinker Bell</h4>
                    <p>Bolo quadrado com chantilly de várias cores temático da Tinler Bell.</p>
                    <a data="bolodecorado" class="aProd text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5>
                </div>

                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolocone9.jpg" class=" img-fluid" alt="Cones de chocolate">
                    <h4>Cone trufado</h4>
                    <p>Cone de chocolate com recheios variados.</p>
                    <a data="cone" class="aProd text-white" id="cone" href="#">VER PRODUTO</a>
                    <h5>Preço: R$7,00/un</h5>
                    
                </div>
                
                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolo10.jpeg" class=" img-fluid" alt="Bolo da Lana Del Rey">
                    <h4>Bolo decorado - Lana Del Rey</h4>
                    <p>Bolo quadrado com chantilly branco temático da cantora Lana Del Rey.</p>
                    <a data="bolodecorado" class="aProd text-white" id="bolodecorado" href="#">VER PRODUTO</a>
                    <h5>Preço: R$80,00/kg</h5>
                    
                </div>
                
                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/brigadeiro.jpg" class=" img-fluid" alt="Brigadeiros variados">
                    <h4>Brigadeiros</h4>
                    <p>Brigadeiros de sabores variados: chocolate, bicho de pé, beijinho...</p>
                    <a data="brigadeiro" class="aProd text-white" id="brigadeiro" href="#">VER PRODUTO</a>
                    <h5>Centro de doces por R$100,00</h5>
                    
                </div>
                
                <div class="col gallery-item mx-3">
                    <img src="public/assets/images/bolofatia.jpg" class=" img-fluid" alt="Bolo">
                    <h4>Bolo de corte recheado</h4>
                    <p>Bolo de corte com recheios variados</p>
                    <a data="bolodepote" class="aProd text-white" id="bolodepote" href="#">VER PRODUTO</a>
                    <h5>Preço: R$10,00/un</h5>
                    
                </div>
                
            </div>
        </section>
    </main>
<script src="public/assets/js/scripts.js"></script>
</body>


</html>