<?php
function mysql_levelUp(){
    return new mysqli("localhost","root","","levelup");
}
function insert_carrusel($titulo,$descripcion,$image){
    $mysql= mysql_levelUp();
    $mysql->query("insert into carrusel (titulo,descripcion,image,created_at) value (\"$titulo\",\"$descripcion\",\"$image\",NOW())");
}

    $titulo_2=trim(strip_tags($_POST["titulo"]));
    $descripcion_2=trim(strip_tags($_POST["descripcion"])); 
    $image_2=$_POST["imagen"];
    if ($titulo_2!="" && $descripcion_2!="" && $image_2!=""){
        if (ctype_alpha($titulo_2) && strlen($titulo_2)<15) {
            if (strlen($descripcion_2)<31) {
                $titulo_2 = $titulo_2.";";
                $descripcion_2 = $descripcion_2.";";
                insert_carrusel($titulo_2,$descripcion_2,$image_2);
                setcookie("correccion_carrusel", "Datos validados", time()+10,"/");
                header('Location: ../menu.php');
            }else {
                setcookie("correccion_carrusel", "La longitud de descripcion tiene que ser menor a 30 caracteres", time()+10,"/");
                header('Location: ../menu.phpp');
            }
        }else {
            setcookie("correccion_carrusel","Solo se puede usar en el titulo letras y tiene que tener una longitud menor a 15 caracteres", time()+10,"/");
            header('Location: ../menu.php');
        }
    }else{
        setcookie("correccion_carrusel", "Algun campo vacio", time()+10,"/");
        header('Location: ../menu.php');
    }
    