<?php
require_once 'car.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $car = new Car();
    $id = $_GET['id'];
    
    if ($car->delete($id)) {
        echo '<script>alert("Acción exitosa: Carro eliminado correctamente."); setTimeout(function(){ window.location.href = "list.php"; }, 500);</script>';
    } else {
        echo '<script>alert("Error: No se pudo eliminar el carro."); setTimeout(function(){ window.location.href = "list.php"; }, 500);</script>';
    }
    
}
?>