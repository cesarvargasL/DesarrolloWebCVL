<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\estilos.css">
    <title>Examen Final</title>
</head>
<body>
    <header >
        <div class="cabecera-izquierda">
            <img src=".\images\escudo.jpg" alt="Escudo universidad san francisco xavier" width="150px">
        </div>
        <div id="menu" class="cabecera-derecha">
            <div class="cbd-superior">
                <div class="btn-preguntas">
                    <button id="btn-pregunta1" class="btn-pregunta" >Pregunta 1</button>
                    <div class="lineas-verticales"></div>
                    <button id="btn-pregunta2" class="btn-pregunta">Pregunta 2</button>
                    <div class="lineas-verticales"></div>
                    <button class="btn-pregunta">Pregunta 3</button>
                    <div class="lineas-verticales"></div>
                    <button class="btn-pregunta">Pregunta 4</button>
                    <div class="lineas-verticales"></div>
                    <button class="btn-pregunta">Pregunta 5</button>
                    <a href="logout.php" class="btn-pregunta">Cerrar Sesión</a>
                </div>
            </div>
            <div id="titulo" class="tit-preguntas">
                
            </div>
        </div>
    </header>
    <main>
        <div id="sub-menu" class="barra-lat-izquierda" >
            <div  class="btn-opciones btn-op-principal">
                Opciones
            </div>
            <?php
            include('conexion.php');

            $id_usuario = $_SESSION['id_usuario'];
            $sql = "SELECT materia FROM usuarios_materias WHERE idusuario = $id_usuario";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo '<button class="btn-materias btn-opciones btn-op-secundarios">' . $row['materia'] . '</button>';
            }
            $con->close();
            ?>
        </div>
        <div id="contenido" class="contenedor-derecho">
            <div class="informacion">
                <div class="cabecera-informacion">
                    <h3>SIS 256 Programación Web</h3>
                    <p>Examen Final- 02-12-2023 7:00 am</p>
                </div>
                <img src=".\images\cesar_vargas.jpg" alt="" height="120px" width="120px">
                <div class="footer-informacion">
                    <h4>César Luis Vargas Lezano</h4>
                    <p>Carrera: Ingenieria de Sistemas</p>
                    <p>Reposito Examen:<a href="https://github.com/cesarvargasL/DesarrolloWebCVL/tree/main/Examen%20Final" target="_blank"> haga click aqui </a>
                    <p>O</p>
                    <span>https://github.com/cesarvargasL/DesarrolloWebCVL/tree/main/Examen%20Final</span>
                </div>
            </div>
        </div>
        
    </main>
    <footer id="pie"> Sucre - Semestre 2-2023</footer>
    <script src="script.js"></script>
</body>
</html>
