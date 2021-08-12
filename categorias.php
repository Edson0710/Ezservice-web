<?php 

$server = "localhost";
$user = "root";
$pass = "";
$bd = "ezservice";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM categoria";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$categorias = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $id_categoria=$row['id'];
    $nombre=$row['nombre'];
    $imagen=$row['imagen'];
    

    $categorias[] = array('id'=> $id_categoria, 'nombre'=> $nombre,'imagen'=> $imagen);

}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
$json_string = json_encode($categorias);
echo  $json_string;


$file = 'categorias.json';
file_put_contents($file, $json_string);
    

?>