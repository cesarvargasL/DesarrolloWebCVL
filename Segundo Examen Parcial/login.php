<?php
session_start();

if (isset($_SESSION['usuario'])) {
    echo "Ya estás autenticado como {$_SESSION['usuario']}.";
    exit;
}

echo "<form id='login-form' action='autenticar.php' method='post'>";
echo "<br>";
echo "<label for='usuario'>Usuario:</label>";
echo "<br>";
echo "<input type='text' id='usuario' name='usuario' required />";
echo "<br>";
echo "<label for='contrasena'>Contraseña:</label>";
echo "<br>";
echo "<input type='password' id='contrasena' name='contrasena' required />";
echo "<br>";
echo "<br>";
echo "<label for='captcha'>Captcha:</label>";
echo "<input type='text' placeholder='captcha'/>";
echo "<br>";
echo "<input type='text' id='captcha' name='captcha' required />";
echo "<br>";
echo "<button type='submit'>Loguearse</button>";
echo "<br>";
echo "</form>";
?>