<?php
if(isset($_POST['delete'])){
$nombre = $_POST['delete'];
$query_delete = "DELETE FROM lol WHERE nombre='$nombre'";
$conn = new mysqli("localhost", "root", "", "levelup");

mysqli_query($conn, $query_delete);
header('Location: gestionar_venta.php');
}
?>