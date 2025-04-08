<?php include "navbar.php"; ?>
<div class="container">
    <h2>Tambah Data Sensor</h2>
    <form action="upload.php" method="POST">
        <label>Nama Sensor:</label><br>
        <input type="text" name="nama_sensor" required><br>
        <label>Nilai Roll:</label><br>
        <input type="number" step="any" name="roll" required><br>
        <label>Nilai Pitch:</label><br>
        <input type="number" step="any" name="pitch" required><br>
        <input type="submit" value="Kirim Data">
    </form>
</div>
</body>
</html>
