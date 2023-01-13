<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$allPokemon = query("SELECT * FROM pokemon");

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Pokemon</title>
    <link rel="stylesheet" href="views/styles/print.css">
</head>
<body>
	<h1>Daftar Pokemon</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Tipe</th>
            <th>HitPoint</th>
            <th>Damage</th>
            <th>Deskripsi</th>
        </tr>';
        $i = 1;
        foreach ($allPokemon as $row) {
            $html .= ' <tr>
            <td>'. $i++ .'</td>
            <td><img src=src/images/pokemon/'. $row["gambar"] .' width="50"></td>
            <td>'. $row["nama"] .'</td>
            <td>'. $row["tipe"] .'</td>
            <td>'. $row["hitpoint"] .'</td>
            <td>'. $row["damage"] .'</td>
            <td>'. $row["deskripsi"] .'</td>
            </tr>';
        }

$html .= '</table>
</body>
</html>';

// Write some HTML code:
$mpdf->WriteHTML($html);
// $mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
$mpdf->Output('daftar-mahasiswa.pdf', "I");

// Output a PDF file directly to the browser
$mpdf->Output();

?>