<html>

<head>
  <title>CONSULTA DE CLIENTES</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "fuesdawy", "Nilocamilalinda7", "fuesdawy_Clientes") or
    die("Problemas con la conexión");

  $consulta = mysqli_query($conexion, "select nombre,apellido_1,apellido_2,correo from clientes where correo='$_REQUEST[correo]'")
    or die("Problemas en el select" . mysqli_error($conexion));

    if ($consul = mysqli_fetch_array($consulta)) {
        echo "Nombre:" . $consul['nombre'] . "<br>";
        echo "Apellido 1:" . $consul['apellido_1'] . "<br>";
        echo "Apellido 2:" . $consul['apellido_2'] . "<br>";
        echo "Correo Electronico:" . $consul['correo'] . "<br>";
        
      } else {
        echo "No existe un alumno con ese mail.";
      }


  mysqli_close($conexion);

  ?>
</body>

</html>