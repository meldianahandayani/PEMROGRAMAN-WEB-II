<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="POST">
        <label for="input_string">Masukkan String:</label>
        <input type="text" id="input_string" name="input_string">
        <input type="submit" value="Cetak" name="submit"><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input_string = $_POST['input_string'];
        if (!empty($input_string)) {
            echo "<strong>Input:</strong> $input_string <br><br>";

            $output_string = '';
            $length = strlen($input_string);
            for ($i = 0; $i < $length; $i++) {
                $char = strtolower($input_string[$i]);
                for ($j = 0; $j < $length; $j++) {
                    if ($j == 0) {
                        $output_string .= strtoupper($char);
                    } else {
                        $output_string .= $char;
                    }
                }
            }
            echo "<strong>Output:</strong> $output_string";
        } else {
            echo "Masukkan string terlebih dahulu.";
        }
    }
    ?>
</body>
</html>
