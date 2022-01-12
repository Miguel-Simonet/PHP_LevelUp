<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show DB</title>
</head>
<body>
    <?PHP
    include("../../../Boostrap_Thinks/boostrap.php");

    $bdservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "levelup";
    $conn = mysqli_connect($bdservername,$dbusername,$dbpassword,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . "<br>" );
    }
    //echo "Connected successfully <br>";
    $sql = "select * from carrusel;";
    $result= mysqli_query($conn, $sql);  
    $chequeo = mysqli_num_rows($result);
    echo "<h1>Items</h1>";
    echo "<div>";
    if ($chequeo>0) {
        echo "<table class='table'><tr><th scope='col'>Id</th><th scope='col'>titulo</th><th scope='col'>descripcion</th><th scope='col'>image</th><th scope='col'>created_at</th></tr>";
        while ($row = mysqli_fetch_assoc($result)){ 
            //for loop better than this line
            echo "<tr>
            <th scope='row'></th>
                <td>" . $row['id'] . "</td>
                <td>" . $row['titulo'] . "</td>
                <td>" . $row['descripcion'] . "</td>
                <td>" . $row['image'] . "</td>
                <td>" . $row['created_at'] . "</td>
            </tr>";
        }
        echo "</table></div>";
    } else {
        echo "No results<br>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>