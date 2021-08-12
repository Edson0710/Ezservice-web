<?php

$Registro=$_REQUEST['usu'];
$Contrasena=$_REQUEST['cont'];

$conexion=new PDO("mysql:host=localhost;dbname=ezservice","root","");

$query = $conexion->query ("select * from usuario_comun where correo = '$Registro'and contrasena ='$Contrasena'");
$fila=array();

FOREACH ($query AS $row){
    $fila[]=$row;
}

if($fila)
{
    echo "{\"Estado\": \"OK\"}";
    return;
}
echo "{\"Estado\": \"NO\"}";    
?>