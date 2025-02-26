<?php

$siswalist = [
    ["nama" => "hayato", "nilai" => 60],
    ["nama" => "kelly", "nilai" => 56],
    ["nama" => "hayabusah", "nilai" => 80],
    ["nama" => "minion", "nilai" => 90],
    ["nama" => "jamshoot", "nilai" => 60],
];

// echo "<h2>Daftar Nilai Siswa</h2>";
// echo "<table border= '1' cellpadding= '5' cellspacing='0'>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Siswa</h3>
    <table border = "1px solid black" style = "border-collapse : collapse">
        <tr>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Status</th>
        </td>
        <?php
        foreach ($siswalist as $s) {
            echo "<tr>";
            echo "<td> {$s ["nama"]}</td>";
            echo "<td> {$s ["nilai"]}</td>";
            if ($s["nilai"] >=70) {
                $status = '<span style = "color : green" >Lulus</span>';
            
            } elseif ($s["nilai"] >= 45) {
                $status = '<span style = "color : orange" >Remedial</span>';
            } elseif ($s["nilai"] >= 0) {
                $status = '<span style = "color : red" >tidak lulus</span>';
            }  else {
                $status = '<span style = "color : black" >Good</span>';
            } 
                
            echo "<td>{$status}</td>";
            echo "</tr>";

        };
        ?>
    </table>
</body>
</html>