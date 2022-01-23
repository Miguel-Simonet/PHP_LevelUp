<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/sesion.css ">
  <?php
  include("../../Boostrap_Thinks/boostrap.php");
  ?>
</head>
<style !important>
  /* Google Fonts Import Link */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 260px;
    background: #11101d;
    z-index: 100;
    transition: all 0.5s ease;
  }

  .sidebar.close {
    width: 78px;
  }

  .sidebar .logo-details {
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
  }

  .sidebar .logo-details i {
    font-size: 30px;
    color: #fff;
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
  }

  .sidebar .logo-details .logo_name {
    font-size: 22px;
    color: #fff;
    font-weight: 600;
    transition: 0.3s ease;
    transition-delay: 0.1s;
  }

  .sidebar.close .logo-details .logo_name {
    transition-delay: 0s;
    opacity: 0;
    pointer-events: none;
  }

  .sidebar .nav-links {
    height: 100%;
    padding: 30px 0 150px 0;
    overflow: auto;
  }

  .sidebar.close .nav-links {
    overflow: visible;
  }

  .sidebar .nav-links::-webkit-scrollbar {
    display: none;
  }

  .sidebar .nav-links li {
    position: relative;
    list-style: none;
    transition: all 0.4s ease;
  }

  .sidebar .nav-links li:hover {
    background: #1d1b31;
  }

  .sidebar .nav-links li .iocn-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .sidebar.close .nav-links li .iocn-link {
    display: block
  }

  .sidebar .nav-links li i {
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .sidebar .nav-links li.showMenu i.arrow {
    transform: rotate(-180deg);
  }

  .sidebar.close .nav-links i.arrow {
    display: none;
  }

  .sidebar .nav-links li a {
    display: flex;
    align-items: center;
    text-decoration: none;
  }

  .sidebar .nav-links li a .link_name {
    font-size: 18px;
    font-weight: 400;
    color: #fff;
    transition: all 0.4s ease;
  }

  .sidebar.close .nav-links li a .link_name {
    opacity: 0;
    pointer-events: none;
  }

  .sidebar .nav-links li .sub-menu {
    padding: 6px 6px 14px 80px;
    margin-top: -10px;
    background: #1d1b31;
    display: none;
  }

  .sidebar .nav-links li.showMenu .sub-menu {
    display: block;
  }

  .sidebar .nav-links li .sub-menu a {
    color: #fff;
    font-size: 15px;
    padding: 5px 0;
    white-space: nowrap;
    opacity: 0.6;
    transition: all 0.3s ease;
  }

  .sidebar .nav-links li .sub-menu a:hover {
    opacity: 1;
  }

  .sidebar.close .nav-links li .sub-menu {
    position: absolute;
    left: 100%;
    top: -10px;
    margin-top: 0;
    padding: 10px 20px;
    border-radius: 0 6px 6px 0;
    opacity: 0;
    display: block;
    pointer-events: none;
    transition: 0s;
  }

  .sidebar.close .nav-links li:hover .sub-menu {
    top: 0;
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
  }

  .sidebar .nav-links li .sub-menu .link_name {
    display: none;
  }

  .sidebar.close .nav-links li .sub-menu .link_name {
    font-size: 18px;
    opacity: 1;
    display: block;
  }

  .sidebar .nav-links li .sub-menu.blank {
    opacity: 1;
    pointer-events: auto;
    padding: 3px 20px 6px 16px;
    opacity: 0;
    pointer-events: none;
  }

  .sidebar .nav-links li:hover .sub-menu.blank {
    top: 50%;
    transform: translateY(-50%);
  }

  .sidebar .profile-details {
    position: fixed;
    bottom: 0;
    width: 260px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #1d1b31;
    padding: 12px 0;
    transition: all 0.5s ease;
  }

  .sidebar.close .profile-details {
    background: none;
  }

  .sidebar.close .profile-details {
    width: 78px;
  }

  .sidebar .profile-details .profile-content {
    display: flex;
    align-items: center;
  }

  .sidebar .profile-details img {
    height: 52px;
    width: 52px;
    object-fit: cover;
    border-radius: 16px;
    margin: 0 14px 0 12px;
    background: #1d1b31;
    transition: all 0.5s ease;
  }

  .sidebar.close .profile-details img {
    padding: 10px;
  }

  .sidebar .profile-details .profile_name,
  .sidebar .profile-details .job {
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    white-space: nowrap;
  }

  .sidebar.close .profile-details i,
  .sidebar.close .profile-details .profile_name,
  .sidebar.close .profile-details .job {
    display: none;
  }

  .sidebar .profile-details .job {
    font-size: 12px;
  }

  .home-section {
    position: relative;
    background: #E4E9F7;
    height: 100vh;
    left: 260px;
    width: calc(100% - 260px);
    transition: all 0.5s ease;
  }

  .sidebar.close~.home-section {
    left: 78px;
    width: calc(100% - 78px);
  }

  .home-section .home-content {
    height: 60px;
    display: flex;
    align-items: center;
  }

  .home-section .home-content .bx-menu,
  .home-section .home-content .text {
    color: #11101d;
    font-size: 35px;
  }

  .home-section .home-content .bx-menu {
    margin: 0 15px;
    cursor: pointer;
  }

  .home-section .home-content .text {
    font-size: 26px;
    font-weight: 600;
  }

  @media (max-width: 420px) {
    .sidebar.close .nav-links li .sub-menu {
      display: none;
    }
  }
</style>

<body>
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
      <!--
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
-->
      <li>
        <a href="#">
          <i class='bx bx-compass'></i>
          <span class="link_name">Explorador</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explorador</a></li>
        </ul>
      </li>
      <!--
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Ajustes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Ajustes</a></li>
        </ul>
      </li>
-->
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="https://th.bing.com/th/id/R.0b94498aa4863bed528f68b6192425e1?rik=YRNMkX4Zd%2bmzNw&pid=ImgRaw&r=0" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">Usuario</div>
            <div class="job">
              <?=
              isset($_COOKIE["sesion_iniciada_3"]) ? $_COOKIE["sesion_iniciada_3"] : "<a href='./Registro_Inicio_Sesion.php'>Registrate</a>";
              ?>
            </div>
          </div>
          <script>
            function delCoockie() {
              console.log("Cosas");
              document.cookie = "sesion_iniciada_3=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
              location.reload();
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
    <div class="container">
      <input type="checkbox" id="flip">
      <div class="cover">
        <div class="front">
          <img src="../Componentes/Carrusel/imagen/Lol.jpg" alt="">
          <div class="text">
            <span class="text-1">Cualquier amigo nuevo<br> es una nueva aventura</span>
            <span class="text-2">Vamos a conectarnos</span>
          </div>
        </div>
        <div class="back">
          <img class="backImg" src="../Componentes/Carrusel/imagen/Overwatch.jpg" alt="">
          <div class="text">
            <span class="text-1">Consigue miles de sueños <br> solo con un click</span>
            <span class="text-2">Empecemos</span>
          </div>
        </div>
      </div>
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Iniciar Sesión</div>
            <!--FORMULARIO DE INICIAR SESION-->
            <form action="iniciar_sesion.php" method="post">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input name="email" type="text" placeholder="Introduzca el email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input name="contraseña" type="password" placeholder="Introduzca la contraseña" required>
                </div>
                <div class="text"><a href="#">Olvidaste tu contraseña?</a></div>
                <div style="align-items: center;" id="emailHelp" class="form-text mx-auto">
                  <?=
                  isset($_COOKIE["sesion_iniciada"]) ? $_COOKIE["sesion_iniciada"] : "";
                  ?>
                </div>
                <div class="button input-box">
                  <input type="submit" value="Enviar">
                </div>
                <div class="text sign-up-text">No tienes una cuenta? <label for="flip">Registrate ahora</label></div>
              </div>
            </form>
          </div>
          <div class="signup-form">
            <div class="title">Registrarse</div>
            <!--FORMULARIO DE REGISTRO-->
            <form action="registro.php" method="POST">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Introduzca el nombre" name="nombre" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="text" placeholder="Introduzca tu email" name="email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Introduzca tu contraseña" name="contraseña" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Introduzca otra vez tu contraseña" name="contraseña2" required>
                </div>
                <div style="align-items: center;" id="emailHelp" class="form-text mx-auto">
                  <?=
                  isset($_COOKIE["problema"]) ? $_COOKIE["problema"] : "";
                  ?>
                </div>
                <div class="button input-box">
                  <input type="submit" value="Enviar">
                </div>
                <div class="text sign-up-text">Ya tienes una cuenta? <label for="flip">Inicia sesión ahora</label></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<script>
//
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
    return null;
  }
//
var Cookie = getCookie("problema");
  if (Cookie == "Usuario+ya+registrado."){
    document.getElementById("flip").checked = true;
  }
  if (Cookie == "Usuario%20ya%20registrado."){
    document.getElementById("flip").checked = true;
  }
</script>

<script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
      let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
      arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });
</script>

</html>