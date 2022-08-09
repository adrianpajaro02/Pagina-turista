<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="consulta.php" method="post">
    <title>consulta</title>
    <link href="estiloconsulta.css" rel="stylesheet">
</head>
<body>
<form method="POST" action="consulta.php">
  <div class="search__container">
    <input class="search__input" type="text" placeholder="Search" name="cedula" >
  </div>
</form>
<br>
<br>
<br>
<br>
<br>

</div>
            <div class="form-group">
            <a href="inicio2.html" class="btnr btn-info btn-lg btn-responsive"> Inicio </a>
            </div>      
</body>
</html>  
</form>

<?php
if (isset($_POST['btn2'])) 
{
    include("conexion.php");
    $cedula= $_POST["cedula"];

    $resultado = mysqli_query($conexion,"SELECT * FROM registros WHERE cedula = $cedula");
    while($consulta= mysqli_fetch_array($resultado))
    {
        echo
        "
        <table width= colour= border=>
        <tr>
           <td><b><center>Nombre Completo</center></b></td>
           <td><b><center>Celular</center></b></td>
           <td><b><center>Dirección</center></b></td>
           <td><b><center>fecha</center></b></td>
           <td><b><center>Correo Electrónico</center></b></td>
           <td><b><center>Entidad</center></b></td>
           <td><b><center>Descripción</center></b></td>
           <td><b><center>Saldo en mora</center></b></td>
        </tr>
        <tr>
          <td>".$consulta['nombre']." </td>
          <td>".$consulta['celular']." </td>
          <td>".$consulta['direccion']." </td>
          <td>".$consulta['fecha']." </td>
          <td>".$consulta['correo']." </td>
          <td>".$consulta['entidad']." </td>
          <td>".$consulta['descripcion']." </td>
          <td>".$consulta['saldo']." </td>
        </tr>
        </table>
        ";

        
    }
    mysqli_close($conexion);
}