<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>利用程式產生陣列</title>
    <link rel="stylesheet" href="./style.css">
    <style>
    </style>
</head>
<body>
    <h1>利用程式產生陣列</h1>
<?php
$nine=[];
//要指定的值後面盡可能是固定的值，不要是運算式，否則容易出錯
for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        $nine[]="$j x $i =" . ($j*$i);
    }
}

// echo"<pre>";
// print_r($nine);
// echo"</pre>";


//斷行方式一：
for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if($i%9==8){
        echo "<br>";
    }
}


//斷行方式二：
for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if(($i+1)%9==0){
        echo "<br>";
    }
}






?>
</body>
</html>