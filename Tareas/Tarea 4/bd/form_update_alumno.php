<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="estilos_bd.css">
    <title>Editar</title>
</head>

<body class="body">
    <nav class="nav-alumnos">
      <div>
      </div>
      <div><h1>Universidad de Sucre</h1></div>
    </nav>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT nombres,apellidos,CU,idcarrera from alumno where id=$id";
    $sql1 = "SELECT id,nombre from  carrera";
    $resultado1 = $con->query($sql1);
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <div class="contenedor-principal">
    <form class="form-alumno" action="update_alumno.php" method="post">

<div>
<div>
    <h2>Editar alumno:</h2>
</div>
    <label for="nombres">Nombres</label>
    <input type="text" name="nombres" value="<?php echo $row['nombres']?>">
</div>
<div>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" value="<?php echo $row['apellidos']?>">
</div>
<div>
<label for="idcarrera">Carrera:</label>
    <select name="idcarrera">
        <?php while ($row_carrera = $resultado1->fetch_assoc()) { ?>
            <option value="<?php echo $row_carrera['id'] ?>" 
            <?php echo $row_carrera['id']==$row['idcarrera']?"selected":"";  ?>     ><?php echo $row_carrera['nombre'] ?></option>


        <?php } ?>

    </select>
</div>
<div>
    <label for="CU">CU</label>
    <input type="text" name="CU" value="<?php echo $row['CU']?>">
</div>
<input type="hidden" name="id" value="<?php echo $id?>">
<input class="btn-crear-alumno btn-submit" type="submit" value="Editar">


</form>
    </div>
    

</body>

</html>