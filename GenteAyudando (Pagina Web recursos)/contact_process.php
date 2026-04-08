<?php
require 'db_connect.php';

$name    = $conn->real_escape_string($_POST['name'] ?? '');
$email   = $conn->real_escape_string($_POST['email'] ?? '');
$subject = $conn->real_escape_string($_POST['subject'] ?? '');
$message = $conn->real_escape_string($_POST['message'] ?? '');

// --- Insertar en la tabla contactos ---
$sql  = "INSERT INTO contactos (nombre, email, asunto, mensaje) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    echo "<script>
            alert('¡Gracias por contactarnos! Pronto te responderemos.');
            window.location.href='index.html';
          </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>