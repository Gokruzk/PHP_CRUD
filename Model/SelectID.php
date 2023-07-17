<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    include("../Config/Connection.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM datos WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res && mysqli_num_rows($res) > 0) {
        $student = $res->fetch_assoc();
        ?>
        <center>
            <h1>ESTUDIANTE A EDITAR</h1>
            <form action="../Model/Update.php" method="post">
                <div style="padding: 10px">
                    <label for="id">ID</label>
                    <input id="id" name="id" type="text" style="width: 300px" />
                </div>
                <div style="padding: 10px">
                    <label for="name">Nombre</label>
                    <input id="name" name="name" type="text" style="width: 300px" />
                </div>
                <div style="padding: 10px">
                    <label for="lname">Apellido</label>
                    <input id="lname" name="lname" type="text" style="width: 300px" />
                </div>
                <button type="submit">Actualizar</button>
            </form>
        </center>
        <script>
            const st = {
                id: "<?php echo $student["id"] ?>",
                name: "<?php echo $student["nombre"] ?>",
                lastN: "<?php echo $student["apellido"] ?>"
            }
            const { id, name, lastN } = st
            document.getElementById("id").value = id
            document.getElementById("name").value = name
            document.getElementById("lname").value = lastN
        </script>
        <?php
    } else {
        ?>
        <script>alert("Error en la consulta")</script>
        <?php
        include("../View/Update_Form.html");
    }
    ?>
</body>

</html>