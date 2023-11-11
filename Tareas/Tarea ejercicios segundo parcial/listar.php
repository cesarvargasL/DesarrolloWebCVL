<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .libros-flex {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .libro {
            margin: 10px;
        }

        .imagen-libro {
            max-width: 200px;
            width: 100px;
            height: 80px;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "bd_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT titulo, imagen FROM libros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='libros-flex'>";
    while($row = $result->fetch_assoc()) {
        echo "<div class='libro'><h2 class='titulo-libro'>" . $row["titulo"] . "</h2><img class='imagen-libro' src='images/" . $row["imagen"] . "'></div>";
    }
    echo "</div>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>