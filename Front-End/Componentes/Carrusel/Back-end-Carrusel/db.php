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
                setcookie("correccion", "Datos validados", time()+10);
                header('Location: index.php');
            }else {
                setcookie("correccion", "La longitud de descripcion tiene que ser menor a 30 caracteres", time()+10);
                header('Location: index.php');
            }
        }else {
            setcookie("correccion","Solo se puede usar en el titulo letras y menos tiene que tener una longitud menor a 15 caracteres", time()+10);
            header('Location: index.php');
        }
    }else{
        setcookie("correccion", "Algun campo vacio", time()+10);
        header('Location: index.php');
    }
    
    $mysql= mysql_levelUp();
    $delete_id=$_POST['delete'];
    $mysql->query("delete from carrusel where id=$delete_id;");
    header('Location: index.php');