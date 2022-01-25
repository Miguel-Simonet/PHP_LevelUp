<?php
if(isset($_POST['delete'])){
$nombre = $_POST['delete'];
$query_delete = "DELETE FROM carrusel WHERE id='$nombre'";
$conn = new mysqli("localhost", "root", "", "levelup");

mysqli_query($conn, $query_delete);
header('Location: tabla_carrusel.php');
}
?>