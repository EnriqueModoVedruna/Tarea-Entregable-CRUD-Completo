<?php
include("CRUD/connection.php");
$con = connection();

$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es un ejemplo crud">
    <meta name="keywords" content="html, css, bootstrap, js, portfolio, proyectos, php">
    <meta name="language" content="EN">
    <meta name="author" content="joaquin.borrego@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- My css -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
    <!-- My scripts -->
    <!-- <script type="text/javascript" src="js/app.js" defer></script> -->

    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>Tabla Alumnos </title>

</head>

<body>
    <div class="container d-flex justify-content-center .align-items-center gap-3">
        <?php while ($row = mysqli_fetch_array($query)): ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['nombreAlumnos'] ?></h5>
                    <h5 class="card-title"><?= $row['edad'] ?></h5>
                    <a href="updateForm/update.php?idAlumnos=<?= $row['idAlumnos'] ?>" class="btn btn-success">Editar</a>
                    <a href="CRUD/delete_project.php?idAlumnos=<?= $row['idAlumnos'] ?>" class="btn btn-danger">Borrar</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <!-- <table class="container d-flex justify-content-center .align-items-center gap-3">
        <th><P>id</P></th>
        <th><P>Nombre</P></th>
        <th><P>Edad</P></th>
        <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <td><p><?= $row['idAlumnos']?></p></td>
                <td><p><?= $row['nombreAlumnos']?></p></td>
                <td><p><?= $row['edad']?></p></td>
                
            </tr>
        <?php endwhile; ?>
    </table> -->

    <div class="container mt-5">
        <h1 class="text-center">Añadir nuevo Alumno</h1>
        <form action="CRUD/insert_project.php" method="POST">
            <div class="form-group">
                <input type="hidden" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="nombreAlumnos">Nombre</label>
                <input type="text" class="form-control" id="nombreAlumnos" name="nombreAlumnos" placeholder="Josefina">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="21">
            </div>
            <!-- <div class="form-group">
                <label for="img">Imagen</label>
                <input type="text" class="form-control" id="img" name="img" placeholder="Imagen">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
            </div>
            <div class="form-group">
                <label for="enlace">Enlace</label>
                <input type="text" class="form-control" id="enlace" name="enlace" placeholder="enlace">
            </div> -->
            <input type="submit" class="m-3 btn btn-primary" value="Añadir">
        </form>
    </div>

</body>

</html>