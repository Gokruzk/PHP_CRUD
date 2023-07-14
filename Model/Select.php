<?php
include("../Config/Connection.php");
$sql = "SELECT * FROM datos";
$res = mysqli_query($conn, $sql);
if ($res) {
    
} else {
    ?>
    <script>alert("Error en la consulta")</script>
    <?php
    include("../View/Show_data.php");
}
?>