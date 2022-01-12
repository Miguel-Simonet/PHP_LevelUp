<?php
$delete_id=$_POST['delete'];
echo $delete_id;
function mysql_levelUp(){
    return new mysqli("localhost","root","","levelup");
}
    $mysql= mysql_levelUp();
    $mysql->query("delete * from carrusel where id='.$delete_id.'");
    
