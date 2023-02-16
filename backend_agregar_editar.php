<?php


$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "crudproductos";

$conexion = mysqli_connect($host, $usuario, $pass, $bd);

/* En esta sección de codigo consultamos que botón utilizaremos */

if(isset($_POST['agregar'])){ //consultamos si se ha oprimido el botón agregar
    
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
}else if(isset($_POST['editar'])){ //consultamos si se ha oprimido el botón editar
    
    if(!$conexion){
        echo "No hay conexion";
    }
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    
    $q = "UPDATE productos set nombre = '$nombre', cantidad = '$cantidad', precio = '$precio'
        where id = '$id' ";
   
    $consulta = mysqli_query($conexion, $q);
    
    if($consulta){
        header("Location: index.php");
    }
}

?>