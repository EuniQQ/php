<?php
session_start();
// 如果非法登入時導回首頁
if(!isset($_SESSION['user'])){
    header("location:index.php");
    // exit()將內容都隱藏
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "./include/head.php";?>
</head>
<body>
 <?php include "./include/header.php";?>
 <?php include "./include/nav.php";?>
 <?php include "./include/side_bar.php";?>
<div class="content">
<h3>會員中心</h3>
<?=$_SESSION['user'];?>歡迎你:<br>

<?php
$dsn="mysql:host=localost;charset=utf8;dbname=memeber";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `account`, `member` WHERE `account`.`id` && `account`.`account`='{$_SESSION['user']}'";
$user=$pdo->query($sql)->fetch();


?>


個人資料:
<li>帳號:<?=$user['account'];?></li>
<li>地址:<?=$user[''];?></li>
E-mail:
生日:




</div>

 <?php include "./include/footer.php";?>
</body>
</html>
© 2021 GitHub, Inc.
Terms
