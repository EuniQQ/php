<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date格式化參數</title>
</head>
<body>

<h1>利用date()函式的格式化參數，完成以下的日期格式呈現
</h1>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日) </li>
</ul>

<?php
// 題目一：2021/10/05
echo date("Y/m/d");
echo "<hr>";
?>

<?php
echo date("m月j日 l");
echo "<hr>";
// l參數代表英文星期
// j參數是沒有前導0，d是有前導0的參數

?>

<?php
// 題目:2021-10-5 12:9:5
echo date("Y-m-d H:i:s");
echo "<hr>";

?>

<?php
// 題目:2021-10-5 12:09:05
echo date("Y-n-j H:i:s");
echo "<hr>";
?>

<?php
// 題目:今天是西元2021年10月5日 上班日(或假日)
$date=date("今天是西元Y年m月d日");

if(date("N")>6){
    echo $date . "假日";
 }else{
    echo $date . "上班日";
 }
echo date("Y-n-j H:i:s");

?>
</body>
</html>