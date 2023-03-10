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
            <div class="titulo_form">
                <h1>Agregar Productos</h1>
            </div>

            <form action="backend_agregar_editar.php" method="post">

                <input type="text" name="nombre" id="nombre" placeholder="Nombre" autocomplete="off">

                <select name="categoria" id="categoria">
                    <option value="0">--</option>
                    <option value="bebestible">Bebestible</option>
                    <option value="abarrotes">Abarrotes</option>
                    <option value="lacteos">Lacteos</option>
                    <option value="licores">Licores</option>
                    <option value="cecinas">Cecinas</option>



                </select>

                <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad">
                <input type="number" name="precio" id="precio" placeholder="Precio">

                <button type="submit" class="boton_agregar" name="agregar">Agregar</button>
            </form>

        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>