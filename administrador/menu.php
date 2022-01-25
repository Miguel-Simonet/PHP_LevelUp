<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Front-End/Pagina_Principal/CSS/navbar.css">
    <script defer src="../Front-End/Pagina_Principal/JS/navbar.js"></script>
    <?php
    include("../Boostrap_Thinks/boostrap.php");
    ?>
</head>
<style>
    body {
        background-color: #E4E9F7;
    }
</style>

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
                    <a href="./Carrusel/tabla_carrusel.php">
                        <i class='bx bx-camera'></i>
                        <span class="link_name">Carrusel</span>
                    </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Carrusel</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="./League_of_Legends/tabla_lol.php">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">LoL</span>
                    </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Lol</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="./Valorant/tabla_valorant.php">
                        <i class='bx bx-game'></i>
                        <span class="link_name">Valorant</span>
                    </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Valorant</a></li>
                </ul>
            </li>
            <li>
                <a href="./Overwatch/tabla_overwatch.php">
                    <i class='bx bx-loader-circle'></i>
                    <span class="link_name">Overwatch</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Overwatch</a></li>
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
                            Administrador
                        </div>
                    </div>
                    <script>
                        function delCoockie() {
                            document.cookie = "usuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                            window.location.href = "../index.php";
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
            <span class="text">LevelUp Boosting</span>
        </div>
        <form action="Carrusel/carrusel_db.php" method="post">
            <div class="position-relative">
                <div class="card mx-auto mt-4 " style="max-width: 470px; align-items:center;">
                    <div class="card-body">
                        <h5 class="card-title">Formulario carrusel</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Titulo</label>
                            <input type="name" class="form-control" id="titulo" name="titulo">
                            <div id="emailHelp" class="form-text">Titulo solo con letras y menor a 15 caracteres.</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" id="descripcion" name="descripcion" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Descripción</label>
                                <div id="emailHelp" class="form-text">Descripción con una extension maxima a 30 caracteres.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Imagen</label>
                            <input class="form-control" type="file" id="imagen" name="imagen" multiple>

                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-secondary" type="submit">Button</button>
                            <div id="emailHelp" class="form-text mx-auto">
                                <?= isset($_COOKIE["correccion_carrusel"]) ? $_COOKIE["correccion_carrusel"] : ""; ?>
                            </div>
                        </div>


                    </div>
                </div>
        </form>

        <form action="League_of_Legends/cuentas_lol.php" method="post">
            <div class="position-relative">
                <div class="card mx-auto mt-4 " style="max-width: 470px; align-items:center;">
                    <div class="card-body">
                        <h5 class="card-title">Formulario League of Legends</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de la cuenta</label>
                            <input type="name" class="form-control" id="Nombre_cuenta" name="Nombre_cuenta_lol">
                            <div id="emailHelp" class="form-text">Tiene que ser el nombre de la cuenta del invocador</div>
                        </div>
                        <div class="mb-3">
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
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Rango en el juego actual</label>
                            <select name="rango_lol" class="form-select" aria-label="Default select example">
                                <option value="Hierro">Hierro</option>
                                <option value="Plata">Plata</option>
                                <option value="Oro">Oro</option>
                                <option value="Platino">Platino</option>
                                <option value="Diamante">Diamante</option>
                                <option value="Master">Master</option>
                                <option value="Gran Master">Gran Master</option>
                                <option value="Challenger">Challenger</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Precio de la venta</label>
                            <input type="number" class="form-control" id="precio" name="precio_lol">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-secondary" type="submit">Button</button>
                        <div id="emailHelp" class="form-text mx-auto">
                            <?= isset($_COOKIE["correccion_lol"]) ? $_COOKIE["correccion_lol"] : ""; ?>
                        </div>
                    </div>


                </div>
            </div>
        </form>

        <form action="Valorant/cuentas_valorant.php" method="post">
            <div class="position-relative">
                <div class="card mx-auto mt-4 " style="max-width: 470px; align-items:center;">
                    <div class="card-body">
                        <h5 class="card-title">Formulario Valorant</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de la cuenta</label>
                            <input type="name" class="form-control" id="nombre_cuenta" name="nombre_cuenta_valorant">
                            <div id="emailHelp" class="form-text">Tiene que ser el nombre de la cuenta del invocador</div>
                        </div>
                        <div class="mb-3">
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
                        </div>
                        <div class="mb-3">
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

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Precio de la venta</label>
                            <input type="number" class="form-control" id="precio" name="precio_valorant">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-secondary" type="submit" name="submit" value="submitted">Button</button>
                        <div id="emailHelp" class="form-text mx-auto">
                            <?= isset($_COOKIE["correccion_valorant"]) ? $_COOKIE["correccion_valorant"] : ""; ?>
                        </div>
                    </div>


                </div>
            </div>
        </form>
        <form action="Overwatch/cuentas_overwatch.php" method="post">
            <div class="position-relative">
                <div class="card mx-auto mt-4 " style="max-width: 470px; align-items:center;">
                    <div class="card-body">
                        <h5 class="card-title">Formulario Overwatch</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de la cuenta</label>
                            <input type="name" class="form-control" id="Nombre_cuenta" name="Nombre_cuenta_overwatch">
                            <div id="emailHelp" class="form-text">Tiene que ser el nombre de la cuenta del invocador</div>
                        </div>
                        <div class="mb-3">
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
                        </div>
                        <div class="mb-3">
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

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Precio de la venta</label>
                            <input type="number" class="form-control" id="precio" name="precio_overwatch">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-secondary" type="submit">Button</button>
                        <div id="emailHelp" class="form-text mx-auto">
                            <?= isset($_COOKIE["correccion_overwatch"]) ? $_COOKIE["correccion_overwatch"] : ""; ?>
                        </div>
                    </div>


                </div>
            </div>
        </form>

    </section>

</body>

</html>