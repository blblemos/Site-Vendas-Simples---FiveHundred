<?php
include 'menu.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Sobre</title>

        <style>
            nav.menu-desk ul li:nth-of-type(3) a{
                color: white;
            }
            nav.menu-mobile ul li:nth-of-type(3) a{
                color: white;
            }

            nav.menu-rodape ul li:nth-of-type(3) a{
                color: #997AFF;
            }
        </style>
    </head>

    <body>

            <section class="sobre">
                <div class="container">
                    <div class="sobre-img">
                        <img src="IMG/facebook_profile_image.png" alt="">
                    </div><!--sobre-img-->

                    <div class="sobre-txt">
                        <h2>Sobre a FiveHundred</h2>
                        <p>Site dedicado a apresentação de portifólio.  </p>
                    </div><!--sobre-txt-->
                </div><!--container-->
            </section><!--sobre-->


        <?php
            include 'contato.php';
        ?>
    </body>

</html>    



<?php
include 'footer.php';
?>