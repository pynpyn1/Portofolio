<?php
$conn = new mysqli("127.0.0.1", "rahmad", "dlr!2026#", "memed");
if ($conn->connect_error) {
    die("MASIH GAGAL, ANJENG: " . $conn->connect_error);
}
echo "NAH TEMBUS KAN! BERARTI LARAVEL LU YANG BEGO.";
?>