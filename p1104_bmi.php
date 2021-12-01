<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習計算bmi</title>
</head>
<body>
    <?php

// BMI值計算公式: BMI = 體重(公斤) / 身高2(公尺2)
$bmi=round($_GET['weight']/(($_GET['height']/100)*($_GET['height']/100)),2);
echo "您的BMI值為" . $bmi;
if($bmi>=18.5 && $bmi<24){
    echo "經判定為正常";
}else{
    echo "經判定為異常";
}
?>

<a href="./p1104_bmi.html?bmi=<?=$bmi;?>">回首頁</a>
</body>
</html>