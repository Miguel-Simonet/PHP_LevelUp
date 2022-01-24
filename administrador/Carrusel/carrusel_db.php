<?php
function mysql_levelUp(){
    return new mysqli("localhost","id18339215_basededatoslevelup","go!AzAFLw8r8!A~E","id18339215_levelup");
}
function insert_carrusel($titulo,$descripcion,$image){
    $mysql= mysql_levelUp();
    $mysql->query("insert into carrusel (titulo,descripcion,image,created_at) value (\"$titulo\",\"$descripcion\",\"$image\",NOW())");
}

    $titulo_2=trim(strip_tags($_POST["titulo"]));
    $descripcion_2=trim(strip_tags($_POST["descripcion"])); 
    $image_2=$_POST["imagen"];
    if ($titulo_2!="" && $descripcion_2!="" && $image_2!=""){
        if (strlen($titulo_2)<20) {
            if (strlen($descripcion_2)<50) {
                $titulo_2 = $titulo_2.";";
                $descripcion_2 = $descripcion_2.";";
                insert_carrusel($titulo_2,$descripcion_2,$image_2);
                setcookie("correccion_carrusel", "Datos validados", time()+10,"/");
                header('Location: ../menu.php');
            }else {
                setcookie("correccion_carrusel", "La longitud de descripcion tiene que ser menor a 50 caracteres", time()+10,"/");
                header('Location: ../menu.phpp');
            }
        }else {
            setcookie("correccion_carrusel","Solo se puede usar en el titulo letras y tiene que tener una longitud menor a 20 caracteres", time()+10,"/");
            header('Location: ../menu.php');
        }
    }else{
        setcookie("correccion_carrusel", "Algun campo vacio", time()+10,"/");
        header('Location: ../menu.php');
    }
    