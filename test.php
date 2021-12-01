<?php
$nine=[];
//要指定的值後面盡可能是固定的值，不要是運算式，否則容易出錯
for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        $nine[]="$j x $i =" . ($j*$i);
    }
}

$nine=[];
for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    // if($i%9==8){
    //     echo "<br>";
    // }
}



?>
