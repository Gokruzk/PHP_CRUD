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
    }
  </style>
</head>

<body>
  <?php
  include("../Model/Select.php");
  ?>
  <center>
    
    <?php
    // Realizar la consulta
    include("../Model/SelectID.php");
    
    ?>
    <form action="../Model/Delete_id.php" method="post">
      <button type="submit">Eliminar</button>
    </form>
  </center>
</body>

</html>