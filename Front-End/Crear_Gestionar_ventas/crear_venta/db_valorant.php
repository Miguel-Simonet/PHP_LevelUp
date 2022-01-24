<?php
$nombre_de_cuenta=trim(strip_tags($_POST["nombre_cuenta_valorant"]));
$region=trim(strip_tags($_POST["region_valorant"]));
$rango=trim(strip_tags($_POST["rango_valorant"]));
$precio=trim(strip_tags($_POST["precio_valorant"]));
$usuario_propietario=trim(strip_tags($_COOKIE["sesion_iniciada_3"]));

$conn = new mysqli("localhost","id18339215_basededatoslevelup","go!AzAFLw8r8!A~E","id18339215_levelup");
$query_insert = "INSERT INTO valorant (nombre, region, rango, precio, usuario_propietario) VALUE (\"$nombre_de_cuenta\",\"$region\",\"$rango\",\"$precio\",\"$usuario_propietario\")";
//mysqli_query($conn, $query_insert);
$query_select = "SELECT * FROM valorant WHERE nombre='$nombre_de_cuenta'";
$select = mysqli_query($conn, $query_select);
//
if ($nombre_de_cuenta!="" && $region!="" && $rango!="" && $precio!="" && $usuario_propietario!=""){
    if ($select->num_rows > '0') {
        setcookie("correccion_valorant", "Cuenta ya existente", time() + 10, "/");
        header('Location: crear_venta.php');
    } else {
        //INSERT
        mysqli_query($conn, $query_insert);
        setcookie("correccion_valorant","Datos validados",time()+10,"/");
        header('Location: crear_venta.php');
    }
} else {
    setcookie("correccion_valorant","Algun campo vacio",time()+10,"/");
    header('Location: crear_venta.php');
}
?>