<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strtotime應用</title>
</head>
<body>
    <h1>strtotime應用</h1>
    <h3>時間的平移</h3>

    <?php
//  strtotime出來的都是秒數   
date_default_timezone_set('Asia/Taipei');

$now=strtotime("now");
echo $now;
echo "<br>";

$tomorrow=strtotime("+1 days");
echo "明天" . date("Y-m-d H:i:s",$tomorrow);
echo "<br>";

$yesterday=strtotime("-1 days");
echo "昨天" . date("Y-m-d H:i:s",$yesterday);
echo "<br>";

$nextMonth=strtotime("+1 month");
echo "下個月" . date("Y-m-d H:i:s",$tomorrow);
echo "<hr>";
?>

<h1>利用迴圈來計算連續五個周一的日期</h1>
<?php

$weekStr=['星期天','星期一','星期二','星期三','星期四','星期五','星期六'];
$base='2021-10-04';
$basetime=strtotime($base);


for($i=0,$i<5;$i++){
    $secs=strtotime("+" . ($i*7) . "days",$basetime);
    //運算式要用括號括起來
    echo date("Y-m-d",$secs)." ". $weekStr[date("w",$secs)];
    echo "<br>";
}

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";

echo "</tr>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        echo $i*7+$j+1;
        echo "</td>";
    }
}
// $i是縱軸的數,$j是橫軸的值

?>

</body>
</html>