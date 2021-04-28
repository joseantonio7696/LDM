<html>

<head>
  <title>DELETE</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "fuesdawy", "Nilocamilalinda7", "fuesdawy_Clientes") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select correo from clientes
                        where correo='$_REQUEST[correo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from clientes where correo='$_REQUEST[correo]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del alumno con dicho mail.";
  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);
  ?>
</body>

</html>