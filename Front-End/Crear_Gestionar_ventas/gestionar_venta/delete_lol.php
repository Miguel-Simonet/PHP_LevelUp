<?php
if(isset($_POST['delete'])){
$nombre = $_POST['delete'];
$query_delete = "DELETE FROM `lol` WHERE nombre_de_cuenta='$nombre'";
$conn = new mysqli("localhost", "root", "", "levelup");
echo $nombre;
setcookie("delete_lol","Ha_sido_deleteado", time() +10, "/");
mysqli_query($conn, $query_delete);
////header('Location: gestionar_venta.php');
}
?>