<?php
// 遠端
$sdn="mysql:host=localhost;charset=utf8;dbname=s1100421";
$pdo=new PDO($sdn,'s1100421','s1100421');
// 本地端
$sdn="mysql:host=localhost;charset=utf8;dbname=s1100421";
$pdo=new PDO($sdn,'s1100421','s1100421');

$sql="SELECT * FROM `TEST` WHERE `id` ='1'";
$user=$pdo->query($sql)->fetch();

echo "<pre>";
print_r($user);
echo "</pre>";






?>