<?php
include("../Config/Connection.php");
$name = $_POST["name"];
$lname = $_POST["lname"];
$psw = sha1($_POST["psw"]);
$sql = "INSERT INTO datos(nombre,apellido,clave) VALUES('$name','$lname','$psw')";
$res = mysqli_query($conn, $sql);
if ($res) {
    include("../View/Data_Insert.html");
    ?>
    <script>alert("Estudiante insertado")</script>
    <?php
} else {
    ?>
    <script>alert("Error al insertar")</script>
    <?php
}
?>