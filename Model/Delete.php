<?php
include("../Config/Connection.php");
$id = $_POST["id"];
$sql = "DELETE FROM datos WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
if ($res) {
    ?>
    <script>alert("Eliminado")</script>
    <?php
    include("../View/Delete_id.php");
} else {
    ?>
    <script>alert("Error al eliminar")</script>
    <?php
}
?>