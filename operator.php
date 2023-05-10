<!-- operasi aritmatika -->
<?php

$angka1 = 10;
$angka2 = 9;
$angkatotal = $angka1 + $angka2;
 
echo "penjumlahan = ". $angkatotal ;
echo "<br>";
?>

<?php
$angka1 = 10;
$angka2 = 9;
$angkatotal = $angka1 - $angka2;

echo "pengurangan = ". $angkatotal;
echo "<br>";
?>

<?php
$angka1 = 10;
$angka2 = 9;
$angkatotal = $angka1 * $angka2;

echo "perkalian = ". $angkatotal;
echo "<br>";
?>
<?php
$angka1 = 10;
$angka2 = 2;
$angkatotal = $angka1 / $angka2;
 
echo "pembagian = ". $angkatotal ;
echo "<br>";
?>
<?php
$angka1 = 10;
$angka2 = 9;
$angkatotal = $angka1 % $angka2;
 
echo "moduls = ". $angkatotal ;
echo "<br>";
?>
<!-- operasi increment dan dicrement -->
<?php
$x = 0;

$x++ ;

echo "increment =". $x;
echo "<br>";
?>

<?php
$x = 100;

$x-- ;

echo "dicrement =". $x;
?>

<!-- operasi pembanding -->

<?php

$a = 20;
$b = 10;

//menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

1 > 10;

$A = "21";
$B = 21;
$A === $B;

//menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";

?>