<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hortensia</title>
    <script src="./script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="../PgHome/CSS/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

        <?php 
          
          include_once('../html/header-logado.php');

        ?>


  
    

        <section class="TODOS">

            <div class="comentario">

                <div class="usuario">
                    <div class="foto"></div>
                
                    <div class="iden-usuario">
                        <h1 class="nome">Maria Vitoria Gouveia</h1>

                        <h6 class="cargo">Gastronomia UFBA</h6>
                    </div>
                </div>

                <div class="texto">
                    <h2>Como fazer uma horta comunitária?</h2>
                    <h4>“Além do conhecimento técnico, que será responsável por saber quais produtos alimentícios serão mais proveitosos naquela região baseado nos fatores bióticos, pode-se contar com o apoio de políticas publicas para conscientização de mais partes da sociedade e consequentemente o aumento da mão-de-obra voluntária que resulta em mais hortas comunitárias.”</h4>
                </div>
            </div>

            <div class="comentario">

                <div class="usuario">
                    <div class="foto-nutri"></div>

                    <div class="iden-usuario">
                        <h1 class="nome">Bryan Arapiraca</h1>

                        <h6 class="cargo">Nutricionista</h6>
                    </div>
                </div>

                <div class="texto">
                    <h2>O que você acha das hortas comunitárias?</h2>
                    <h4>“As hortas comunitárias são excelentes estratégias para suprir a necessidade das comunidades com alimentos de maior qualidade, além de auxiliar na propagação de bons hábitos alimentares, e preservar o meio ambiente. Hortas comunitárias tem o "poder" de aproximar as pessoas, e estão sendo muito utilizadas em condomínios e grandes cidades, afim de melhorar a qualidade dos alimentos que chegam na mesa dos brasileiros, e afim de reduzir o consumo de alimentos industrializados.”</h4>
                </div>
            </div>
            
            <div class="comentario">

                <div class="usuario">
                    <div class="foto-f"></div>

                    <div class="iden-usuario">
                        <h1 class="nome">Dona Mariana</h1>
                        <h6 class="cargo">Feirante</h6>
                    </div>
                </div>

                <div class="texto">
                    <h2>O que você acha das hortas comunitárias?</h2>
                    <h4>“Como feirante, também vejo as hortas comunitárias como uma oportunidade para os produtores locais. Elas podem servir como um trampolim para aqueles que desejam começar a vender seus produtos em feiras locais, fortalecendo assim a economia local e incentivando o consumo de produtos frescos e sazonais.”</h4>
                </div>
            </div>

            <div class="comentario">

                <div class="usuario">
                    <div class="foto-agr"></div>

                    <div class="iden-usuario">
                        <h1 class="nome">Antonio Carlos</h1>
                        <h6 class="cargo">Produtor Rural</h6>
                    </div>
                </div>

                <div class="texto">
                    <h2>Hortas comunitárias ajudam produtores ruais?</h2>
                    <h4>“As hortas comunitárias também podem beneficiar os agricultores familiares, pois aumentam a demanda por produtos locais e frescos. Isso pode significar mais oportunidades de venda direta e uma maior valorização dos alimentos produzidos de forma sustentável..”</h4>
                </div>
            </div>
        </section>

        <section class="container-enviar"> 

            <h2>Tem alguma ideia, sugestão?</h2>
            <h3>Fala aqui com a gente!</h3>

            <input type="text" class="textButton" placeholder="Deixe seu comentário...">
            <button class="enviar" onclick="publicar()">Enviar</button>
                
        </section>

    <footer>
        <h3>HORTENSIA</h3>
        <h4>hortensia@gmail.com</h4>
    </footer>
</body>
