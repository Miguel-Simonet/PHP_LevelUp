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
                <a href="../menu.php">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Inicio de la Web</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="../Carrusel/tabla_carrusel.php">
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
                    <a href="../League_of_Legends/tabla_lol.php">
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
                    <a href="../Valorant/tabla_valorant.php">
                        <i class='bx bx-game'></i>
                        <span class="link_name">Valorant</span>
                    </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Valorant</a></li>
                </ul>
            </li>
            <li>
                <a href="../Overwatch/tabla_overwatch.php">
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
                            window.location.href = "../../index.php";
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
        
        <?php
        $conn = new mysqli("localhost", "root", "", "levelup");
        $query_select = "SELECT * FROM valorant";
        $select = mysqli_query($conn, $query_select);
        //
        $chequeo = mysqli_num_rows($select);
        echo "<h1 style='margin-top:1%'>Datos de cuentas Valorant</h1>";
        echo "<div>";
        if ($chequeo > 0) {
            echo 
                "<table class='table'>
                    <tr>
                        <th scope='col'>nombre</th>
                        <th scope='col'>region</th>
                        <th scope='col'>rango</th>
                        <th scope='col'>precio</th>
                        <th scope='col'>usuario propietario</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($select)) {
                //for loop better than this line
                echo "<tr>
                    <td>" . $row['nombre'] . "</td>
                    <td>" . $row['region'] . "</td>
                    <td>" . $row['rango'] . "</td>
                    <td>" . $row['precio'] . "</td>
                    <td>" . $row['usuario_propietario'] . "</td>
                    <td>
                        <form method='post' action='delete_valorant.php'>
                            <input id='delete' type='hidden' class='btn btn-danger' name='delete' value=".$row['nombre']."></input>
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </form>
                    </td>
                </tr>
                ";
            }
            echo "</table></div>";
        } else {
            echo "No results<br>";
        }
        mysqli_close($conn);
        ?>
    </section>

</body>

</html>