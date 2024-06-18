<!DOCTYPE html>
<html>
<head>
    <title>PRAK401</title>
</head>
<body>
    <h1>Input Matriks</h1>
    <form method="post" action="">
        <label for="panjang">Panjang:</label>
        <input type="number" id="panjang" name="panjang" required><br><br>
        <label for="lebar">Lebar:</label>
        <input type="number" id="lebar" name="lebar" required><br><br>
        <label for="nilai">Nilai:</label><br>
        <textarea id="nilai" name="nilai" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Cetak">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = intval($_POST["panjang"]);
        $lebar = intval($_POST["lebar"]);
        $nilai = $_POST["nilai"];
        function cetakMatriks($panjang, $lebar, $nilai) {
            $nilaiArray = explode(" ", $nilai);
            if (count($nilaiArray) != $panjang * $lebar) {
                echo "Jumlah nilai yang diberikan tidak sesuai dengan ukuran matriks.";
                return;
            }
            echo "<h2>Hasil Matriks:</h2>";
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . htmlspecialchars($nilaiArray[$i * $lebar + $j]) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        cetakMatriks($panjang, $lebar, $nilai);
    }
    ?>
</body>
</html>
