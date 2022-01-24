<?php
if(isset($_POST['delete'])){
$nombre = $_POST['delete'];
$query_delete = "DELETE FROM `overwatch` WHERE nombre='$nombre'";
$conn = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
echo $nombre;
setcookie("delete_ow","Ha_sido_deleteado", time() +10, "/");
mysqli_query($conn, $query_delete);
header('Location: gestionar_venta.php');
}
?>