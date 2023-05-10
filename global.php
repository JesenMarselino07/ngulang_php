<?php
$a=5;
$b=8;

echo "angka pertama :". $a;
echo "<br>";
echo "angka kedua :". $b; 

function hasil(){

    global $a;
    global $b;
    $hasil= $a+$b;
    return $hasil;
}

function perkalian(){
    global $a;
    global $b;
    $hasil=$a*$b;
    return $hasil;
}

echo "hasil dari pertambahan : ". hasil();
echo "<br>";
echo "hasil dari perkalian : ". perkalian();
echo "<hr>";
?>
<a href="lokal.php">lokal</a>