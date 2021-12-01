<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字串與HTML、css整合應用</title>
    <style>
        .font-effect{
            font-size:30px;
            color:red
        }
    </style>
</head>
<body>
    <h1>尋找字串與HTML、css整合應用</h1>
    <h3>給定一個句子，將指定的關鍵字放大
“學會PHP網頁程式設計，薪水會加倍，工作會好找”
請將上句中的 “程式設計” 放大字型或變色.

<?php
$str='學會PHP網頁程式設計，薪水會加倍，工作會好找';
$sub='程式設計';

// 方法一：拆成兩個字串，中間插入再結合
$split=explode($sub,$str);
print_r($split);
echo $split[0].
"<span style='font-size:30px;color:red'>".
$sub . 
'</span>'. 
$split[1];

// 方法二：
$style=

?>

</h3>
</body>
</html>