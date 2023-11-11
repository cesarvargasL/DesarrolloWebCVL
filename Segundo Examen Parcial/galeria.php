<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT imagen, titulo FROM libros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $imageUrl = "images/" . $row['imagen'];
        $imageName = $row['titulo'];
        echo "<button class=\"imagen-boton\" data-imagen=\"$imageUrl\" data-nombre=\"$imageName\" style=\"width: 50px; height: 75px; margin-left: 60px;\">
                        <img class=\"imagen-libro\" src=\"$imageUrl\" alt=\"$imageName\" />
                        <p>$imageName</p>
                    </button>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>