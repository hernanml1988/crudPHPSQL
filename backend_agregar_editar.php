<?php


$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "crudproductos";

$conexion = mysqli_connect($host, $usuario, $pass, $bd);

if(isset($_POST['agregar'])){
    
    if(!$conexion){
        echo "No hay conexion";
    }

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    
    $q = "INSERT INTO `productos`(`nombre`, `categoria`, `cantidad`, `precio`) 
    VALUES ('$nombre','$categoria','$cantidad', '$precio')";
    $consulta = mysqli_query($conexion, $q);
    
    if($consulta){
        header("Location: index.php");
    }
}
// echo $_POST['agregar']  ;
if(isset($_POST['editar'])){
    
    if(!$conexion){
        echo "No hay conexion";
    }
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    
    $q = "UPDATE productos set nombre = '$nombre', categoria = '$categoria', cantidad = '$cantidad', precio = '$precio'
        where id = '$id' ";
   
    $consulta = mysqli_query($conexion, $q);
    
    if($consulta){
        header("Location: index.php");
    }
}

?>