<?php
include 'menu.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>FVH Vendas - Venda</title>
        <style>
            nav.menu-desk ul li:nth-of-type(2) a{
                color: white;
            }

            nav.menu-mobile ul li:nth-of-type(2) a{
                color: white;
            }

            nav.menu-rodape ul li:nth-of-type(2) a{
                color: #997AFF;
            }
        </style>
    </head>

    <body>
        <section class="venda">
            <div class="line-titulo">
                <div class="ln1"></div><!--ln1-->
                <h2>Venda</h2>
            </div><!--line-titulo-->

            <div class="container">
                <div class="content-venda">
                    <div class="sidebar">
                        <div class="search-1">
                            <h2>Filte por Preço</h2>
                            <div class="container-barra">
                                <div class="barra-preco">
                                    <div class="barra-preco-fill">

                                    </div><!--barra-preco-fill-->
                                    
                                    <div class="pointer-barra">

                                    </div><!--pointer-barra-->
                                </div><!--barra-preco-->

                                <div class="valor-pesquisa">
                                    <p>R$ 0,00</p>
                                    <p>R$ 50.000,00</p>
                                    <div class="clear"></div>
                                </div><!--valor-pesquisa-->
                            </div><!--container-barra-->
                        </div><!--search-1-->

                        <div class="search-02">
                        <h2>Filtre por tipo</h2>
                        <form>
                            <div class="form-venda-wraper">
                                <input type="checkbox" id="item1" />
                                <label for="item1">
                                    <div class="circle"></div>
                                </label><!--item-->
                                <span>Todos os Tipos</span>
                            </div><!--form-venda-wraper-->


                            <div class="form-venda-wraper">
                                <input type="checkbox" id="item2" />
                                <label for="item2">
                                    <div class="circle"></div>
                                </label>
                                <span>Site Simples</span>
                            </div><!--form-venda-wraper-->


                            <div class="form-venda-wraper">
                                <input type="checkbox" id="item3" />
                                <label for="item3">
                                    <div class="circle"></div>
                                </label>
                                <span>Landing Page</span>
                            </div><!--form-venda-wraper-->

                            <div class="form-venda-wraper">
                                <input type="checkbox" id="item4" />
                                <label for="item4">
                                    <div class="circle"></div>
                                </label>
                                <span>Site Completo</span>
                            </div><!--form-venda-wraper-->
                        </form>
                        </div><!--search-02-->
                    </div><!--sidebar-->
                </div><!--content-venda-->
            </div><!--container-->

            <div class="vitrine-venda">  
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

                <div class="vitrine-destaque">
                    <div class="site-img">
                        <img src="IMG/site-venda.jpg" alt="">
                    </div><!--site-img-->
                    <div class="info-site">
                        <h2>Site Venda Básico - Layout Básico</h2>
                        <p>Site de Vendas para pequenas e média empresas.</p>
                        <a href="#">Mais Detalhes</a>
                    </div>
                </div><!--vitrine-destaque-->
            </div><!--vitrine-venda-->
            <div class="clear"></div>

        </section><!--venda-->
    </body>

</html>

<?php
include 'footer.php';
?>
