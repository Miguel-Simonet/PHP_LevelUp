<?PHP
$email=(trim(strip_tags($_POST['email'])));
$contraseña=sha1((trim(strip_tags($_POST['contraseña']))));

$conn = mysqli_connect("localhost","root","","levelup");
$query_usuario = "SELECT usuario,email,contraseña FROM sesions WHERE email = '$email'";
$select_usuario = mysqli_query($conn, $query_usuario);



while ($row = mysqli_fetch_assoc($select_usuario)) {
    $usuario=$row['usuario'];
    if($email==$row['email'] && $contraseña==$row['contraseña'] ) {
        setcookie("sesion_iniciada", "$usuario");
        header('Location: ../Pagina_Principal/index.php');

        
    }else {
        setcookie("sesion_iniciada", "El email no existe o no coincide con la contraseña.", time()+10);
        header('Location: Registro_Inicio_Sesion.php');

    }
}


?>