<?php
include "connect.php";

$nama_sensor = $_POST['nama_sensor'];
$roll = $_POST['roll'];
$pitch = $_POST['pitch'];

$sql = "INSERT INTO sensor_data (nama_sensor, roll, pitch, waktu) 
        VALUES ('$nama_sensor', '$roll', '$pitch', NOW())";

if (mysqli_query($conn, $sql)) {
    header("Location: view_data.php");
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>
