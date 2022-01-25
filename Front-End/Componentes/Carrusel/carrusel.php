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

<body>
  <!--Carrusel Start-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <?PHP
      //Declaracion de variables y queries------------------
      $con = mysqli_connect("localhost", "root", "", "levelup");
      $query = 'SELECT * from carrusel';
      $tabla = mysqli_query($con, $query);
      $imagen = "";
      $titulo = "";
      $desc = "";
      //Interceptar la imagen de mysql y meterla en una variable imagen------------------
      while ($fila = $tabla->fetch_assoc()) {
        $imagen .= $fila['image'];
        $titulo .= $fila['titulo'];
        $desc .= $fila['descripcion'];
      }
      //Arreglar y adaptar los datos para poder mostrarlos luego-------------------
      //IMAGEN---------------
      $imagen = explode(".jpg", $imagen);
      foreach ($imagen as $key => $value) {
        $imagen[$key] = $value . ".jpg";
      }
      array_pop($imagen);
      //TITULO---------------
      $titulo = explode(";", $titulo);
      //DESCRIPCION----------
      $desc = explode(";", $desc);
      //Mostrar los datos------------------------------
      //print_r($imagen); <-- DEPURACION DE CODIGO
      //echo $imagen[0];
      //print_r($titulo);
      echo "
        <div class='carousel-item active'> "/* EL ACTIVE ES NECESARIO*/ . "
          <img style='height:535px' src='./imagen/" . $imagen[0] . "' class='d-block w-100' alt='...'>
          <div class='carousel-caption d-none d-md-block'>
            <h5>" . $titulo[0] . "</h5>
            <p>" . $desc[0] . "</p>
          </div>
        </div>
      ";
      $a = 1;
      while ($a <= 2) {
        echo "
          <div class='carousel-item'>
            <img style='height:535px' src='./imagen/" . $imagen[$a] . "' class='d-block w-100' alt='...'>
            <div class='carousel-caption d-none d-md-block'>
              <h5>" . $titulo[$a] . "</h5>
              <p>" . $desc[$a] . "</p>
            </div>
          </div>
          ";
        $a += 1;
      }
      ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--Carrusel End-->
</body>

</html>