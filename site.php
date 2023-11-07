<?php
session_start();

require_once('classes/Usuario.php');
 require_once('database/conexao.php');


$database = new Conexao();
$db = $database->getConnection();
$user = new Usuario($db);

if(isset($_POST['logar'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

if ($usuario->logar($email,$senha)){
    $_SESSION['email'] = $email;
    header("Location: login.php");
    exit();
}else{
    print "<script>alert('Login invalido')</script>";
}

}


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
</head>
<body>
  <div class="bg-home">
    <header>

      <nav class="header-content container">
        <div class="header-icons" data-aos="fade-down"> 
          <a href="https://instagram.com/zoocuritiba?igshid=MWZjMTM2ODFkZg==">
           <i class="fa-brands fa-instagram fa-2x"></i>   
          </a>
          <a href="https://www.facebook.com/PrefsCuritiba/">
            <i class="fa-brands fa-facebook fa-2x"></i>   
          </a>
          <a href="https://www.tiktok.com/@prefscuritiba">
            <i class="fa-brands fa-tiktok fa-2x"></i>   
          </a>
        </div>

        <div class="header-logo" data-aos="fade-up" data-aos-delay="300">
          <img 
            data-aos="flip-up"
            data-aos-delay="300"
            data-aos-duration="1500"
            src="img/logo.png" 
            alt="Zoo Curitiba"
          />
          
        </div>

        <div data-aos="fade-down">
          <a class="header" href="#">

            
          </a>
        </div>

      </nav>

      <main class="hero container" data-aos="fade-up" data-aos-delay="400">
        <h1>Conheça um pouco sobre o Mundo Animal.</h1>
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

  <!-- FOOTER -->

  <section class="about">
    <div class="container about-content">
      <div data-aos="zoom-in" data-aos-delay="100">
        <img 
          src="img/pintada.jpg" 
          alt="Animais do Zoo"
        />
      </div>

      <div 
        class="about-description"
        data-aos="zoom-out-left" data-aos-delay="250"
      >
        <h2>Mosaico na entrada: onça-pintada</h2>
        <p>Logo na sua entrada há um lindo mosaico de uma onça-pintada, ameaçada de extinção no Brasil. A obra de arte lembra os visitantes sobre a importância das ações de proteção ambiental.(A imagem é ilustrativa, o mosaico não está disponivel na internet).</p>
        
      </div>

    </div>
  </section>

  <div data-aos="fade-down">
          <a class="header" href="#">

            
          </a>
        </div>

      </nav>

      <main class="hero container" data-aos="fade-up" data-aos-delay="400">
        <h1>Aviso aos nossos visitantes.</h1>
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

      </main>

    </header>

  </div>

  <main class="hero container3" data-aos="fade-up" data-aos-delay="400">
      <h1>"Desafie sua mente com nosso incrível jogo da memória! Exercite suas habilidades de memorização e divirta-se enquanto combina pares de cartas. Venha testar sua concentração e raciocínio com um toque de diversão!"</h1>

        <a 
          href="game/index.html"
          class="button-contact" 
          target="_blank"
          >
       Jogue nosso Game!!😉
         
        </a>
        
</main>









  <div class="services">
    <h2>Venha conhecer</h2>
    <p id="cphMasterPortal_pEndereco">
						<a id="cphMasterPortal_hlkEnderecoGoogle" class="linkExterno" href="https://www.google.com/maps/search/?api=1&amp;query=R.+JO%c3%83O+MIQUELETTO%2c+1500+Alto+Boqueir%c3%a3o%2c+Curitiba+-+PR">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7198.778953686178!2d-49.2343419!3d-25.55870595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcf98f2f7c9d91%3A0x2918348a71cd9422!2sRua%20Jo%C3%A3o%20Miqueletto%2C%201500%20-%20Alto%20Boqueir%C3%A3o%2C%20Curitiba%20-%20PR%2C%2081860-270!5e0!3m2!1spt-BR!2sbr!4v1695338070997!5m2!1spt-BR!2sbr"  width="1000" height="500" style="border:0;" _blank>Abrir no Google Maps<span class="icon-linkDireto"></span></a> allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					</p>
					
  </div>

  
  <footer class="footer">
    <div class="footer-icons">
      <a href="https://instagram.com/zoocuritiba?igshid=MWZjMTM2ODFkZg==">
        <i class="fa-brands fa-instagram fa-2x"></i>   
       </a>
       <a href="https://www.facebook.com/PrefsCuritiba/">
            <i class="fa-brands fa-facebook fa-2x"></i>   
          </a>
       <a href="https://www.tiktok.com/@prefscuritiba">
            <i class="fa-brands fa-tiktok fa-2x"></i>   
          </a>
        </div>

    <div>
      <img 
        src="img/fim.png" 
        alt="Zoo Curitiba"
      />
    </div>

    <p>Copyright 2023 | Zoológico Curitiba - Todos os direitos reservados.</p>
  </footer>


  <script src="script.js"></script>
</body>
</html>
