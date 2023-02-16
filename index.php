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
    <div class="container" style="width: 1200px;  border: 1px solid blue; opacity: 25px;">
        <div class="titulo_container">
            <p>
            <h2>Crud creado con:</h2>
            <h4>Frontend: HTML CSS y bootstrap</h4>
            <h4>Backend: PHP y MYSQL</h4>
            </p>
        </div>
        <div>
            <div style="width: 250px;">
                <a href="/agregar_producto.php" style="text-decoration: none;">
                    <div class="btn_Agregar">
                        <span>Agregar nuevo producto</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="container_table">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th hidden scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio $</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ('backend_agregar_editar.php');

                            $resultado = mysqli_query($conexion, "SELECT * FROM productos ORDER BY id DESC ");
                            
                            while ($consulta = mysqli_fetch_array($resultado)){  
                               
                            ?>
                        <tr class="">
                            <td hidden><?php echo $consulta['id']?></td>
                            <td><?php echo $consulta['nombre']?></td>
                            <td><?php echo $consulta['categoria']?></td>
                            <td><?php echo $consulta['cantidad']?></td>
                            <td><?php echo $consulta['precio']?></td>
                            <td style="display: flex; justify-content: center; align-items: center; gap: 10px;">
                                <a style="text-decoration: none;"
                                    href="editar_producto.php?id=<?php echo $consulta['id']?>">
                                    <div class="btn_Editar">Editar</div>
                                </a>
                                <a style="text-decoration: none;"
                                    href="backend_eliminar.php?id=<?php echo $consulta['id']?>">
                                    <div class="btn_Eliminar">Eliminar</div>
                                </a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>

                    </tbody>
                </table>
            </div>


        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>