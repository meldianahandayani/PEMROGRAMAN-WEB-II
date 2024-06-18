<!DOCTYPE html>
<html>
<head>
    <title>PRAK403</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .no-border {
            border-top: 0;
        }
        .revisi {
            background-color: #cc0000;
        }
        .tidak-revisi {
            background-color: #006600;
        }
    </style>
</head>
<body>
    <?php
    $mahasiswa = [
        [
            "No" => 1,
            "Nama" => "Ridho",
            "Mata Kuliah" => [
                ["Nama" => "Pemrograman I", "SKS" => 2],
                ["Nama" => "Praktikum Pemrograman I", "SKS" => 1],
                ["Nama" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2],
                ["Nama" => "Arsitektur Komputer", "SKS" => 3]
            ]
        ],
        [
            "No" => 2,
            "Nama" => "Ratna",
            "Mata Kuliah" => [
                ["Nama" => "Basis Data I", "SKS" => 2],
                ["Nama" => "Praktikum Basis Data I", "SKS" => 1],
                ["Nama" => "Kalkulus", "SKS" => 3]
            ]
        ],
        [
            "No" => 3,
            "Nama" => "Tono",
            "Mata Kuliah" => [
                ["Nama" => "Rekayasa Perangkat Lunak", "SKS" => 3],
                ["Nama" => "Analisis dan Perancangan Sistem", "SKS" => 3],
                ["Nama" => "Komputasi Awan", "SKS" => 3],
                ["Nama" => "Kecerdasan Bisnis", "SKS" => 3]
            ]
        ]
    ];
    foreach ($mahasiswa as $index => $data) {
        $totalSKS = 0;
        foreach ($data["Mata Kuliah"] as $mataKuliah) {
            $totalSKS += $mataKuliah["SKS"];
        }
        $mahasiswa[$index]["Total SKS"] = $totalSKS;
        $mahasiswa[$index]["Keterangan"] = ($totalSKS < 7) ? "Revisi KRS" : "Tidak Revisi";
    }
    echo "<table>";
    echo "<tr><th>No</th><th>Nama</th><th>Mata Kuliah diambil</th><th>SKS</th><th>Total SKS</th><th>Keterangan</th></tr>";
    foreach ($mahasiswa as $data) {
        $rowSpan = count($data["Mata Kuliah"]);
        $keteranganClass = $data['Keterangan'] == "Revisi KRS" ? "revisi" : "tidak-revisi";
        echo "<tr>";
        echo "<td>{$data['No']}</td>";
        echo "<td>{$data['Nama']}</td>";
        echo "<td>{$data['Mata Kuliah'][0]['Nama']}</td>";
        echo "<td>{$data['Mata Kuliah'][0]['SKS']}</td>";
        echo "<td>{$data['Total SKS']}</td>";
        echo "<td class='{$keteranganClass}'>{$data['Keterangan']}</td>";
        echo "</tr>";
        
        for ($i = 1; $i < $rowSpan; $i++) {
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>{$data['Mata Kuliah'][$i]['Nama']}</td>";
            echo "<td>{$data['Mata Kuliah'][$i]['SKS']}</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</body>
</html>
