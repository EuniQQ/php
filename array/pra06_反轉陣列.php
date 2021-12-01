<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>反轉陣列</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <h1>反轉陣列</h1>
<?php

$a=[2,4,6,1,8];
for($i=0;$i<count($a);$i++){
    
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;

}


?>
</body>
</html>