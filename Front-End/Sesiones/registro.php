<?php
//
$nombre=(trim(strip_tags($_POST['nombre'])));
$email=(trim(strip_tags($_POST['email'])));
$password=sha1((trim(strip_tags($_POST['contraseña']))));
$password_2=sha1((trim(strip_tags($_POST['contraseña2']))));
//
$conn = mysqli_connect("localhost","root","","levelup");
$query_insert = "INSERT INTO sesions (usuario, email, contraseña) VALUE (\"$nombre\",\"$email\",\"$password\")";
$query_email = "SELECT email FROM sesions WHERE email = '$email'";
//
$select_email= mysqli_query($conn, $query_email);

if ($password==$password_2) {
    if ($select_email->num_rows >'0') {
        setcookie("problema", "Usuario ya registrado.", time()+100, "/");
        header('Location: Registro_Inicio_Sesion.php');
    }else{
        $insert_user = mysqli_query($conn, $query_insert);;
        setcookie("problema", "Usuario registrado correctamente.", time()+100, "/");
        header('Location: Registro_Inicio_Sesion.php');
    }
}else{
    setcookie("problema", "Las contraseñas no coinciden.", time()+100, "/");
    header('Location: Registro_Inicio_Sesion.php');
}



?>