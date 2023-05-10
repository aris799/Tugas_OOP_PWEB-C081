<?php
require_once 'classproduct.php';
require_once 'classcdmusic.php';
require_once 'classcdrack.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>094 CD Store</title>
    <style>       
        table {
            width: 100%;
            max-width: 600px;
            border-collapse: collapse;
            margin: 20px auto;
            table {display:flex}
        }
        
        h1, h2{
            text-align: center;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }

    </style>
</head>

<body>
    <?php
    $cdMusic = new CDMusic("CD Music - The Script - Hall Of Fame - 2012", 398000, 0.2, "Single");
    $cdRack = new CDRack("CD Rack - The Script - #3 - 2012", 3450000, 0.0, "Album");

    echo "<h1> 094 CD Store</h1>";
    echo "<br>/<br>";
    echo "<h2>CD Music</h2>";
    echo '<table border="1">';
    echo "<tr><th>Detail</th><th>Value</th></tr>";
    echo "<tr><td>Nama</td><td>" . $cdMusic->getName() . "</td></tr>";
    echo "<tr><td>Harga</td><td>" . "Rp " . number_format($cdMusic->calculatePrice(), 2, ',', '.') . "</td></tr>";
    echo "<tr><td>Diskon</td><td>" . ($cdMusic->calculateDiscount() * 100) . "%</td></tr>";
    echo "<tr><td>Jenis</td><td>" . $cdMusic->getModel() . "</td></tr>";
    echo "<tr><td>Total Harga</td><td>" ."Rp ". number_format($cdMusic->calculateTotalPrice(), 2, ',', '.') . "</td></tr>";
    echo "</table>";

    echo "<br>/<br>";

    echo "<h2>CD Rack</h2>";
    echo '<table border="1">';
    echo "<tr><th>Detail</th><th>Value</th></tr>";
    echo "<tr><td>Nama</td><td>" . $cdRack->getName() . "</td></tr>";
    echo "<tr><td>Harga</td><td>" . "Rp " . number_format($cdRack->getPrice(), 2, ',', '.') . "</td></tr>";
    echo "<tr><td>Diskon</td><td>" . $cdRack->getDiscountR() . "</td></tr>";
    echo "<tr><td>Jenis</td><td>" . $cdRack->getModel() . "</td></tr>";
    echo "<tr><td>Total Harga</td><td>" . "Rp " . number_format($cdRack->getTotalPrice(), 2, ',', '.') . "</td></tr>";
    echo "</table>";
?>