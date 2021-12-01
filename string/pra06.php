<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算距離自己下一次生日還有幾天</title>
</head>
<body>
    <h1>計算距離自己下一次生日還有幾天</h1>
    <div>我的生日7-1</div>
    <div>下次生日2022-7-1</div>

    <?php

date_default_timezone_set('Asia/Taipei');
$now=strtotime('now');
// 'now'代表現在的秒數
$nextBirthday=strtotime('2022-7-1');
$gap=($nextBirthday-$now)/86400;
echo floor($gap) . "天";
// floor() --- 無條件捨去法函式


$year=floor(floor($gap)/365);
echo $year;
echo "<br>";
$month=floor(floor(floor($gap)%365)/30);
echo $month;
echo "<br>";
$days=floor(floor($gap)%365)%30;
echo $days;

echo "<br>";
echo "我的下次生日還有" . $year . "年" . $month . "月" . $days . "日";




?>



</body>
</html>