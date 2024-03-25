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
    <title>Editar Carro</title>
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
        <h1 class="mb-4">Editar Carro</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $carData['id']; ?>">
            <div class="form-group">
                <label for="brand">Marca:</label>
                <input type="text" id="brand" name="brand" class="form-control" value="<?php echo $carData['brand']; ?>" required>
            </div>
            <div class="form-group">
                <label for="model">Modelo:</label>
                <input type="text" id="model" name="model" class="form-control" value="<?php echo $carData['model']; ?>" required>
            </div>
            <div class="form-group">
                <label for="year">Año:</label>
                <input type="number" id="year" name="year" class="form-control" value="<?php echo $carData['year']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Precio:</label>
                <input type="number" step="0.01" id="price" name="price" class="form-control" value="<?php echo $carData['price']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
