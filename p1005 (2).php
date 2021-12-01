<?php

/* $a=10;
$b=50;
echo '$a='.$a;
echo "<br>";
echo '$b='.$b;

echo "<hr>";
$a=10;
$b=50;


$a=$b;
$b=$a;

echo '$a='.$a;
echo "<br>";
echo '$b='.$b;
echo "<hr>";
$a="劉勤永";
$b="蔡坤炎";


$c=$a;
$a=$b;
$b=$c;

echo '$a='.$a;
echo "<br>";
echo '$b='.$b;
echo "<hr>";
echo "a&lt;a&gt;b";

 */

/* 
$score=75;

if($score>=60){
 echo "及格";
}else{
 echo "不及格";
}
 */

/* $level="B";
echo "成績等級:".$level."<br>";

switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的學習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業";

}
 */
/* $level="C";
echo "成績等級:".$level."<br>";

switch($level){
    case "A":
    case "B":
        echo "表現優良，請繼續保持";
    break;
    case "C":
        echo "需要更多的學習";
    break;
    case "D":
        echo "需要加強基本功";
    break;

}

$score=45;
$level=($score>=60)?"及格":"不及格";

echo $level; */


/* for($i=0;$i<100;$i=$i+2){
    echo $i*10;
    echo "<br>";
} */

$score=40;
$count=0;

/* while($score<60){
$score=$score+10;
$count++;
} */
/* 
do{
    $score=$score+10;
    $count++;

}while($score<60);


echo $score;
echo "<br>".$count."次"; */

$score=[60,22,72,10,80];

foreach($score as $idx => $val){
    echo '第' . $idx . '位同學的成績為' . $val . '<br>';
}

for($i=0;$i<count($score);$i++){
    echo '第' . $i . '位同學的成績為' . $score[$i] . '<br>';
}
