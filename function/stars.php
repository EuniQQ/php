
練習：
給定一個正整數的數值後，會印出對應行數的正三角形星星(依此類推可以設計印菱形，方形的函式)

<?php
for($i=5;$i<12;$i=$i+2){
    stars($i);
}


function stars($row){
for($j=1;$j<=$row;$j++){

    for($i=0;$i<($row-$j);$i++){
        echo "&ensp";
    }
    for($i=0;$i<(2*$j-1);$i++){
        echo "*";
    }
 echo "<br>";
}

}

echo "<hr>";






?>