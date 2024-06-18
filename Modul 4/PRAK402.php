<!DOCTYPE html>
<html>
<head>
    <title>PRAK402</title>
    <style>
        table {
            width: 50%;
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
    </style>
</head>
<body>

    <?php
    $mahasiswa = [
        [
            "Nama" => "Andi",
            "NIM" => "2101001",
            "Nilai UTS" => 87,
            "Nilai UAS" => 65
        ],
        [
            "Nama" => "Budi",
            "NIM" => "2101002",
            "Nilai UTS" => 76,
            "Nilai UAS" => 79
        ],
        [
            "Nama" => "Tono",
            "NIM" => "2101003",
            "Nilai UTS" => 50,
            "Nilai UAS" => 41
        ],
        [
            "Nama" => "Jessica",
            "NIM" => "2101004",
            "Nilai UTS" => 60,
            "Nilai UAS" => 75
        ]
    ];
    function hitungNilaiAkhir($nilaiUTS, $nilaiUAS) {
        return (0.4 * $nilaiUTS) + (0.6 * $nilaiUAS);
    }
    function nilaiHuruf($nilaiAkhir) {
        if ($nilaiAkhir >= 80) {
            return "A";
        } elseif ($nilaiAkhir >= 70) {
            return "B";
        } elseif ($nilaiAkhir >= 60) {
            return "C";
        } elseif ($nilaiAkhir >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
    foreach ($mahasiswa as $index => $data) {
        $nilaiAkhir = hitungNilaiAkhir($data["Nilai UTS"], $data["Nilai UAS"]);
        $nilaiHuruf = nilaiHuruf($nilaiAkhir);
        $mahasiswa[$index]["Nilai Akhir"] = $nilaiAkhir;
        $mahasiswa[$index]["Huruf"] = $nilaiHuruf;
    }
    echo "<table>";
    echo "<tr><th>Nama</th><th>NIM</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Huruf</th></tr>";
    foreach ($mahasiswa as $data) {
        echo "<tr>";
        echo "<td>{$data['Nama']}</td>";
        echo "<td>{$data['NIM']}</td>";
        echo "<td>{$data['Nilai UTS']}</td>";
        echo "<td>{$data['Nilai UAS']}</td>";
        if (floor($data['Nilai Akhir']) == $data['Nilai Akhir']) {
            echo "<td>" . number_format($data['Nilai Akhir'], 0) . "</td>";
        } else {
            echo "<td>" . number_format($data['Nilai Akhir'], 1) . "</td>";
        }
        echo "<td>{$data['Huruf']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
