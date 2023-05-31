<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <form action="" method="post">
</head>
<body>
    <center>
    <h3>Matematika</h3>
    <input type="text" name="mtk" >

    <h3>NIS</h3>
    <input type="text" name="nis" >

    <h3>Prod</h3>
    <input type="text" name="prod" >

    <h3>Pipas</h3>
    <input type="text" name="pipas" >

    <h3>Sejarah</h3>
    <input type="text" name="sejarah" >

    <h3>Agama</h3>
    <input type="text" name="agama" >

    <h3>B.indo</h3>
    <input type="text" name="bindo" >
    <?php echo "<br>";?>
    <?php echo "<br>";?>
    <input type="submit" name="submit" >
    <hr>
    </center>
</body>
</html>

<?php
    if(isset($_POST['submit'])){

    
    include "koneksi.php";
    $nis =$_POST['nis'];
    $mtk =$_POST['mtk']; 
    $prod =$_POST['prod'];
    $pipas =$_POST['pipas'];
    $sejarah =$_POST['sejarah'];
    $agama =$_POST['agama'];
    $bindo = $_POST['bindo'];
    $sql = "INSERT INTO `tb_ngulang`(`nis`,`mtk`, `prod`, `pipas`, `sejarah`, `agama`, `bindo`) VALUES ('$_POST[nis]','$_POST[mtk]','$_POST[prod]','$_POST[pipas]','$_POST[sejarah]','$_POST[agama]','$_POST[bindo]')";
    $apakah = mysqli_query($conn,$sql);
    if($apakah){
        echo "berhasil ditambahkan";
        
    }else{
        "gagal";
       exit;
    }
    
    $data = array ($mtk,$prod,$pipas,$sejarah,$agama,$bindo); 
    //total semua
    $totalsemua = $mtk+$prod+$pipas+$sejarah+$agama+$bindo;
    echo "jumlah total angka :".$totalsemua;
    echo "<br>";
    //rata-rata
    $total1 = array_sum($data);
    $jumlah_data = count($data);

    $rata_rata = $total1 / $jumlah_data;
    echo "jumlah rata rata :" . $rata_rata;
    echo "<br>";
    //maksimal
    $maksimum = max($data);
    echo "Nilai maksimum :".$maksimum;
    echo "<br>";
    //minimum
    $minimum = min($data);
    echo "Nilai minimum :".$minimum;
    echo "<br>";
    //grade penilain
    if($totalsemua >= 540){
        echo "A";
    }elseif($totalsemua>=480){
        echo "B";
    }elseif($totalsemua>=420){
        echo "C";
    }else{
        echo "D";
    }
    echo "<br>";
}
?>
<html><a class = "a" href="tampiljp.php">tampil</a></html>
</form>

