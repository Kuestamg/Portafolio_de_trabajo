<?php
require 'db_connect.php';

$name         = $_POST['name'];
$email        = $_POST['email'];
$phone        = $_POST['phone'];
$availability = $_POST['availability'];
$message      = $_POST['message'];

$sql  = "INSERT INTO voluntarios (nombre, email, telefono, disponibilidad, mensaje)
         VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $phone, $availability, $message);

if ($stmt->execute()) {
    echo "<script>
            alert('¡Gracias por registrarte como voluntario!');
            window.location.href='index.html';
          </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
