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
            echo "<div class='kotak-kecil'>$smartphone</div>";
        }
        ?>
    </div>
</body>
</html>