<?PHP
$email=(trim(strip_tags($_POST['email'])));
$contraseña=sha1((trim(strip_tags($_POST['contraseña']))));

$conn = mysqli_connect("localhost","id18339215_basededatoslevelup","go!AzAFLw8r8!A~E","id18339215_levelup");
$query_usuario = "SELECT usuario,email,contraseña FROM sesions WHERE email = '$email'";
$select_usuario = mysqli_query($conn, $query_usuario);



if ($email!=="admin" && $contraseña!==1234) {
    while ($row = mysqli_fetch_assoc($select_usuario)) {
        $usuario=$row['usuario'];
        if($email==$row['email'] && $contraseña==$row['contraseña'] ) {
            $_SESSION["sesion_iniciada_2"]="$usuario";
            setcookie("sesion_iniciada_3", "$usuario", time() +1314000, "/");
            //echo $_SESSION["sesion_iniciada_2"];
            header('Location: ../Pagina_Principal/index.php');  
      
        }else {
            setcookie("sesion_iniciada", "El email no existe o no coincide con la contraseña.", time()+10);
            header('Location: Registro_Inicio_Sesion.php');
    
        }
    }
}else {
    setcookie("usuario", "admin", time() +1314000, "/");
    header("Location:../../administrador/menu.php");
}


?>