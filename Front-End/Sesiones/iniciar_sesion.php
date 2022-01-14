<?PHP
$email=(trim(strip_tags($_POST['email'])));
$contraseña=sha1((trim(strip_tags($_POST['contraseña']))));

$conn = mysqli_connect("localhost","root","","levelup");
$query_usuario = "SELECT usuario,email,contraseña FROM sesions WHERE email = '$email'";
$select_usuario = mysqli_query($conn, $query_usuario);



while ($row = mysqli_fetch_assoc($select_usuario)) {
    $usuario=$row['usuario'];
    echo $usuario;
    if($email==$row['email'] && $contraseña==$row['contraseña'] ) {
        $cosas=setcookie("sesion_iniciada", "$usuario");
        //header('Location: ../Pagina_Principal/index.php');
        echo $cosas;
    }else {
        echo "no coincide";
    }
}


?>