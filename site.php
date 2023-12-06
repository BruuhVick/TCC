<?php
session_start();

if(!isset($_SESSION['email'])){
    header ("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet" /> 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css" /> <!-- importa o css-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


  <title>Zoo Curitiba</title>

  <link rel="icon" href="../test/img/icon.png" crossorigin />

</head>
<body>
  <div class="bg-home">
    <header>

      <nav class="header-content container">
       
        <div class="header-logo" data-aos="fade-up" data-aos-delay="300">
          <img 
            data-aos="flip-up"
            data-aos-delay="300"
            data-aos-duration="1500"
            src="img/logo.png" 
            alt="Zoo Curitiba"
          />
          
        </div>
        <main class="hero container" data-aos="fade-up" data-aos-delay="400">
        <h2 class="titulo" >BEM-VINDO AO NOSSO <span> ZOOLÓGICO DE CURITIBA </span> <?php echo $email; ?></h2>

        <div data-aos="fade-down">
          <a class="header" href="#">

            
          </a>
        </div>

        

      </nav>

      <main class="hero container" data-aos="fade-up" data-aos-delay="400">
      <h2 class="titulo" >CONHEÇA UM POUCO SOBRE O <span> MUNDO ANIMAL</span></h2>
        <p>Funcionamento de Terça á Domingo: <strong>10:00</strong> ás <strong>16:00</strong></p>
        <a 
          href="https://instagram.com/zoocuritiba?igshid=MWZjMTM2ODFkZg==" 
          class="button-contact" 
          target="_blank"
        
        >
        Veja nosso Instagram;
         
        </a>
      </main>

    </header>

  </div>

  <!-- ABOUT -->
  <section class="about">
    <div class="container about-content">
      <div data-aos="zoom-in" data-aos-delay="100">
        <img 
          src="img/animals.png" 
          alt="Animais do Zoo"
        />
      </div>

      <div 
        class="about-description"
        data-aos="zoom-out-left" data-aos-delay="250"
      >
        <h2>Sobre</h2>
        <p>O Zoológico está situado dentro do Parque Regional do Iguaçu, o maior parque urbano do país, com 8 milhões de metros quadrados, 
um santuário ecológico para muitas espécies. A infraestrutura oferece estacionamento, sanitários e lanchonetes. 
O Parque é cortado pelo rio Iguaçu que forma campos inundados
 e matas ciliares em suas margens. Bosques naturais completam a paisagem.</p>
        
      </div>

    </div>
  </section>
					

  <div class="container galery">
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <img src="img/zoo6.jpg" alt="Gallery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="img/zoo5.jpg" alt="Gallery image 2" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="img/zoo4.jpg" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="img/zoo3.jpg" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="img/zoo2.jpg" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="img/zoo1.jpg" alt="Gallery image 6" class="gallery__img">
                </figure>
            </div>
        </div>

 
        
      </nav>

      <main class="hero container" data-aos="fade-up" data-aos-delay="400">
      <h2 class="titulo" >AVISO AOS NOSSOS <span>VISITANTES</span></h2>
        <p>O uso da máscara em ambientes fechados é recomendado para quem apresente sintomas de doença respiratória - febre, coriza e tosse. Recomendado também o uso do álcool em gel, para higienização frequente das mãos. Levar sua garrafa de água.
       Orientações sobre as visitas: </p>
        <a 
          href="https://156.curitiba.pr.gov.br/"
          class="button-contact" 
          target="_blank"
        
        >
       Chat Online (156) ;
         
        </a>

        <a 
          href="mailto:zoo@curitiba.pr.gov.br"
          class="button-contact" 
          target="_blank"
        
        >
       Nos envie um Email ;
         
        </a>

       
        <div data-aos="fade-down">
          <a class="header" href="#">

            
          </a>
        </div>


      </main>

    </header>

  </div>




  <script src="script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- FIM GOOGLE FONTES -->
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- FIM BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="style_eve.css">

    <script src="menu.js" defer></script>

    <title>ZOO</title>
</head>
<body>
    
    <header>
    </header>

    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>Vamos conhecer melhor nosso ZOO<span>.</span></h1>
                        <p>Aqui nós iremos fornecer informações sobre alguns experiencias que o nosso zoológico proporciona. Caso tenha interesse em turistar por Curitiba clique no botão abaixo 🛺</p>
                        <div class="btn-contato">
                        <a href="https://turismo.curitiba.pr.gov.br/categoria/atrativos-turisticos/3">
                        <button>Turistar</button>
                        </a>
</div>

                    </div><!--txt-topo-site-->

                    <div class="img-topo-site">
                        <img src="img/final.png" alt="">
                    </div><!--img-topo-site-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--topo-do-site-->

        <section class="especiliadades">
            <div class="interface">
                <h2 class="titulo">Algumas    <span>Curiosidades.</span></h2>
                
                
                
                
                <div class="flex">
                    <div class="especialidades-box">
                    <i class="bi bi-emoji-smile-fill"></i>
                        <h3>Cartilha Infantil</h3>
                        <p>A apresentação é feita pelo Blu, arara-azul-grande, que nasceu ali e que conhece bem tudo daquele espaço e seus moradores. Ele até dá umas dicas de como se comportar durante uma visita aos recintos. Boa leitura! </p>
                        <a href="https://drive.google.com/file/d/1SfNwyRb8In4rcaEeP9Be5HyHBub7oV5p/view?usp=sharing">Ver </a>
                    </div><!--especialidades-box-->

                    <div class="especialidades-box">
                    <i class="bi bi-globe-americas"></i>
                        <h3>Espécies ameaçadas</h3>
                        <p>O Zoológico de Curitiba, membro da AZAB, mantém ativamente dez espécies ameaçadas em colaboração com a ICMBio e o Ministério do Meio Ambiente. O foco é a conservação dessas espécies em risco.</p>
                        <a href="https://www.azab.org.br/more/16/comite-de-bem-estar-animal">Ver </a>
                    </div><!--especialidades-box-->

                    <div class="especialidades-box">
                    <i class="bi bi-trophy-fill"></i>
                        <h3>Prêmios </h3>
                        <p>Em 2018, o Zoo administrado pelo Departamento de Proteção e Conservação da Fauna , recebeu o Certificado de Excelência e em 2020 o prêmio Travellers Choice do site internacional de viagens TripAdvisor.</p>
                        <a href="https://turismo.curitiba.pr.gov.br/conteudo/destaques-e-premios/1763">Ver </a>              
                  
                    </div><!--especialidades-box-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--especiliadades-->

        <section class="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="" alt="">
                    </div><!--img-sobre-->

                    <div class="txt-sobre">
                    <h2>VAMOS FAZER UM TOUR DE DRONE PELO<span>ZOO?</span></h2>
                        <p>Clique no botão abaixo</p>
                        <div class="btn-social"> 
                            <a href="https://youtu.be/bTmggTc4DcM?si=12EZzR6k2q0LqE88"><button><i class="bi bi-youtube"></i></button></a>
                            
                        </div><!--btn-social-->
                    </div><!--txt-sobre-->
                
                    <div class="txt-sobre">
                    <h2>DIVIRTA-SE COM O NOSSO GAME DA<span>  MEMÓRIA!!😉.</span></h2>
                        <p>Clique no botão abaixo</p>
                        <div class="btn-social"> 
                            <a href="game/index.html"><button><i class="bi bi-controller"></i></button></a>
                            
                        </div><!--btn-social-->
                    </div><!--txt-sobre-->
                
                
                
                </div><!--flex-->
            </div><!--interface-->
        </section><!--sobre-->

        <section class="portfolio">
            <div class="interface">
                <h2 class="titulo">NOSSOS  TRABALHOS <span>  EDUCACIONAIS.</span></h2>
                <div class="flex">
                    
                <a href="https://mid.curitiba.pr.gov.br/2021/00322643.pdf" class="img-port" style="background-image: url(img/1.jpg);">
                 <div class="overlay">Acantonamento Ecológico</div>
                    </a>

        
                    
                    <a href="https://mid.curitiba.pr.gov.br/2021/00322603.pdf" class="img-port" style="background-image: url(img/2.jpg);">
                    <div class="overlay">Centro de Educação Ambiental</div>
                    </a>

                    <a href="https://mid.curitiba.pr.gov.br/2021/00322604.pdf" class="img-port" style="background-image: url(img/3.jpg);">
                     <div class="overlay">Oficina ambiental </div>
                    </a>

                    <a href="https://mid.curitiba.pr.gov.br/2021/00322606.pdf" class="img-port" style="background-image: url(img/4.jpg);">
                      <div class="overlay">Zooterapia </div>
                    </a>

                    <a href="https://mid.curitiba.pr.gov.br/2021/00322605.pdf" class="img-port" style="background-image: url(img/5.jpg);">
                     <div class="overlay">Visitas educativas</div>
                    </a>

</div>
                </div><!--flex-->
            </div><!--interface-->
        </section><!--portfolio-->


  



        

        





       
        <div class="services">
    <h2 class="titulo"> Venha nos <span>Conhecer.</span></h2>
    <p id="cphMasterPortal_pEndereco">
		<a id="cphMasterPortal_hlkEnderecoGoogle" class="linkExterno" href="https://www.google.com/maps/search/?api=1&amp;query=R.+JO%c3%83O+MIQUELETTO%2c+1500+Alto+Boqueir%c3%a3o%2c+Curitiba+-+PR">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7198.778953686178!2d-49.2343419!3d-25.55870595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcf98f2f7c9d91%3A0x2918348a71cd9422!2sRua%20Jo%C3%A3o%20Miqueletto%2C%201500%20-%20Alto%20Boqueir%C3%A3o%2C%20Curitiba%20-%20PR%2C%2081860-270!5e0!3m2!1spt-BR!2sbr!4v1695338070997!5m2!1spt-BR!2sbr"  width="1000" height="500" style="border:0;" _blank>Abrir no Google Maps<span class="icon-linkDireto"></span></a> allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					</p>
					
            </div>
       

       

    </main>


    
    <footer>
        <div class="interface">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                    <h2 class="titulo"> Volte <span> Sempre.</span></h2>  
                    </div><!--logo-footer-->
                    <div class="btn-social">
                        <a href="https://instagram.com/zoocuritiba?igshid=MWZjMTM2ODFkZg"><button><i class="bi bi-instagram"></i></button></a>
                        <a href="https://www.facebook.com/PrefsCuritiba/"><button><i class="bi bi-facebook"></i></button></a>
                       
                    </div><!--btn-social-->
                </div>
            </div><!--line-footer-->

            <div class="line-footer borda">
                <p><i class="bi bi-envelope-fill"></i> <a href="mailto:zoocuritiba3@gmail.com">zoocuritiba3@gmail.com</a></p>
            </div><!--line-footer-->
        </div><!--interface-->
    </footer>



</body>
</html>