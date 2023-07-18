<!-- <center style="padding-top: 30px"> -->
<?php
$getValue = $_GET['value'];
// echo "Valor recibido: $getValue";
if ($getValue == 1) {
    echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="../Model/Insert.php" method="post">
<div class="modal" tabindex="-1" id="Miventana">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Guardar Estudiante</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
                <fieldset>
                    <label for="">Ingrese el nombre: </label>
                    <input type="text" name="name" placeholder="Nombre"> 
                    <br><br>
                    <label for="">Ingrese el apellido: </label>
                    <input type="text" name="lname" placeholder="Apellido"> 
                    <br><br>
                    <label for="">Ingrese la contraseña: </label>
                    <input type="text" name="psw" placeholder="Contraseña"> 
                    <br><br>
                    <button type="submit" value="Guardar">Guardar</button> <br>
                </fieldset>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>
    <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var myModal = new bootstrap.Modal(document.getElementById("Miventana"));
            myModal.show();
        });
    </script>
</form>';
} else if ($getValue == 2) {
    include("../View/Show_data.php");
} else if ($getValue == 3) {
    include("../View/Delete_id.php");
} else if ($getValue == 4) {
    include("../View/Update_Form.php");
}else if($getValue == 5){
    include("../Model/Report.php");
}
?>
</center>