<?php
require_once 'car.php';

$car = new Car();
$cars = $car->getAllCars();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Carros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Registro de Carros</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="list.php">Listado de Carros</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container mt-5">
        <h1 class="mb-4">Listado de Carros</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $car): ?>
                <tr>
                    <td><?php echo $car['id']; ?></td>
                    <td><?php echo $car['brand']; ?></td>
                    <td><?php echo $car['model']; ?></td>
                    <td><?php echo $car['year']; ?></td>
                    <td><?php echo $car['price']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-primary">Editar</a>
                        <a href="delete.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        <a href="view.php?id=<?php echo $car['id']; ?>" class="btn btn-sm btn-info">Ver</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
