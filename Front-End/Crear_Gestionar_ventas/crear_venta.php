<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Front-End/Pagina_Principal/CSS/navbar.css">
    <script defer src="../../Front-End/Pagina_Principal/JS/navbar.js"></script>
    <?php
    include("../../Boostrap_Thinks/boostrap.php");
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
    var cookie_lol = getCookie("correccion_lol");
    var cookie_ow = getCookie("correccion_overwatch");
    var cookie_val = getCookie("correccion_valorant");

    function Ocultar_Tarjeta_1() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("lol_formulario").style.display = "";

    }

    function Ocultar_Tarjeta_2() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("valorant_formulario").style.display = "";
    }

    function Ocultar_Tarjeta_3() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("overwatch_formulario").style.display = "";
    }

    function Mostrar_Tarjeta_1() {
        document.getElementById("lol_formulario").style.display = "none";
        document.getElementById("menu").style.display = "";


    }

    function Mostrar_Tarjeta_2() {
        document.getElementById("valorant_formulario").style.display = "none";
        document.getElementById("menu").style.display = "";

    }

    function Mostrar_Tarjeta_3() {
        document.getElementById("overwatch_formulario").style.display = "none";
        document.getElementById("menu").style.display = "";

    }
    if ((cookie_lol != null) && (cookie_lol!="Datos+validados") && (cookie_lol!="Datos%20validados")) {
        setTimeout(function() {
            Ocultar_Tarjeta_1();
        }, 1)
    }
    if ((cookie_val != null) && (cookie_val!="Datos+validados") && (cookie_val!="Datos%20validados")) {
        setTimeout(function() {
            Ocultar_Tarjeta_2();
        }, 1)
    }
    if ((cookie_ow != null) && (cookie_ow!="Datos+validados") && (cookie_ow!="Datos%20validados")) {
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
                <a href="../Pagina_Principal/index.php">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Inicio de la Web</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="">
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
                <a href="../Crear_Gestionar_ventas/crear_venta.php">
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
                            window.location.href = "../Pagina_Principal/index.php";
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
            <span class="text">Crear Venta</span>
        </div>
        <div style="margin-top: 1%;margin-bottom:1%;" id="menu">
            <div style="margin-right: 0;" class="row justify-content-center">
                <div class="col-sm-3">
                    <a onclick="Ocultar_Tarjeta_1()" href="#">
                        <div class="card bg-dark text-white" style="max-width: 540px;">
                            <img style="height:564px;" src="../Crear_Gestionar_ventas/Imagenes/EGS_LeagueofLegends_RiotGames_S2_1200x1600-7fd64f0f7b674900bdd172967865d545.jpg" class="card-img" alt="...">
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
                            <img style="height:564px;" src="../Crear_Gestionar_ventas/Imagenes/open-graph-2e582ae9fae8b0b396ca46ff21fd47a8.jpg" class="card-img" alt="...">
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
                            <img style="height:564px;" src="../Crear_Gestionar_ventas/Imagenes/X1Jk2NuMWbQeBZag6_jsUOtTaN0NnMjcoBEQ45tM9iY_350x200_3x-0.jpeg" class="card-img" alt="...">
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
        <div style="display: none;" id="lol_formulario">
            <div class="row g-0">
                <div class="col-md-4">
                    <a onclick="Mostrar_Tarjeta_1()" href="#"><img src="./Imagenes/EGS_LeagueofLegends_RiotGames_S2_1200x1600-7fd64f0f7b674900bdd172967865d545.jpg" class="img-fluid rounded-start" alt="..."></a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="./db_lol.php" method="post">
                            <h5 class="card-title">League of Legends</h5>
                            <ul class="list-group list-group-flush">
                                <label for="exampleInputEmail1" class="form-label">Nombre de la cuenta</label>
                                <input type="name" class="form-control" id="Nombre_cuenta" name="Nombre_cuenta_lol">
                                <div id="emailHelp" class="form-text">Tiene que ser el nombre de la cuenta del invocador</div>
                                <label for="exampleInputEmail1" class="form-label">Region</label>
                                <select name="region_lol" class="form-select" aria-label="Default select example">
                                    <option value="EU Oeste">EU Oeste</option>
                                    <option value="EU nordica y Este">EU nordica y Este</option>
                                    <option value="Japón">Japón</option>
                                    <option value="Latino América Norte">Latino América Norte</option>
                                    <option value="Latino América Sur">Latino América Sur</option>
                                    <option value="NorteAmérica">NorteAmérica</option>
                                    <option value="Oceanía">Oceanía</option>
                                    <option value="Rusia">Rusia</option>
                                    <option value="Turquía">Turquía</option>
                                </select>
                            </ul>
                            <label for="exampleInputEmail1" class="form-label">Rango en el juego actual</label>
                            <select name="rango_lol" class="form-select" aria-label="Default select example">
                                <option value="Hierro">Hierro</option>
                                <option value="Bronce">Bronce</option>
                                <option value="Plata">Plata</option>
                                <option value="Oro">Oro</option>
                                <option value="Platino">Platino</option>
                                <option value="Diamante">Diamante</option>
                                <option value="Master">Master</option>
                                <option value="Grand Master">Grand Master</option>
                                <option value="Challenger">Challenger</option>
                            </select>
                            <label for="exampleInputEmail1" class="form-label">Precio de la venta</label>
                            <input type="number" class="form-control" id="precio" name="precio_lol">
                            <br>
                            <button style="width: 150px;" class="btn btn-secondary" type="submit">Button</button>
                            <div id="emailHelp" class="form-text mx-auto">
                                <?= isset($_COOKIE["correccion_lol"]) ? $_COOKIE["correccion_lol"] : ""; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;" id="valorant_formulario">
            <div class="row g-0">
                <div class="col-md-4">
                    <a onclick="Mostrar_Tarjeta_2()" href="#"><img src="./Imagenes/open-graph-2e582ae9fae8b0b396ca46ff21fd47a8.jpg" class="img-fluid rounded-start" alt="..."></a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="./db_valorant.php" method="post">
                            <h5 class="card-title">Valorant</h5>
                            <label for="exampleInputEmail1" class="form-label">Nombre de la cuenta</label>
                            <input type="name" class="form-control" id="nombre_cuenta" name="nombre_cuenta_valorant">
                            <div id="emailHelp" class="form-text">Tiene que ser el nombre de la cuenta del invocador</div>
                            <label for="exampleInputEmail1" class="form-label">Region</label>
                            <select name="region_valorant" class="form-select" aria-label="Default select example">
                                <option value="EUW">EU Oeste</option>
                                <option value="EUNE">EU nordica y Este</option>
                                <option value="JPN">Japón</option>
                                <option value="LATAM-N">Latino América Norte</option>
                                <option value="LATAM-S">Latino América Sur</option>
                                <option value="NA">NorteAmérica</option>
                                <option value="OCN">Oceanía</option>
                                <option value="RUS">Rusia</option>
                                <option value="TRK">Turquía</option>
                            </select>
                            <label for="exampleInputEmail1" class="form-label">Rango en el juego actual</label>
                            <select name="rango_valorant" class="form-select" aria-label="Default select example">
                                <option value="Hierro">Hierro</option>
                                <option value="Plata">Plata</option>
                                <option value="Oro">Oro</option>
                                <option value="Platino">Platino</option>
                                <option value="Diamante">Diamante</option>
                                <option value="Inmortal">Inmortal</option>
                                <option value="Radiante">Radiante</option>
                            </select>
                            <label for="exampleInputEmail1" class="form-label">Precio de la venta</label>
                            <input type="number" class="form-control" id="precio" name="precio_valorant">
                            <br>
                            <button style="width: 150px;" class="btn btn-secondary" type="submit" name="submit" value="submitted">Button</button>
                            <div id="emailHelp" class="form-text mx-auto">
                                <?= isset($_COOKIE["correccion_valorant"]) ? $_COOKIE["correccion_valorant"] : ""; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;" id="overwatch_formulario">
            <div class="row g-0">
                <div class="col-md-4">
                    <a onclick="Mostrar_Tarjeta_3()" href="#"><img src="./Imagenes/X1Jk2NuMWbQeBZag6_jsUOtTaN0NnMjcoBEQ45tM9iY_350x200_3x-0.jpeg" class="img-fluid rounded-start" alt="..."></a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="./db_overwatch.php" method="post">
                            <h5 class="card-title">Formulario Overwatch</h5>
                            <label for="exampleInputEmail1" class="form-label">Nombre de la cuenta</label>
                            <input type="name" class="form-control" id="Nombre_cuenta" name="Nombre_cuenta_overwatch">
                            <div id="emailHelp" class="form-text">Tiene que ser el nombre de la cuenta del invocador</div>
                            <label for="exampleInputEmail1" class="form-label">Region</label>
                            <select name="region_overwatch" class="form-select" aria-label="Default select example">
                                <option value="EUW">EU Oeste</option>
                                <option value="EUNE">EU nordica y Este</option>
                                <option value="JPN">Japón</option>
                                <option value="LATAM-N">Latino América Norte</option>
                                <option value="LATAM-S">Latino América Sur</option>
                                <option value="NA">NorteAmérica</option>
                                <option value="OCN">Oceanía</option>
                                <option value="RUS">Rusia</option>
                                <option value="TRK">Turquía</option>
                            </select>
                            <label for="exampleInputEmail1" class="form-label">Rango en el juego actual</label>
                            <select name="rango_overwatch" class="form-select" aria-label="Default select example">
                                <option value="Hierro">Hierro</option>
                                <option value="Plata">Plata</option>
                                <option value="Oro">Oro</option>
                                <option value="Platino">Platino</option>
                                <option value="Diamante">Diamante</option>
                                <option value="Master">Master</option>
                                <option value="Gran Master">Gran Master</option>
                                <option value="Top 500">Top 500</option>
                            </select>
                            <label for="exampleInputEmail1" class="form-label">Precio de la venta</label>
                            <input type="number" class="form-control" id="precio" name="precio_overwatch">
                            <br>
                            <button style="width: 150px;" class="btn btn-secondary " type="submit">Button</button>
                            <div id="emailHelp" class="form-text mx-auto">
                                <?= isset($_COOKIE["correccion_overwatch"]) ? $_COOKIE["correccion_overwatch"] : ""; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div>
            <?PHP
            include("../Componentes/Footer/footer.php");
            ?>
        </div>
    </section>
</body>

</html>