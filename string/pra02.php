<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串分割/組合</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>字串分割</h1>
    <h3>將”this,is,a,book”依”,”切割後成為陣列</h3>
    <?php
   
   $str='this,is,a,book';
   $array=explode(',',$str);
   echo "<pro>";
   print_r($array);
   echo "</pro>";
   $file="photo.jpg";

   echo "<hr>";
//    拆解字串2:

$file="photo.jpg";
$split=explode(".",$file);
print_r($split);
if($split[1]=='jpg' || $split[1]=='gif'  || $split[1]=='png'){
    echo "是圖檔";
    // split=切開
}
echo "<hr>";

//    拆解字串3:
$newFileName='20211025'.rand(10000,9999).".".$split[1];
echo"新檔名為:".$newFileName;

echo "<hr>";
?>

<h1>字串組合</h1>
<h3>將”this,is,a,book”重新組合成“this is a book”</h3>

<?php
// $str='this,is,a,book';
echo implode(" ".$array);
echo "<hr>";
echo join(" ".$array);


?>

</body>
</html>