<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>威力彩電腦選號沒有重覆號碼</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <h1>威力彩電腦選號沒有重覆號碼</h1>
<?php
$nums=[];
while(count($nums)<6){
    $t=rand(1,38);
    if(!in_array($t,$nums)){
        $nums[]=$t;
        
    }
    // in_array()是檢查某值是否在陣列中
    // 設一個變數$t
    // 加!是not的意思
    $i++;
    //為了計算跑了幾次迴圈
    // 用while迴圈是為了不固定次數迴圈，因為不知道會重複號碼幾遍

}

echo rand(1,38);
// 1~38之間產生亂數
print_r($nums);
echo "<pre>";
echo "迴圈次數".$i;
echo "<hr>";
foreach($nums as $num){
    //每一個nums裡的其中一個num
    echo "<div class='ball'>".$num . "</div>";
}
echo "<br>";
echo "<div class='ball'>".eand(1,8)."</div>";

?>
</body>
</html>