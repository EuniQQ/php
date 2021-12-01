<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>找出五百年內的閏年</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <h1>找出五百年內的閏年</h1>
<?php

$year=2021;

$leaps=[];
for($i=$year;$i<=($year+500);$i++)

if($i % 400 == 0 || ($i %400 == 0 && $i % 100 !=0)){
    $leaps[]=$i;

}

}


if(in_array(2151,)
未完成...    





    echo "西元" . $i . "元是閏年";{
    
    }else{

    echo "西元" . $year . "元不是閏年";
}


$i




?>
</body>
</html>