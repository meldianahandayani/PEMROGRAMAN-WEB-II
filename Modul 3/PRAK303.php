<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah: <input type="number" name="Batas_Bawah"><br>
        Batas Atas: <input type="number" name="Batas_Atas"><br>
        <input type="submit" value="cetak" name="cetak"><br><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['cetak'])) {
    $batas_bawah = isset($_POST['Batas_Bawah']) ? (int)$_POST['Batas_Bawah'] : 0;
    $batas_atas = isset($_POST['Batas_Atas']) ? (int)$_POST['Batas_Atas'] : 100;
    function is_multiple_of_5($num) {
        return ($num + 7) % 5 == 0;
    }
    $star_image = 'star.png';
    $current_num = $batas_bawah;
    do {
        if (is_multiple_of_5($current_num)) {
            echo "<img src='$star_image' alt='Star' width='20' height='20'> "; 
        } else {
            echo $current_num . " ";
        }
        $current_num++;
    } while ($current_num <= $batas_atas);
}
?>
