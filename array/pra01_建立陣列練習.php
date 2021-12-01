<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>建立陣列練習</title>
    <link rel="stylesheet" href="./style.css">
    <style>h1{
        text-align:center;
    }
    </style>
</head>
<body>
<h1>建立陣列練習</h1>
<?php
    $name=['judy','amo','john','peter','hebe' ];
    // 寫法一:$subject=['國文','英文','數學','地理','歷史']
    // 寫法二:$name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84]
    $name['amo']=[88,78,54,81,71];
    $name['john']=[45,60,68,70,62];
    $name['peter']=[59,32,77,54,42];
    $name['hebe']=[71,62,80,62,64];
    
    echo "<pre>";
    print_r($name);
    print_r($subject);
    echo "</pre>";

    print_r($name['judy']);

    // echo <hr>;

    echo "judy的數學成績為" . $name=['judy'][2] . "分";
    //[2]意思是數學的位置在第二位
    


    ?>

</body>
</html>




