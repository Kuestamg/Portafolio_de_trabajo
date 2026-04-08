<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre   = $_POST['nombre'];
    $email    = $_POST['email'];
    $telefono = $_POST['telefono'];
    $monto    = $_POST['monto'];
    $mensaje  = $_POST['mensaje'];

    $stmt = $conn->prepare("INSERT INTO donaciones (nombre_donante, email, telefono, monto, mensaje) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssds", $nombre, $email, $telefono, $monto, $mensaje);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
