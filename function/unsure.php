

// 不定參數(不確定長度)


// function add(...$a){
    //     print_r($a);
    
    // }
    
    
<?php

function add(...$arg){
    $sum=0;
    foreach($arg as $num){
        if(is_numeric($num)){
            $sum+=$num;    //(加總的簡寫)
        }
    }
    return $sum;
}

echo add(1,2);
echo "<hr>";
echo add(1,2,3,4);
echo "<hr>";
echo add(1,2,0,"Bob",['A','B']);
echo "<hr>";
echo add('泰山訓練場');
echo "<hr>";
echo add();
echo "<hr>";
?>