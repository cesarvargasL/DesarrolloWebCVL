<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "Debe iniciar sesión para ver esta página.";
    exit;
}

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
        echo "<div class='libro'>";
        echo "<img src='$imageUrl' alt='$imageName' />";
        echo "<p>$imageName</p>";
        if ($_SESSION['nivel'] == 1) {
            echo "<button class='editar'>Editar</button>";
            echo "<button class='eliminar'>Eliminar</button>";
        }
        echo "</div>";
    }
} else {
    echo "No hay libros disponibles.";
}

$conn->close();
?>