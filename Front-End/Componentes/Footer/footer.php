<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<?php
        include("../../../Boostrap_Thinks/boostrap.php");
        ?>-->
</head>
<style>
    #footer {
        background: #404040;
        padding: 0 0 30px 0;
        color: #fff;
        font-size: 14px
    }

    #footer .footer-newsletter {
        padding: 50px 0;
        background: #404040
    }

    #footer .footer-newsletter h4 {
        font-size: 24px;
        margin: 0 0 20px 0;
        padding: 0;
        line-height: 1;
        font-weight: 600
    }

    #footer .footer-newsletter form {
        margin-top: 30px;
        background: #fff;
        padding: 6px 10px;
        position: relative;
        border-radius: 50px
    }

    #footer .footer-newsletter form input[type="email"] {
        border: 0;
        padding: 8px;
        width: calc(100% - 140px)
    }

    #footer .footer-newsletter form input[type="submit"] {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 0 30px;
        margin: 3px;
        background: #e96b56;
        color: #fff;
        transition: 0.3s;
        border-radius: 50px
    }

    #footer .footer-newsletter form input[type="submit"]:hover {
        background: #e6573f
    }

    #footer .footer-top {
        background: #3b3b3b;
        border-top: 1px solid #474747;
        border-bottom: 1px solid #474747;
        padding: 60px 0 30px 0
    }

    #footer .footer-top .footer-info {
        margin-bottom: 30px
    }

    #footer .footer-top .footer-info h3 {
        font-size: 18px;
        margin: 0 0 20px 0;
        padding: 2px 0 2px 0;
        line-height: 1;
        font-weight: 700
    }

    #footer .footer-top .footer-info p {
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 0;
        font-family: "Raleway", sans-serif;
        color: #fff
    }

    #footer .footer-top .social-links a {
        font-size: 18px;
        display: inline-block;
        background: #545454;
        color: #fff;
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 50%;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s
    }

    #footer .footer-top .social-links a:hover {
        background: #e96b56;
        color: #fff;
        text-decoration: none
    }

    #footer .footer-top h4 {
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 12px
    }

    #footer .footer-top .footer-links {
        margin-bottom: 30px
    }

    #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0
    }

    #footer .footer-top .footer-links ul i {
        padding-right: 2px;
        color: #ec7f6d;
        font-size: 18px;
        line-height: 1
    }

    #footer .footer-top .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center
    }

    #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0
    }

    #footer .footer-top .footer-links ul a {
        color: #fff;
        transition: 0.3s;
        display: inline-block;
        line-height: 1
    }

    #footer .footer-top .footer-links ul a:hover {
        color: #e96b56
    }

    #footer .footer-top .footer-contact {
        margin-bottom: 30px
    }

    #footer .footer-top .footer-contact p {
        line-height: 26px
    }

    #footer .copyright {
        text-align: center;
        padding-top: 30px
    }

    #footer .credits {
        padding-top: 10px;
        text-align: center;
        font-size: 13px;
        color: #fff
    }
</style>

<body>
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Level_Suscripción</h4>
                        <p>Suscribete para estar siempre al dia de todas nuestras novedades y ofertas.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post"> <input type="email" name="email"><input type="submit" value="Subscrir"> </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links de Utilidad</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos y servicios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de Privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestros Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">League of Legends</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Valorant</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Overwatch</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Crear ventas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gestionar Ventas</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contacta con Nosotros</h4>
                        <p> A108 Adam Street <br> New York, NY 535022<br> United States <br><br> <strong>Teléfono:</strong> +1 5589 55488 55<br> <strong>Email:</strong> info@example.com<br> </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Redes Sociales</h3>
                        <p>Cualquier propuesta que tengais, duda , sugerencia de cualquier cosa no olvideis que podeis contanctar con nosotros en las redes sociales.</p>
                        <div class="social-links mt-3"> <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright"> © Copyright <strong><span>DevVE</span></strong>. All Rights Reserved </div>
            <div class="credits"> Diseñado por<a href="#">LevelUp Corporation</a> </div>
        </div>
    </footer>
</body>

</html>