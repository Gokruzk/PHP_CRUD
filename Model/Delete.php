<?php
include("../Config/Connection.php");
$id = $_POST["id"];
$sql = "DELETE FROM datos WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
if ($res) {
    include("../View/Delete_id.php");
    ?>
    <script>alert("Eliminado")</script>
    <?php
} else {
    ?>
    <script>alert("Error al eliminar")</script>
    <?php
}
?>