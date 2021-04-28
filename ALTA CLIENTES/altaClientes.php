<html>

<head>
  <title>CONSULTA DE CLIENTES</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "fuesdawy", "Nilocamilalinda7", "fuesdawy_Clientes") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into clientes(nombre,apellido_1,apellido_2,sexo,direccion,correo,telefono,fecha_nacimiento,poblacion,provincia,contrasena,dni) values 
                       ('$_REQUEST[nombre]','$_REQUEST[apellido1]','$_REQUEST[apellido2]','$_REQUEST[sexo]','$_REQUEST[direccion]','$_REQUEST[correo]','$_REQUEST[telefono]','$_REQUEST[fecha]','$_REQUEST[poblacion]','$_REQUEST[provincia]','$_REQUEST[contrasena]','$_REQUEST[dni]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";

  ?>
</body>

</html>