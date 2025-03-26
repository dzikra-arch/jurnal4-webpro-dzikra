<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_bioskop");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data film dari database
$sql = "SELECT * FROM film";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul Film</th>
            <th>Sutradara</th>
            <th>Tahun Rilis</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row["id_film"]; ?></td>
            <td><?= $row["judul"]; ?></td>
            <td><?= $row["sutradara"]; ?></td>
            <td><?= $row["tahun_rilis"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
// Tutup koneksi
mysqli_close($conn);
?>