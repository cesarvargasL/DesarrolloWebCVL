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

$libros = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $libros[] = $row;
    }
} 

echo json_encode($libros);

$conn->close();
?>