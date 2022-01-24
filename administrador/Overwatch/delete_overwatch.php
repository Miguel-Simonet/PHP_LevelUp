<?php
if(isset($_POST['delete'])){
$nombre = $_POST['delete'];
$query_delete = "DELETE FROM overwatch WHERE nombre='$nombre'";
$conn = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");

mysqli_query($conn, $query_delete);
header('Location: tabla_overwatch.php');
}
?>