<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hortensia</title>
    <script src="./script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <?php 
        
        include_once('../html/header-padrao.php');

    ?>
  
    
    <section class="dicas">

        <div class="audiodescricao">
            <button id="playPauseButton" class="controlesaudio">Play/Pausar</button>
            <button id="speedButton">Velocidade 
                <span id="speedIndicator"> 1.0x</span></button>
            <button id="restartButton">Reiniciar</button>
        </div>

        <div class="TUDO">
            
                <div class="foto1">
                    <h2>HORTAS COMUNITÁRIAS:</h2>

                    <div class="imagem-1 image"> 
                        <!-- <img src="./assets/horta.jpg" id="horta-al" alt="horta-al"> -->
                    </div>
                </div>

    <div class="oque-e leia">
        <h2>O que é uma horta comunitária?</h2>
        
        <h4 class="texto1">  As hortas comunitárias são hortas coletivas responsáveis pela produção de alimentos através  do trabalho voluntário de alguns indivíduos de uma comunidade ou uma região. Muitas vezes  são utilizadas para resolver problemas sanitários de algumas áreas da cidade, já que  empregam um uso a terrenos baldios ou subutilizados, criando um ponto verde em  uma região, além de darem vida a bairros com uma área destinada ao plantio,  oferecendo bem-estar a toda comunidade. 
        Mas as hortas comunitárias também podem servir como uma maneira de transformar um grupo  de pessoas e implantar hábitos melhores. Com uma área para plantação livre de agrotóxicos, os alimentos são  ricos em nutrientes e se tornam mais saudáveis. </h4>

        <h4>Para evitar doenças e combater a obesidade, a Organização Mundial da Saúde (OMS) recomenda comer cinco  porções diárias de frutas, verduras e hortaliças, pelo menos cinco dias na semana. Quando a horta se torna parte  do dia a dia de um grupo de pessoas, hábitos alimentares melhores são estimulados e se tornam parte da rotina dos moradores.</h4> 
        
    </div>

    <div class="como-funciona leia">
        
        <h2>Como funciona uma horta comunitária?</h2>

        <h4>Com objetivos que visam à comunidade de uma região, as hortas comunitárias geralmente são feitas em áreas públicas da cidade, em espaços subutilizados que dão lugar à produção de alimentos, mas, com a popularização desse conceito, muitos condomínios residências adotaram a prática com uma proposta muito parecida com a original.</h4> 

       <h4>O processo é feito por voluntários que ajudam na organização e nos processos de plantio dos alimentos. A horta geralmente produz produtos de ciclos curtos e que podem ser facilmente consumidos ou vendidos, portanto tipos variados de plantas podem ser cultivados, sendo os mais comuns: hortaliças, leguminosas, frutas, plantas com propriedades medicinais e até mudas.</h4>
    
    </div>

    <div class="como-faz leia">
        
        <h2>Como fazer uma horta comunitária?</h2>

        <div class="imagem-2 image">
            <!-- <img src="./assets/content_canva_fucam.jpeg" alt="imagem-como-faz"> -->
        </div>

        <h4>Muito utilizada em bairros ou até em condomínios residenciais, a horta comunitária é um artifício para dar uso a espaços esquecidos que podem se tornar uma área verde que só oferecerá benefícios aos moradores. </h4>

        <h4>Depois de entender como a horta funciona, é normal que você fique animado e até pense em começar uma na região onde você mora. Então para não ficar perdido, confira um passo a passo e dicas que podem te ajudar a criar uma horta comunitária para você e para seus vizinhos!</h4>
        
    </div>

    </section>

    
    <section class="faq">
        <h1>Opiniões de especialistas</h1>

        <dl class="faq-list">
            <dt class="faq-question">Como fazer uma horta comunitária?</dt>
            <dd class="faq-answer">
                <div>
                    <div class="perfil">
                        <div class="foto-perfil-faq"> <img src="../imagens/gastro.jfif" alt="Imagem da profissional Maria Vitoria Gouveia"> </div>
                        <div class="texto-faq-perfil">
                            <h2>Maria Vitoria Gouveia</h2>
                            <h3>Gastronomia UFBA</h3>
                        </div>
                    </div>

                    <div class="texto-faq">
                    <p>“Além do conhecimento técnico, que será responsável por saber quais produtos alimentícios serão mais proveitosos naquela região baseado nos fatores bióticos, pode-se contar com o apoio de políticas publicas para conscientização de mais partes da sociedade e consequentemente o aumento da mão-de-obra voluntária que resulta em mais hortas comunitárias.”</p>
                    </div>

                </div>
            </dd>
        </dl>

        <dl class="faq-list">
            <dt class="faq-question">O que você acha das hortas comunitárias?</dt>
            <dd class="faq-answer">
                <div>
                    <div class="perfil">
                        <div class="foto-perfil-faq"> <img src="../imagens/nutri.jfif" alt="Imagem do profssional Bryan Arapiraca nutricionista"> </div>
                        <div class="texto-faq-perfil">
                            <h2>Bryan Arapiraca</h2>
                            <h3>Nutricionista</h3>
                        </div>
                    </div>

                    <div class="texto-faq">
                    <p>“As hortas comunitárias são excelentes estratégias para suprir a necessidade das comunidades com alimentos de maior qualidade, além de auxiliar na propagação de bons hábitos alimentares, e preservar o meio ambiente. Hortas comunitárias tem o "poder" de aproximar as pessoas, e estão sendo muito utilizadas em condomínios e grandes cidades, afim de melhorar a qualidade dos alimentos que chegam na mesa dos brasileiros, e afim de reduzir o consumo de alimentos industrializados.”</p>
                    </div>

                    <br>

                    <div class="perfil">
                        <div class="foto-perfil-faq"> <img src="../imagens/feirantemaria.png" alt="Dona Maria feirante"> </div>
                        <div class="texto-faq-perfil">
                            <h2>Dona Mariana</h2>
                            <h3>Feirante</h3>
                        </div>
                    </div>

                    <div class="texto-faq">
                    <p>“Como feirante, também vejo as hortas comunitárias como uma oportunidade para os produtores locais. Elas podem servir como um trampolim para aqueles que desejam começar a vender seus produtos em feiras locais, fortalecendo assim a economia local e incentivando o consumo de produtos frescos e sazonais.”</p>
                    </div>

                </div>
            </dd>
        </dl>

        <dl class="faq-list">
            <dt class="faq-question">Hortas comunitárias ajudam produtores ruais?</dt>
            <dd class="faq-answer">
                <div>
                    <div class="perfil">
                        <div class="foto-perfil-faq"> <img src="../imagens/antonio.png" alt="Foto do profissional Antônio Carlos produtor rural"> </div>
                        <div class="texto-faq-perfil">
                            <h2>Antonio Carlos</h2>
                            <h3>Produtor Rural</h3>
                        </div>
                    </div>

                    <div class="texto-faq">
                    <p>“As hortas comunitárias também podem beneficiar os agricultores familiares, pois aumentam a demanda por produtos locais e frescos. Isso pode significar mais oportunidades de venda direta e uma maior valorização dos alimentos produzidos de forma sustentável..”</p>
                    </div>

                </div>
            </dd>
        </dl>

    </section>


    <footer>
        <h3>HORTENSIA</h3>
        <h4>hortensia@gmail.com</h4>
    </footer>

    <script src="../js/ler.js"></script>
    <script src="script1.js"></script>
</body>
