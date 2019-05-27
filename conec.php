<?php
$user="root";
$pass="";
$servidor="localhost";
$bd="optiaustral";

$conexion=mysqli_connect($servidor, $user, "") or die ("No se ha podido establecer la conexión a la base de datos");

$db=mysqli_select_db($conexion, $bd) or die ("no se pudo seleccionar la base de datos");

                ?>