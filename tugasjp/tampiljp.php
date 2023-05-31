<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body> 
    <h2>data-data</h2>
    <table class="table" border="1" cellpadding="10" cellspacing="0">
   <th>NIS</th>
   <th>Matematika</th>
   <th>Prod</th>  
   <th>Pipas</th>
   <th>Sejarah</th>
   <th>Agama</th>
   <th>Bindo</th>         
   
   <a class="a" href="tugasjp.php">mau ganti nilai pencet aja os</a>
   <?php
   include "koneksi.php";
   $no =1;
   $ambil = mysqli_query($conn,"SELECT * FROM tb_ngulang");
   while($data = mysqli_fetch_array($ambil)){
     
   ?>
   <tr class="tr">
    <td><?php echo $data['nis'];?></td>
    <td><?php echo $data['mtk'];?></td>
    <td><?php echo $data['prod'];?></td>
    <td><?php echo $data['pipas'];?></td>
    <td><?php echo $data['sejarah'];?></td>
    <td><?php echo $data['agama'];?></td>
    <td><?php echo $data['bindo'];?></td>
    <td>
        <a href="hapus.php?nis=<?php echo $data['nis'];?>">HAPUS</a>
        <a href=""></a> 
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>

 