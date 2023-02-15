<?php
    include ('backend_agregar_editar.php');

    $id = $_GET['id'];
    
    $q= "DELETE FROM productos WHERE id = '$id'";

    $consulta = mysqli_query($conexion, $q);
    if($consulta){
        header("Location: index.php");
    }



?>