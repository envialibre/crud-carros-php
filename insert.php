<?php
require_once 'car.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    $car = new Car();
    if ($car->insert($brand, $model, $year, $price)) {
        echo '<script>alert("Acción exitosa: Carro agregado correctamente."); setTimeout(function(){ window.location.href = "index.php"; }, 500);</script>';
    } else {
        echo '<script>alert("Error: No se pudo agregar el carro."); setTimeout(function(){ window.location.href = "index.php"; }, 500);</script>';
    }
}
?>
