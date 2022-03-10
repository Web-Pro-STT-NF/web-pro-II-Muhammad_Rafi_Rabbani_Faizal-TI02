<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nilai Siswa</title>
  </head>
  <body>
   
<?php 
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>84,'uas'=>80,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>87,'uas'=>84,'tugas'=>69];
$ns3 = ['id'=>3,'nim'=>'01131','uts'=>90,'uas'=>75,'tugas'=>81];
$ns4 = ['id'=>4,'nim'=>'01141','uts'=>85,'uas'=>90,'tugas'=>80];

$ar_nilai = [$ns1,$ns2,$ns3,$ns4];
?>
<br><br><br><br><br><br>
<div class="bg-info p-2 text-dark bg-opacity-50">
<h3 style="text-align: center;">Daftar Nilai Siswa</h3>
<table class="table table-success table-striped" border="1" width="100%">
 <thead>
   <tr>
    <th>No</th><th>NIM</th><th>UTS</th>
    <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
   </tr> 
</thead>
<tbody>
<?php
$nomor = 1 ; 
    foreach($ar_nilai as $ns){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$ns['nim'].'</td>';
    echo '<td>'.$ns['uts'].'</td>';
    echo '<td>'.$ns['uas'].'</td>';
    echo '<td>'.$ns['tugas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<tr/>';
$nomor++;
}
?>
</tbody> 
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>