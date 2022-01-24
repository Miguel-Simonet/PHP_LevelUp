<?php
$delete_id=$_POST['delete'];
echo $delete_id;
function mysql_levelUp(){
    return new mysqli("localhost","id18339215_basededatoslevelup","go!AzAFLw8r8!A~E","id18339215_levelup");
}
    $mysql= mysql_levelUp();
    $mysql->query("delete from carrusel where id=$delete_id;");
    header('Location: index.php');


