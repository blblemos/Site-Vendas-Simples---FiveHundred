<?php
include 'menu.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Site Simples - Layout Básico</title>
    </head>

    <body>
        

        <section class="venda-single">
            <div class="line-titulo">
                <div class="ln1"></div><!--ln1-->
                <h2>Site Simples - Layout Básico</h2>

                <div class="info-bread"><a href="home.php">HOME</a><span>></span>
                    <a href="venda.php">VENDA</a><span>></span>
                    <a href="">Site Simples - Layout Básico</a>
                </div><!--info-bread-->
            </div><!--line-titulo-->

            <div class="clear"></div><!--clear-->

            <div class="container">
                
                
                <div class="info-site">
                    <div class="foto-destaque">
                            <div class="arrows"></div><!--arrows-->
                                
                            <div class="imagem"></div><!--imagem-->
                    </div><!--foto-destaque-->
                        <div class="arrows-nav">
                            <div class="arrow-left"></div><!--arrow-left-->
                            <div class="arrow-right"></div><!--arrow-right-->
                        </div><!--arrows-nav-->
                    <div class="nav-galeria">
                        
                        <div class="nav-galeria-wraper">
                            <div class="mini-img"><img class='img-img' src="IMG/site-simples-01.jpg" alt=""></div><!--mini-img-->
                            <div class="mini-img"><img class='img-img' src="IMG/SITE 01 FT03.png" alt=""></div><!--mini-img-->
                            <div class="mini-img"><img class='img-img' src="IMG/SITE 01 FT04.png" alt=""></div><!--mini-img-->
                            <div class="mini-img"><img class='img-img' src="IMG/SITE 01 FT05.png" alt=""></div><!--mini-img-->
            
                        </div><!--nav-galeria-wraper-->
                        
                    </div><!--navegacao-galeria-->
                    
                </div><!--info-site-->

                

                <div class="descricao-site">
                    <div class="descricao-site-2">
                        <h2>R$ 6.000,00</h2>
                        <p>Site para pequenas empresas com informações mais relevantes e contatos</p>
                        <a class="btn-1" href="#">Solicitar</a>
                    </div>
                </div><!--descricao-site-->
                <div class="clear"></div><!--clear-->
            </div><!--container-->

        </section><!--venda-single-->



        <?php
            include 'contato.php';
        ?>
        
    </body>

</html>

<?php
include 'footer.php';
?>