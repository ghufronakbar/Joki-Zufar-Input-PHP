<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zufar Jagaddhita</title>
</head>

<body>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $bilpertama = $_POST['bilpertama'];
    $bilkedua = $_POST['bilkedua'];

    echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
    echo "<p>Bilangan Pertama: " . htmlspecialchars($bilpertama) . "</p>";
    echo "<p>Bilangan Kedua: " . htmlspecialchars($bilkedua) . "</p>";
    echo "<br>";
    
    echo '<form action="index.php" method="post">';
    echo '<button type="submit">Isi Lagi</button>';
    echo '</form>';
} else {    
    ?>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>Masukkan Nama anda</td>
                <td>: <input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Masukkan Bilangan Pertama</td>
                <td>: <input type="number" name="bilpertama" required></td>
            </tr>
            <tr>
                <td>Masukkan Bilangan Kedua</td>
                <td>: <input type="number" name="bilkedua" required></td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
}
?>

</body>

</html>
