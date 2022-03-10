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
    array_shift($tim);
    foreach($tim as $person){
        echo $person. '<br/>';
    }
?>
</body>
</html>