<?php
class Car {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=carros', 'carros', 'carros');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function insert($brand, $model, $year, $price) {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO cars (brand, model, year, price) VALUES (?, ?, ?, ?)');
            $stmt->execute([$brand, $model, $year, $price]);
            return true; // Indicador de éxito
        } catch (PDOException $e) {
            return false; // Indicador de error
        }
    }

    public function update($id, $brand, $model, $year, $price) {
        try {
            $stmt = $this->pdo->prepare('UPDATE cars SET brand = ?, model = ?, year = ?, price = ? WHERE id = ?');
            $stmt->execute([$brand, $model, $year, $price, $id]);
            return true; // Indicador de éxito
        } catch (PDOException $e) {
            return false; // Indicador de error
        }
    }

    public function delete($id) {
        try {
            $stmt = $this->pdo->prepare('DELETE FROM cars WHERE id = ?');
            $stmt->execute([$id]);
            return true; // Indicador de éxito
        } catch (PDOException $e) {
            return false; // Indicador de error
        }
    }

    public function getAllCars() {
        $stmt = $this->pdo->query('SELECT * FROM cars');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCarById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM cars WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
