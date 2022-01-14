<?php
//
$nombre=(trim(strip_tags($_POST['nombre'])));
$email=(trim(strip_tags($_POST['email'])));
$password=(trim(strip_tags($_POST['contraseña'])));
$password_2=(trim(strip_tags($_POST['contraseña2'])));
//
$conn = mysqli_connect("localhost","root","","levelup");
$query_insert = "INSERT INTO sesions (usuario, email, contraseña) VALUE (\"$nombre\",\"$email\",\"$password\")";
$query_email = "SELECT email FROM sesions WHERE email = '$email'";
//
$select_email= mysqli_query($conn, $query_email);
//$insert_user = mysqli_query($conn, $query_insert);
while ($fila = $select_email->fetch_assoc()) {
    $current_email = $fila['email'];
     if ($current_email == $email) {
         echo "coincide : ".$fila['email'];
         echo "<br>";
     }else{
         echo "no coincide";
         echo "<br>";
         $insert_user = mysqli_query($conn, $query_insert);
     }  
}

?>