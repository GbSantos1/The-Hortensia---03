<?php
    include('../html/dbconfig.php');

    if (isset($_GET['logout'])) {
        // Limpar todas as variáveis de sessão
        session_unset();

        // Destrua a sessão
        session_destroy();

        header('Location: ../PgHome/index.php');
        exit();
    }

   
    include('../html/mostrarorganizacoes.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hortensia</title>

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/swiper.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" href="assets/icon-hortensia.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/darkmodebutto.css">
    
</head>

<body>

    
    <?php 
        
        include_once('../html/header-logado.php');

    ?>

    <button class="dark-mode-button" id="dark-mode-button"></button>



    <main class="carrossel">

            <div class="swiper sldecar">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="../imagens/duas mulheres plantando em horta.jpg" alt=""></div>
                  <div class="swiper-slide"><img src="../imagens/homem cadeirante regando.jpg" alt="Homem cadeirante regando planta"></div>
                  <div class="swiper-slide"><img src="../imagens/pessoa plantando.jpg" alt="Pessoa plantando"></div>
                </div>
                <div class="swiper-button-next swiper-btnnext"></div>
                <div class="swiper-button-prev swiper-btnprev"></div>
                <div class="swiper-pagination"></div>
              </div>
    </main>
    
    <?php if ($organizacao_cadastrada): ?>
        <section class="opcoes">
        <h1 class="comunidade">Comunidades</h1>


        <div class="swiper-container cards">
            <div class="swiper-wrapper wrapper-cards">

            
                 <?php foreach ($organizacoes as $organizacao): ?>
                    <div class="swiper-slide">
                        <div class="horta-item">
                            <img src="assets/icon-perfil.png" alt="" class="icon-perfil">
                            <h2><?php echo $organizacao['nome']; ?></h2>
                            <h3 class="h-op">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</h3>
                            <h4><?php echo $organizacao['userInstagram']; ?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
            <div class="swiper-button-next botaonext"></div>
            <div class="swiper-button-prev botaoprev"></div>
            <div class="swiper-pagination"></div>
        </div>
        </section>
    <?php endif; ?>

    <div class="guia">
        
        <div class="mapa">
            <h1 class="mapa-v1">Como aparecer no <br>
                nosso site?</h1>

            <h3 class="mapa-v2">Para que o seu projeto apareça no <br>
                site você deve cadastrá-lo no <br> 
                Google Maps! Aqui está um tutorial.</h3>
            
            <button onclick="maps()" class="botao-maps"><a href="https://www.google.com/maps/place/Brazil/@-9.9310872,-98.3597173,4z/data=!3m1!4b1!4m6!3m5!1s0x9c59c7ebcc28cf:0x295a1506f2293e63!8m2!3d-14.235004!4d-51.92528!16zL20vMDE1ZnI?entry=ttu">Google Maps</a></button>
        </div>

        <iframe
        src="https://www.youtube.com/embed/TAFy0UlmIhc?si=_xf9VsIoKRj4lgzV" title="Your are my sunshine">
        </iframe>
    </div>


    <footer>
        <h3 class="texto-f">HORTENSIA</h3>
        <h4 class="ed-horta">hortensia@gmail.com</h4>
    </footer>

    <script src="/PgHome/JS/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../PgHome/JS/index.js"></script>
    <script src="../js/darkcontrastmode.js"></script>
</body>

</html>