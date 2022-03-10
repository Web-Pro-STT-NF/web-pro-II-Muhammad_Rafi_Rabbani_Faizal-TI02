<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi array pop</title>
</head>
<body>
<?php 
    $tim = ["erwin","budi","ahmad","zidan"];
    array_pop($tim);
    foreach($tim as $person){
        echo $person. '<br/>';
    }
?>
</body>
</html>


<?php 
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>84,'uas'=>80,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>87,'uas'=>84,'tugas'=>69];
$ns3 = ['id'=>3,'nim'=>'01131','uts'=>90,'uas'=>75,'tugas'=>81];
$ns4 = ['id'=>4,'nim'=>'01141','uts'=>85,'uas'=>90,'tugas'=>80];

$ar_nilai = [$ns1,$ns2,$ns3,$ns4];
?>

