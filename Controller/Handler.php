<!-- <center style="padding-top: 30px"> -->
<?php
$getValue = $_GET['value'];
// echo "Valor recibido: $getValue";
if ($getValue == 1) {
    include("../View/Data_Insert.html");
} else if ($getValue == 2) {
    include("../View/Show_data.php");
} else if ($getValue == 3) {
    include("../View/Delete_id.php");
} else if ($getValue == 4) {
    include("../View/Update_Form.php");
}
?>
<!-- </center> -->