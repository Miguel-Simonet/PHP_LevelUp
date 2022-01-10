<?php
function mysql_levelUp(){
    return new mysqli("localhost","root","","levelup");
}
function insert_img($titulo,$descripcion,$image){
    $mysql= mysql_levelUp();
    $mysql->query("insert into carrusel (titulo,descripcion,image,created_at) value (\"$titulo\",\"$descripcion\",\"$image\",NOW())")
}
?>