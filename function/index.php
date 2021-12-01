<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<?php

add(3,5);
echo "<br>";
echo add(3,5)+10;
echo "<br>";

$result=add(3,5);
echo $result+10;
echo "<br>";
echo "result=" .$result;

function add($a,$b){
    //echo $a+$b;
    return $a+$b;
}
//如果用rreturn，結果會回到整個函式本身
// return放在中間就會中斷程式，不會繼續run下去了
?>


<p>練習：寫一個函式，可以輸入名字，然後echo "hello xxxx"</p>

<?php
$firName=張;
$lasName=QQ;
$name=($firName.$lasName);
echo "<br>";
echo "$name";
echo "<br>";
?>

<!-- <form action="#">
<label for="">First name</label>   
<p><input type="text" id="fname" name="fname" value=""></p>
<label for="">Last name</label>  
<p><input type="text" id="lname" name="lname" value=""></p>  
<input type="submit" value="submit">
</form> -->

<?php

$name='Eunice';
function hello($name){
    echo 'hello'. $name;
}

?>


















</body>
</html>