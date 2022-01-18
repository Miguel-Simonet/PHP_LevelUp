<?PHP
function insert_over($nombre_de_cuenta,$region,$rango,$precio,$usuario_propietario){
    $mysql = new mysqli("localhost","root","","levelup");
    $query_insert = "INSERT INTO overwatch (nombre, region, rango, precio, usuario_propietario) VALUE (\"$nombre_de_cuenta\",\"$region\",\"$rango\",\"$precio\",\"$usuario_propietario\")";
    mysqli_query($mysql, $query_insert);
    echo "$nombre_de_cuenta,$region,$rango,$precio,$usuario_propietario";
}
$nombre_de_cuenta=trim(strip_tags($_POST["Nombre_cuenta_overwatch"]));
$region=trim(strip_tags($_POST["region_overwatch"]));
$rango=trim(strip_tags($_POST["rango_overwatch"]));
$precio=trim(strip_tags($_POST["precio_overwatch"]));
$usuario_propietario=trim(strip_tags($_COOKIE["usuario"]));

if ($nombre_de_cuenta!="" && $region!="" && $rango!="" && $precio!="" && $usuario_propietario="admin") {
    insert_over($nombre_de_cuenta,$region,$rango,$precio,$usuario_propietario);
    setcookie("correccion_overwatch","Datos validados",time()+10,"/");
    header('Location: ../menu.php');
}else {
    setcookie("correccion_overwatch","Algun campo vacio",time()+10,"/");
    header('Location: ../menu.php');
}

?>