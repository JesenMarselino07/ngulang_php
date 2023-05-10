<?php
$nama="Jesen Marselino Pakpahan";


echo "Nama saya adalah :". $nama;
echo "<br>";


function hasil(){

    global $nama;
    $hasil= $nama;
    return $hasil;
}
?>
<a href="lokal.php">lokal</a>