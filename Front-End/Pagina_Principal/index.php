<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/navbar.css">
    <script defer src="./JS/navbar.js"></script>
    <?php
    include("../../Boostrap_Thinks/boostrap.php");
    ?>
</head>


<body>
    <!--Navbar Inicio-->
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">LevelUp</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Inicio de la Web</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">LoL</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">League of Legends</a></li>
                    <li><a href="#">Cuentas</a></li>
                    <li><a href="#">Coaching</a></li>
                    <li><a href="#">Busteos</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-game'></i>
                        <span class="link_name">Valorant</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Valorant</a></li>
                    <li><a href="#">Cuentas</a></li>
                    <li><a href="#">Coaching</a></li>
                    <li><a href="#">Busteos</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-loader-circle'></i>
                    <span class="link_name">Overwatch</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Overwatch</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-edit-alt'></i>
                    <span class="link_name">Crear Ventas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Crear Ventas</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-wrench'></i>
                    <span class="link_name">Gestionar Ventas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Gestionar Ventas</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Explorador</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explorador</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Ajustes</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Ajustes</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="https://th.bing.com/th/id/R.0b94498aa4863bed528f68b6192425e1?rik=YRNMkX4Zd%2bmzNw&pid=ImgRaw&r=0" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">
                        <?=
                            isset($_COOKIE["sesion_iniciada"]) ? $_COOKIE["sesion_iniciada"] : ""; 
                        ?>
                        </div>
                        <div class="job">Web Desginer</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">LevelUp Boosting</span>
        </div>
        <?PHP
        include("../Componentes/Carrusel/carrusel.php");
        ?>
        <div>
            <p>COSAS AQUI DE LA TIENDA</p>
        </div>
        <?PHP
        include("../Componentes/Footer/footer.php");
        ?>
    </section>

</body>

</html>