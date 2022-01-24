<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Front-End/Pagina_Principal/CSS/navbar.css">
    <script defer src="../../../Front-End/Pagina_Principal/JS/navbar.js"></script>
    <link rel="stylesheet" href="../../../CSS_Globales/CSS_Footer.css">
    <?php
    include("../../../Boostrap_Thinks/boostrap.php");
    ?>
</head>
<script>
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    var cookie_lol = getCookie("delete_lol");
    var cookie_val = getCookie("delete_val");
    var cookie_ow = getCookie("delete_ow");

    function Ocultar_Tarjeta_1() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("lol_tabla").style.display = "";
        document.getElementById("lol_tabla_2").style.display = "";

    }

    function Ocultar_Tarjeta_2() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("valorant_tabla").style.display = "";
        document.getElementById("valorant_tabla_2").style.display = "";
    }

    function Ocultar_Tarjeta_3() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("overwatch_tabla").style.display = "";
        document.getElementById("overwatch_tabla_2").style.display = "";
    }

    function Mostrar_Tarjeta_1() {
        document.getElementById("lol_tabla").style.display = "none";
        document.getElementById("lol_tabla_2").style.display = "none";
        document.getElementById("menu").style.display = "";
    }

    function Mostrar_Tarjeta_2() {
        document.getElementById("valorant_tabla").style.display = "none";
        document.getElementById("valorant_tabla_2").style.display = "none";
        document.getElementById("menu").style.display = "";
    }

    function Mostrar_Tarjeta_3() {
        document.getElementById("overwatch_tabla").style.display = "none";
        document.getElementById("overwatch_tabla_2").style.display = "none";
        document.getElementById("menu").style.display = "";
    }
    if ((cookie_lol != null) && (cookie_lol == "Ha_sido_deleteado")) {
        setTimeout(function() {
            Ocultar_Tarjeta_1();
        }, 1)
    }
    if ((cookie_val != null) && (cookie_val == "Ha_sido_deleteado")) {
        setTimeout(function() {
            Ocultar_Tarjeta_2();
        }, 1)
    }
    if ((cookie_ow != null) && (cookie_ow == "Ha_sido_deleteado")) {
        setTimeout(function() {
            Ocultar_Tarjeta_3();
        }, 1)
    }
</script>

<body style="background-color: #E4E9F7;">
    <!--Navbar Inicio-->
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">LevelUp</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../../Pagina_Principal/index.php">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../../Pagina_Principal/index.php">Inicio de la Web</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="../../Sub_Paginas/lol/lol.php">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">LoL</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="../../Sub_Paginas/lol/lol.php">League of Legends</a></li>
                    <li><a href="#">Cuentas</a></li>
                    <li><a href="#">Coaching</a></li>
                    <li><a href="#">Busteos</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="../../Sub_Paginas/val/valorant.php">
                        <i class='bx bx-game'></i>
                        <span class="link_name">Valorant</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="../../Sub_Paginas/val/valorant.php">Valorant</a></li>
                    <li><a href="#">Cuentas</a></li>
                    <li><a href="#">Coaching</a></li>
                    <li><a href="#">Busteos</a></li>
                </ul>
            </li>
            <li>
                <a href="../../Sub_Paginas/ow/overwatch.php">
                    <i class='bx bx-loader-circle'></i>
                    <span class="link_name">Overwatch</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../../Sub_Paginas/ow/overwatch.php">Overwatch</a></li>
                </ul>
            </li>
            <li>
                <a href="../crear_venta/crear_venta.php">
                    <i class='bx bx-edit-alt'></i>
                    <span class="link_name">Crear Ventas</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../crear_venta/crear_venta.php">Crear Ventas</a></li>
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
                        <div class="profile_name">Usuario</div>
                        <div class="job">
                            <?=
                            isset($_COOKIE["sesion_iniciada_3"]) ? $_COOKIE["sesion_iniciada_3"] : "<a href='../Sesiones/Registro_Inicio_Sesion.php'>Registrate</a>";
                            ?>
                        </div>
                    </div>
                    <script>
                        function delCoockie() {
                            console.log("Cosas");
                            document.cookie = "sesion_iniciada_3=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                            window.location.href = "../../Pagina_Principal/index.php";
                        }
                    </script>
                    <i onclick="delCoockie()" class='bx bx-log-out'></i>

                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Gestionar Ventas</span>

        </div>
        <a style="color:black;" href="#"><i onclick="Mostrar_Tarjeta_1()" id="lol_tabla_2" style="font-size: 250%;float:right;position:sticky;margin-top:-2%;margin-right:1%;display:none;" class='bx bx-x'></i></a>
        <a style="color:black;" href="#"><i onclick="Mostrar_Tarjeta_2()" id="valorant_tabla_2" style="font-size: 250%;float:right;position:sticky;margin-top:-2%;margin-right:1%;display:none;" class='bx bx-x'></i></a>
        <a style="color:black;" href="#"><i onclick="Mostrar_Tarjeta_3()" id="overwatch_tabla_2" style="font-size: 250%;float:right;position:sticky;margin-top:-2%;margin-right:1%;display:none;" class='bx bx-x'></i></a>

        <!--AQUI VA EL CONTENIDO DE LA PAGINA-->
        <div style="margin-top: 1%;margin-bottom:1%;" id="menu">
            <div style="margin-right: 0;" class="row justify-content-center">
                <div class="col-sm-3">
                    <a onclick="Ocultar_Tarjeta_1()" href="#">
                        <div class="card bg-dark text-white" style="max-width: 540px;">
                            <img style="height:564px;" src="../Imagenes/EGS_LeagueofLegends_RiotGames_S2_1200x1600-7fd64f0f7b674900bdd172967865d545.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a onclick="Ocultar_Tarjeta_2()" href="#">
                        <div class="card bg-dark text-white" style="max-width: 540px;">
                            <img style="height:564px;" src="../Imagenes/open-graph-2e582ae9fae8b0b396ca46ff21fd47a8.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a onclick="Ocultar_Tarjeta_3()" href="#">
                        <div class="card bg-dark text-white" style="max-width: 540px;">
                            <img style="height:564px;" src="../Imagenes/X1Jk2NuMWbQeBZag6_jsUOtTaN0NnMjcoBEQ45tM9iY_350x200_3x-0.jpeg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div style="display: none;" id="lol_tabla" class="row justify-content-center">
            <?php
            //FETCH DE LA TABLA
            $usuario_propietario = $_COOKIE['sesion_iniciada_3'];
            $conn = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
            $query_select = "SELECT * FROM lol WHERE usuario_propietario='$usuario_propietario'";
            $table = mysqli_query($conn, $query_select);
            while ($row = mysqli_fetch_assoc($table)) {
                $nombre = $row["nombre_de_cuenta"];
                $rango = $row["rango"];
                $region = $row["region"];
                $precio = $row["precio"];
                //MOSTRAR TABLA
                echo "
            <div class='card' style='width: 18rem;background-color: #11101d;margin-left:1%;margin-top:1%;'>
                <img class='card-img-top' src='./Imagenes_lol/$rango.png' alt='Card image cap'>
                <div  class='card-body'>
                    <h5 style='font-weight:bold' class='card-title text-white'>" . $nombre . "</h5>
                    <ul class='list-group list-group-flush'>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Rango: " . $rango . "</li>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Región: " . $region . "</li>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Precio: " . $precio . "</li>
                    </ul>
                    <div class='d-grid gap-2 col-6 mx-auto'>
                        <form action='delete_lol.php' method='post'>
                            <input id='delete' type='hidden' class='btn btn-danger' name='delete' value=" . $nombre . "></input>
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            };
            ?>
        </div>
        <div style="display: none;" id="valorant_tabla" class="row justify-content-center">
            <?php
            //FETCH DE LA TABLA
            $usuario_propietario = $_COOKIE['sesion_iniciada_3'];
            $conn = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
            $query_select = "SELECT * FROM valorant WHERE usuario_propietario='$usuario_propietario'";
            $table = mysqli_query($conn, $query_select);
            while ($row = mysqli_fetch_assoc($table)) {
                $nombre = $row["nombre"];
                $rango = $row["rango"];
                $region = $row["region"];
                $precio = $row["precio"];
                //MOSTRAR TABLA
                echo "
            <div class='card' style='width: 18rem;background-color: #11101d;margin-left:1%;margin-top:1%;'>
                <img class='card-img-top' src='./imagenes_valorant/" . $rango . "_valorant.png' alt='Card image cap'>
                <div  class='card-body'>
                    <h5 style='font-weight:bold' class='card-title text-white'>" . $nombre . "</h5>
                    <ul class='list-group list-group-flush'>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Rango: " . $rango . "</li>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Región: " . $region . "</li>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Precio: " . $precio . "</li>
                    </ul>
                    <div class='d-grid gap-2 col-6 mx-auto'>
                        <form action='delete_valorant.php' method='post'>
                            <input id='delete' type='hidden' class='btn btn-danger' name='delete' value=" . $nombre . "></input>
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            };
            ?>
        </div>
        <div style="display: none;" id="overwatch_tabla" class="row justify-content-center">
            <?php
            //FETCH DE LA TABLA
            $usuario_propietario = $_COOKIE['sesion_iniciada_3'];
            $conn = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
            $query_select = "SELECT * FROM overwatch WHERE usuario_propietario='$usuario_propietario'";
            $table = mysqli_query($conn, $query_select);
            while ($row = mysqli_fetch_assoc($table)) {
                $nombre = $row["nombre"];
                $rango = $row["rango"];
                $region = $row["region"];
                $precio = $row["precio"];
                //MOSTRAR TABLA
                echo "
            <div class='card' style='width: 18rem;background-color: #11101d;margin-left:1%;margin-top:1%;'>
                <img class='card-img-top' src='./imagenes_over/" . $rango . "_overwatch.png' alt='Card image cap'>
                <div  class='card-body'>
                    <h5 style='font-weight:bold' class='card-title text-white'>" . $nombre . "</h5>
                    <ul class='list-group list-group-flush'>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Rango: " . $rango . "</li>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Región: " . $region . "</li>
                        <li style='font-weight:bold;background-color: #11101d;' class='list-group-item text-white'>Precio: " . $precio . "</li>
                    </ul>
                    <div class='d-grid gap-2 col-6 mx-auto'>
                        <form action='delete_overwatch.php' method='post'>
                            <input id='delete' type='hidden' class='btn btn-danger' name='delete' value=" . $nombre . "></input>
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
            };
            ?>
        </div>
        <div style="margin-top: 2%;">
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
                                    <li><i class="bx bx-chevron-right"></i> <a href="../../Pagina_Principal/index.php">Inicio</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos y servicios</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de Privacidad</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Nuestros Servicios</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../../Sub_Paginas/lol/lol.php">League of Legends</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../../Sub_Paginas/val/valorant.php">Valorant</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../../Sub_Paginas/ow/overwatch.php">Overwatch</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../crear_venta/crear_venta.php">Crear ventas</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../gestionar_venta/gestionar_venta.php">Gestionar Ventas</a></li>
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
        </div>
    </section>
</body>

</html>