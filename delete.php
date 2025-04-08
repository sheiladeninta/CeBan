<?php
include "connect.php";
$id = $_GET['id'];

$sql = "DELETE FROM sensor_data WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: view_data.php");
} else {
    echo "Gagal hapus data: " . mysqli_error($conn);
}
?>
