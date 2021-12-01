<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間應用</title>
</head>
<body>
<h1>給定兩個日期，計算中間間隔天數</h1>
<span>開始日期:2021-10-1</span>
<span>結束日期:2021-11-3</span>
<hr>
<?php
date_default_timezone_set('Asia/Taipei');
// echo date("Y-m-d H:i:s")
// ('Asia/Taipei')指定目前位置，若沒有指定則會出現格林威治時間
// Y-m-d H:i:s = 年-月-日 時-分-秒
// date()是函式，函式的前面都不要加$

echo date("Y-m-d H:i:s",0);
// 出現的日期時間是指這個系統從甚麼時候開始算的

// echo strtotime('1970-1-1 01:00:00')
date_default_timezone_set('Asia/Taipei');
echo "開始的秒數" . strtotime('2021-10-1');
echo "結束的秒數" . strtotime('2021-11-3');

$gapDays=(strtotime('2021-11-3')-strtotime('2021-10-1'))/(24*60*60);
echo "<br>間隔" . $gapDays . "天";

echo "<hr>"


?>
</body>
</html>