<?php
require_once 'Car.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $car = new Car();
    $carData = $car->getCarById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Carro</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="list.php">Listado de Carros</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">Detalles del Carro</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $carData['brand'] . ' ' . $carData['model']; ?></h5>
                <p class="card-text">Año: <?php echo $carData['year']; ?></p>
                <p class="card-text">Precio: $<?php echo number_format($carData['price'], 2); ?></p>
                <a href="list.php" class="btn btn-primary">Volver al Listado</a>
            </div>
        </div>
    </div>
</body>
</html>
