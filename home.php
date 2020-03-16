<?php
include 'menu.php';
?>

<!DOCTYPE html>

<html>
    <head>
    <title>FVH Vendas - HOME</title>
    <style>
            nav.menu-desk ul li:nth-of-type(1) a{
                color: white;
            }
            nav.menu-mobile ul li:nth-of-type(1) a{
                color: white;
            }

            nav.menu-rodape ul li:nth-of-type(1) a{
                color: #997AFF;
            }
        </style>
    </head>
    
    <body>
        <section class="banner">
            <div class="container-skew1">
                <div class="container-skew">
                    <div class="skew">
                        <h2 class="p-skew">Sites + Aplicativos</h2>
                    </div><!--skew-->
    
                    <div class="skew">
                        <h2 class="p-skew">Aplicativos</h2>
                    </div><!--skew-->
    
                    <div class="skew">
                        <h2 class="p-skew">Sites</h2>
                    </div><!--skew-->
                </div><!--container-skew-->
            </div><!--container-skew1-->
        </section><!--banner-->
                    <div class="clear"></div><!--clear-->

        <section class="sites-destaque">
            <div class="line-titulo">
                <div class="ln1"></div><!--ln1-->
                <h2>Sites em Destaque</h2>
            </div><!--line-titulo-->

            <div class="container">
                <div class="vitrine-destaque">
                    <div class="site-img">
                        <img src="IMG/site-simples-01.jpg" alt="">
                    </div><!--site-img-->
                    <div class="info-site">
                        <h2>Site Simples - Layout Básico</h2>
                        <p>Site para pequenas empresas com informações mais relevantes e contatos</p>
                        <a href="Site Simples-Layout Básico.php">Mais Detalhes</a>
                    </div>
                </div><!--vitrine-destaque-->

                <div class="vitrine-destaque">
                    <div class="site-img">
                        <img src="IMG/landing-page-01.jpg" alt="">
                    </div><!--site-img-->
                    <div class="info-site">
                        <h2>Landing Page, Com Mais Informações - Layout Básico</h2>
                        <p>Landing Page para pequenas empresas com informações mais relevantes e contatos</p>
                        <a href="#">Mais Detalhes</a>
                    </div>
                </div><!--vitrine-destaque-->

                <div class="vitrine-destaque">
                    <div class="site-img">
                        <img src="IMG/landing-page-02.jpg" alt="">
                    </div><!--site-img-->
                    <div class="info-site">
                        <h2>Landing Page Básica - Layout Básico</h2>
                        <p>Landing Page para pequenas empresas com informações mais relevantes e contatos</p>
                        <a href="#">Mais Detalhes</a>
                    </div>
                </div><!--vitrine-destaque-->
            </div><!--container-->
        </section><!--sites-destaque-->

        <section class="sercicos-descricao">
            <div class="container">
                    <div class="half-1">
                        <div class="half-1_wraper">
                            <h2>Serviços</h2>
                            <ul>
                                <li>Sites Responsivos</li>
                                <li>Manutenção de sites e aplicativos</li>
                                <li>Alterações/Melhorias</li>
                                <li>Aplicativos</li>
                            </ul>
                            <a class="btn-1" href="#">Saiba Mais</a>
                        </div><!--half-1_wraper-->
                    </div><!--half-1-->

                    <div class="half-2">
                        <h2>Depoimentos</h2>
                        <div class="depoimentos-single">
                            <p>"Ótimo atendimento, o site ficou pronto rapidamente e o suporte foi 100%"</p>
                            <div class="navigation">
                                <div class="arrows">
                                    <img src="IMG/play (1).png" alt="">
                                    <img src="IMG/play.png" alt="">
                                </div><!--arrows-->
                                <div class="nome-depoimento">
                                    Carlos Augusto
                                </div><!--nome-depoimento-->
                            </div><!--navigation-->
                        </div><!--depoimentos-single-->
                        <div class="clear"></div>
                    </div><!--half-2-->

            </div><!--container-->
        </section><!--sercicos-descricao-->

        <?php
            include 'contato.php';
        ?>

    </body>

</html>


<?php
include 'footer.php';
?>
