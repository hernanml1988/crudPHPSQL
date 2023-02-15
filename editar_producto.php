<?php

$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "crudproductos";

$conexion = mysqli_connect($host, $usuario, $pass, $bd);

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id = '$id'";
$resultado = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($resultado);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <div class="container"
        style="width: 1200px; height: 600px; border: 1px solid blue; display: flex; justify-content: center; align-items: center;">

        <div class="container_form">
            <h1>Editar Productos</h1>
            <form action="backend_agregar_editar.php" method="post">
                <input type="text" name="id" id="id" value="<?php echo$row['id']?>" hidden>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo$row['nombre']?>">

                <select name="categoria" id="categoria">
                    <option value="0">--</option>
                    <option value="bebestible">Bebestible</option>
                    <option value="abarrotes">Abarrotes</option>
                    <option value="lacteos">Lacteos</option>
                    <option value="licores">Licores</option>
                    <option value="cecinas">Cecinas</option>


                </select>

                <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad"
                    value="<?php echo$row['cantidad']?>">
                <input type="number" name="precio" id="precio" placeholder="Precio" value="<?php echo$row['precio']?>">

                <button type="submit" class="btn btn-outline-primary" name="editar">Modificar</button>
            </form>

        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>