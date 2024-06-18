<html>
<head>
    <title>Daftar Smarthphone Samsung</title>
    <style>
        .kotak-besar {
            border: 1px solid black;
            padding: 10px;
            width: 400px;
            margin: 20px auto;
            display: flex; 
            flex-direction: column; 
            align-items: center; 
        }
        .kotak-kecil {
            border: 1px solid black;
            padding: 1px;
            margin: 1px;
            text-align: center;
            width: 400px; 
        }
        .kotak-kecil-utama {
            background-color: red;
            font-size: 20px; 
            border: 1px solid black;
            padding: 1px;
            margin: 1px;
            text-align: center;
            max-width: 400px;
            height: 50px
        }
    </style>
</head>
<body>
    <div class="kotak-besar">
        <?php
        $daftar_smartphone = array(
            "<b>Daftar Smarthphone Samsung</b>",
            "Samsung Galaxy S22",
            "Samsung Galaxy S22+",
            "Samsung Galaxy A03",
            "Samsung Galaxy Xcover 5"
        );
        foreach ($daftar_smartphone as $index => $smartphone) {
            if ($index == 0) {
                echo "<div class='kotak-kecil kotak-kecil-utama'>$smartphone</div>";
            } else {
                echo "<div class='kotak-kecil'>$smartphone</div>";
            }
        }
        ?>
    </div>
</body>
</html>
