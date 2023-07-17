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
      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Contraseña</th>
          <th>Eliminar</th>
        </tr>

        <?php
        // Realizar la consulta
        include("../Model/Select.php");

        // Recorrer los resultados
        while ($fila = $res->fetch_assoc()) { ?>
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
            <td>
              <a href="../Model/Delete.php?id=<?php echo $fila["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M4 7l16 0"></path>
                  <path d="M10 11l0 6"></path>
                  <path d="M14 11l0 6"></path>
                  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                </svg></a>
            </td>
          </tr>
          <?php
        }

        // Cerrar la conexión
        $res->close(); ?>
      </table>
    </div>
  </center>
</body>

</html>