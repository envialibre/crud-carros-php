<?php
require_once 'car.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car = new Car();
    $id = $_POST['id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    
    if ($car->update($id, $brand, $model, $year, $price)) {
        echo '<script>alert("Acción exitosa: Carro actualizado correctamente."); window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Error: No se pudo actualizar el carro."); window.location.href = "index.php";</script>';
    }
}
?>
