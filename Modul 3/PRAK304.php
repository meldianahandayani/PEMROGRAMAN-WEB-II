<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>
<body>
    <?php
    $star_count = isset($_POST['star_count']) ? (int)$_POST['star_count'] : 0;
    $star_image = 'star.png';
    if ($star_count > 0) {
        if (isset($_POST['tambah'])) {
            $star_count++;
        } elseif (isset($_POST['kurang'])) {
            $star_count = max(0, $star_count - 1);
        }
    }
    if ($star_count == 0) {
        echo "
        <form action='' method='POST'>
            <label for='star_count'>Jumlah Bintang:</label>
            <input type='number' id='star_count' name='star_count' min='0' required>
            <input type='submit' value='Submit'>
        </form>";
    } else {
        echo "<h2>Jumlah Bintang: $star_count</h2>";
        for ($i = 0; $i < $star_count; $i++) {
            echo "<img src='$star_image' alt='Star' width='50' height='50'> ";
        }
        echo "<br><br>";
        echo "<form action='' method='POST'>";
        echo "<input type='hidden' name='star_count' value='$star_count'>";
        echo "<input type='submit' value='Tambah' name='tambah'>";
        if ($star_count > 0) {
            echo "<input type='submit' value='Kurang' name='kurang'>";
        }
        echo "</form>";
    }
    ?>
</body>
</html>
