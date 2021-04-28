<html>

<head>
  <title>ALTA DE CLIENTES</title>
  
   <style>

  th{
    background-color: grey;
    border: solid black 2px;
  }
  
  td{
    background-color: cadetblue;
    border: solid black 2px;
  }
  table{
    text-align: center;
    margin-left:25%;
  }

  </style>
</head>

<body>


<?php

function mostrardatos()
{
    $con = mysqli_connect("localhost", "fuesdawy", "Nilocamilalinda7", "fuesdawy_Clientes");
    //servername,username,password,bddname
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    $sql = "SELECT * FROM clientes";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='tabla'>
        <tr>
        <th> NOMBRE </th>
        <th> APELLIDO_1 </th>
        <th> APELLIDO_2 </th>
        <th> SEXO </th>
        <th> DIRECCION </th>
        <th> CORREO </th>
        <th> TELEFONO </th>
        <th> FECHA_NACIMIENTO </th>
        <th> POBLACION </th>
        <th> PROVINCIA </th>
        <th> CONTRASENA </th>
        <th> DNI </th>
        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>
            <td> " . $row["NOMBRE"] . "</td>
            <td> " . $row["APELLIDO_1"] . "</td>
            <td> " . $row["APELLIDO_2"] . "</td>
            <td> " . $row["SEXO"] . "</td>
            <td> " . $row["DIRECCION"] . "</td>
            <td> " . $row["CORREO"] . "</td>
            <td> " . $row["TELEFONO"] . "</td>
            <td> " . $row["FECHA_NACIMIENTO"] . "</td>
            <td> " . $row["POBLACION"] . "</td>   
            <td> " . $row["PROVINCIA"] . "</td>  
            <td> " . $row["CONTRASENA"] . "</td>  
            <td> " . $row["DNI"] . "</td>     
            </tr>";
        }
    } else {
        echo "0 results";
    }

    echo "</table>";
    mysqli_close($con);
}
//aqui se cierra la funcion mostrardatos


  $conexion = mysqli_connect("localhost", "fuesdawy", "Nilocamilalinda7", "fuesdawy_Clientes") or
    die("Problemas con la conexión");

  mysqli_close($conexion);

  
  mostrardatos();


  ?>
</body>

</html>