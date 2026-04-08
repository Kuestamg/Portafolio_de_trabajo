<?php
require 'vendor/autoload.php';
require_once 'db_connect.php'; // tu archivo de conexión a la base de datos

\Stripe\Stripe::setApiKey(apiKey: 'sk_test_51S8pCNRUcVGoxVOIoFNQvwss5JQ8dYiTqHEUWxknuBAJWg1VqKn8ybbJtWgoNxfRW8cdQjxHsj5Q3Vhpyrh4V20L00ZP5yMWt4'); // reemplaza con tu key secreta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre   = $_POST['name'];
    $email    = $_POST['email'];
    $telefono = $_POST['telefono'] ?? '';
    $monto    = $_POST['amount'];
    $mensaje  = $_POST['mensaje'] ?? '';
    $token    = $_POST['stripeToken'];

    try {
        // Crear cargo en Stripe (monto en centavos)
        $charge = \Stripe\Charge::create([
            'amount' => $monto * 100, // convertir a centavos
            'currency' => 'MXN',
            'description' => 'Donación Gente Ayudando',
            'source' => $token,
            'receipt_email' => $email
        ]);

        // Guardar en la base de datos
        $stmt = $conn->prepare("INSERT INTO donaciones (nombre_donante, email, telefono, monto, mensaje) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombre, $email, $telefono, $monto, $mensaje);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        // Redirigir o mostrar mensaje de éxito
        echo "<script>alert('¡Gracias por tu donación!'); window.location.href='donate.php';</script>";

    } catch (\Stripe\Exception\ApiErrorException $e) {
        echo "<script>alert('Error al procesar el pago: " . $e->getMessage() . "'); window.location.href='donate.php';</script>";
    }
} else {
    header("Location: donate.php");
    exit;
}
?>

