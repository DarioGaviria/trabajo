<?php

$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];

include "Medico.php";

$doc = new Medico($nombre,$especialidad);

$doc->actualizar();
header("location:listado.php");

 ?>