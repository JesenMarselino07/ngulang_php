<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="pragos.png" alt="">
    <?php echo "<br>" ?>
</body>
</html>
<?php
include "koneksi.php";
$hapus = mysqli_query($conn,"DELETE FROM `tb_ngulang` WHERE nis='$_GET[nis]'");
if($hapus){
    echo "<a href='tampiljp.php'>Yeay Berhasil</a>";
}
?>