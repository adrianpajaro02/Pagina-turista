<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <form action="registro.php" method="post">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/regiss.css">
    <title>Registro</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2>Formulario de registro</h2>
        <form>
            <div class="form-group">
                <label for="first-name">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" id="first-name" minlength="5" maxlength="40" required >
            </div>
            <div class="form-group">
                <label for="first-name">Cédula</label>
                <input type="number" class="form-control" name="cedula" id="first-name" required pattern="[0-9]">
            </div>
            <div class="form-group">
                <label for="first-name">Celular</label>
                <input type="number" class="form-control" name="celular" id="first-name" required pattern="[0-9]">
            </div>
            <div class="form-group">
                <label for="last-name">Profesión</label>
                <input type="text" class="form-control" name="profesion" id="last-name">
            </div>
            <div class="form-group">
                <label for="country">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="country">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" name="correo" id="email">
            </div>
            <div class="form-group">
                <label for="age">Entidad</label>
                <input type="text" class="form-control" name="entidad" id="age">
            </div>
            <div class="form-group">
                <label for="email">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="email">
            </div>
            <div class="form-group">
                <label for="category">Monto</label>
                <input type="number" class="form-control" name="monto" id="category">
            </div>
            <div class="form-group">
                <label for="education">Abono</label>
                <input type="number" class="form-control" name="abono" id="education">
            </div>
            <div class="form-group">
                <label for="education">Saldo en mora</label>
                <input type="number" class="form-control" name="saldo" id="education">
            </div>
            <div class="form-group">
                <label for="category">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="category">
            </div>
            <div class="form-group">
            <a href="inicio2.html" class="btnr btn-info btn-lg btn-responsive" >Inicio</a>
            </div>
            
            <button type="submit" name="boto1" class="btn btn-info btn-lg btn-responsive" id="search"> </span>Guardar</button>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['boto1']))
{
  include("conexion.php");

  $nombre= $_POST["nombre"];
  $cedula= $_POST["cedula"];
  $celular= $_POST["celular"];
  $profesion= $_POST["profesion"];
  $direccion= $_POST["direccion"];
  $correo= $_POST["correo"];
  $entidad= $_POST["entidad"];
  $descripcion= $_POST["descripcion"];
  $monto= $_POST["monto"];
  $abono= $_POST["abono"];
  $saldo= $_POST["saldo"];
  $fecha= $_POST["fecha"];


  $insertar="INSERT INTO registros(nombre,cedula,celular,profesion,direccion,correo,entidad,
  descripcion,monto,abono,saldo,fecha)VALUES('$nombre','$cedula','$celular','$profesion','$direccion','$correo',
  '$entidad','$descripcion','$monto','$abono','$saldo','$fecha')";

   $resultado=mysqli_query($conexion,$insertar);
   
  
  
mysqli_close($conexion);
}
?>