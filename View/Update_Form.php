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
    <h1>EDITAR ESTUDIANTES</h1>
    <div style="width: 700px; height: 200px; padding-top:30px">
      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Contraseña</th>
          <th>Editar</th>
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

              <a href="../Model/SelectID.php?id=<?php echo $fila["id"] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                  <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                  <path d="M16 5l3 3"></path>
                </svg>
              </a>
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