<?php
include("../Config/Connection.php");
$id = $_POST["id"];
$name = $_POST["name"];
$lname = $_POST["lname"];
$sql = "UPDATE datos SET nombre = '$name', apellido = '$lname' WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
if ($res) {
    include("../Model/SelectID.php");
    ?>
    <script>alert("Estudiante Actualizado")</script>
    <?php
} else {
    ?>
    <script>alert("Error al actualizar")</script>
    <?php
}
?>