<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

include("metodos.php");

login($usuario, $contrasena);



?>