<?PHP
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
    echo "<table><tr><th>Id</th><th>titulo</th><th>descripcion</th><th>image</th><th>created_at</th></tr>";
    while ($row = mysqli_fetch_assoc($result)){ 
        //for loop better than this line
        echo "<tr>
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