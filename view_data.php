<?php
include "connect.php";
include "navbar.php";

$result = mysqli_query($conn, "SELECT * FROM sensor_data ORDER BY waktu DESC");
?>
<div class="container">
    <h2>Data Sensor</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Sensor</th>
            <th>Roll</th>
            <th>Pitch</th>
            <th>Waktu</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_sensor']; ?></td>
            <td><?= $row['roll']; ?></td>
            <td><?= $row['pitch']; ?></td>
            <td><?= $row['waktu']; ?></td>
            <td><a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
