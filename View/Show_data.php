<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    * {
      font-family: Arial, Helvetica, sans-serif;
      color: white;
      background-color: rgb(165, 71, 71);
    }

    input {
      background-color: rgb(37, 45, 43);
    }

    button {
      background-color: burlywood;
      text-align: center;
      height: 30px;
      width: 200px;
      border-radius: 3px;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 90vh;
    }

    table {
      text-align: center;
      width: 100%;
      height: 100%;
    }

    table,
    th,
    td {
      border: 1px solid;
    }
  </style>
</head>

<body>
  <center>
    <h1>DATOS ESTUDIANTES</h1>
    <div style="width: 700px; height: 100px; padding-top:30px">
      <table border="1">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Contraseña</th>
        </tr>

        <?php
        // Realizar la consulta
        include("../Model/Select.php");

        // Recorrer los resultados
        while ($fila = $res->fetch_assoc()) {
          ?>
          <tr>
            <td>
              <?php echo $fila["id"]; ?>
            </td>
            <td>
              <?php echo $fila["nombre"]; ?>
            </td>
            <td>
              <?php echo $fila["apellido"]; ?>
            </td>
            <td>
              <?php echo $fila["clave"]; ?>
            </td>
          </tr>
          <?php
        }

        // Cerrar la conexión
        $res->close();
        ?>
      </table>
    </div>
  </center>
</body>

</html>