	<?php
include "Estudiantes.php";

$miguel= new Estudiantes ("Miguel","Sanchez","2001","CC","1005187896");

echo $miguel->obtenerApellidos();

?>