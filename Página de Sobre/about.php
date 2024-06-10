<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="../PgHome/CSS/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/darkmodebutto.css">
</head>

<body>
    <?php 
        
        include_once('../html/header-padrao.php');

    ?>

    <button class="dark-mode-button" id="dark-mode-button"></button>

    <section class="sobre">

        <div class="texto"> <!-- Texto principal da página -->
            
            <h1>Quem somos?</h1>
            <h2>Atualmente, onde questões ambientais e sociais desempenham um papel cada vez mais importante, iniciativas que promovem a agricultura sustentável e comunitária têm ganhado destaque. 
                Entre essas iniciativas, as hortas comunitárias emergem como espaços multifacetados, não apenas fornecendo alimentos frescos e saudáveis, mas também promovendo o engajamento comunitário e o desenvolvimento social. 
                Nesse sentido, a localização e o suporte a essas hortas tornam-se cruciais para maximizar seu impacto positivo. Este site propõe explorar como a tecnologia pode ser empregada para auxiliar na localização e apoio a hortas comunitárias, 
                contribuindo assim para projetos sociais voltados para a segurança alimentar, sustentabilidade ambiental e desenvolvimento comunitário.</h2>

                <div class="audiodescricao">
                    <button id="playPauseButton" class="controlesaudio">Play/Pausar</button>
                    <button id="speedButton">Velocidade 
                        <span id="speedIndicator"> 1.0x</span></button>
                    <button id="restartButton">Reiniciar</button>
                </div>
        </div>

      

    </section>

    <footer>
        <h3 class="texto-f">HORTENSIA</h3>
        <h4 class="ed-horta">hortensia@gmail.com</h4>
    </footer>

    <script src="../js/CADASTRO.js"></script>
    <script src="../Página de Sobre/assets/js/script.js"></script>
    <script src="../js/darkcontrastmode.js"></script>
    
</body>

</html> 