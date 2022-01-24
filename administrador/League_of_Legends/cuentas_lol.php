<?PHP
function insert_league_of_legends($nombre_de_cuenta, $region, $rango, $precio, $usuario_propietario)
{
    $mysql = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
    $query_insert = "INSERT INTO lol (nombre_de_cuenta, region, rango, precio, usuario_propietario) VALUE (\"$nombre_de_cuenta\",\"$region\",\"$rango\",\"$precio\",\"$usuario_propietario\")";
    mysqli_query($mysql, $query_insert);
}
$nombre_de_cuenta = trim(strip_tags($_POST["Nombre_cuenta_lol"]));
$region = trim(strip_tags($_POST["region_lol"]));
$rango = trim(strip_tags($_POST["rango_lol"]));
$precio = trim(strip_tags($_POST["precio_lol"]));
$usuario_propietario = trim(strip_tags($_COOKIE["usuario"]));

$mysql = new mysqli("localhost", "id18339215_basededatoslevelup", "", "id18339215_levelup");
$query_select = "SELECT * FROM lol WHERE nombre_de_cuenta='$nombre_de_cuenta'";
$select = mysqli_query($mysql, $query_select);

if ($nombre_de_cuenta != "" && $region != "" && $rango != "" && $precio != "" && $usuario_propietario = "admin") {
    if ($select->num_rows > '0') {
        setcookie("correccion_lol", "Cuenta ya existente", time() + 10, "/");
        header('Location: ../menu.php');
    } else {

        insert_league_of_legends($nombre_de_cuenta, $region, $rango, $precio, $usuario_propietario);
        setcookie("correccion_lol", "Datos validados", time() + 10, "/");
        header('Location: ../menu.php');
    }
} else {
    setcookie("correccion_lol", "Algun campo vacio", time() + 10, "/");
    header('Location: ../menu.php');
}
