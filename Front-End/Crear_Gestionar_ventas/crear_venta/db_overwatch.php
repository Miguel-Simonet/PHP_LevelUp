<?PHP
function insert_over($nombre_de_cuenta, $region, $rango, $precio, $usuario_propietario)
{
    $mysql = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
    $query_insert = "INSERT INTO overwatch (nombre, region, rango, precio, usuario_propietario) VALUE (\"$nombre_de_cuenta\",\"$region\",\"$rango\",\"$precio\",\"$usuario_propietario\")";
    mysqli_query($mysql, $query_insert);
    echo "$nombre_de_cuenta,$region,$rango,$precio,$usuario_propietario";
}
$nombre_de_cuenta = trim(strip_tags($_POST["Nombre_cuenta_overwatch"]));
$region = trim(strip_tags($_POST["region_overwatch"]));
$rango = trim(strip_tags($_POST["rango_overwatch"]));
$precio = trim(strip_tags($_POST["precio_overwatch"]));
$usuario_propietario = trim(strip_tags($_COOKIE["sesion_iniciada_3"]));

$mysql = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
$query_select = "SELECT * FROM overwatch WHERE nombre='$nombre_de_cuenta'";
$select = mysqli_query($mysql, $query_select);

if ($nombre_de_cuenta != "" && $region != "" && $rango != "" && $precio != "" && $usuario_propietario != NULL) {
    if ($select->num_rows > '0') {
        setcookie("correccion_overwatch", "Cuenta ya existente", time() + 10, "/");
        header('Location: crear_venta.php');
    } else {
        insert_over($nombre_de_cuenta, $region, $rango, $precio, $usuario_propietario);
        setcookie("correccion_overwatch", "Datos validados", time() + 10, "/");
        header('Location: crear_venta.php');
    }
} else {
    setcookie("correccion_overwatch", "Algun campo vacio", time() + 10, "/");
    header('Location: crear_venta.php');
}