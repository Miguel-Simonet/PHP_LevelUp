<?php
function mysql_levelUp(){
    return new mysqli("localhost","root","","levelup");
}
function insert_img($titulo,$descripcion,$image){
    $mysql= mysql_levelUp();
    $mysql->query("insert into carrusel (titulo,descripcion,image,created_at) value (\"$titulo\",\"$descripcion\",\"$image\",NOW())");
}
$titulo_2=trim(strip_tags($_POST["titulo"]));
$descripcion_2=trim(strip_tags($_POST["descripcion"])); 
$image_2=$_POST["imagen"];
if ($titulo_2!="" && $descripcion_2!="" && $image_2!=""){
    insert_img($titulo_2,$descripcion_2,$image_2);
    setcookie("correccion", "Datos validados", time()+10);
    header('Location: index.php');
}else{
    setcookie("correccion", "Algun campo vacio", time()+10);
    header('Location: index.php');
}
?>