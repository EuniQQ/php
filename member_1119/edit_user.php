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
編輯會員資料
<form action="./api/edit_user.php?user" method="post">

<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$sql="select `member` . `address`,
             `member` . `mobile`,
             `account` . `mail`,
             `member` . `birthday`
             from `account` , `member`
             where `account`.`id`=`member`.`id` &&
                   `account`.`account`='{$GET['user']}';";

?>
    <p>id:</p>
    <input type="hidden" name="adress" id="adress" value="">
    <p>編輯地址:</p>
    <input type="text" name="adress" id="adress" value="">
    <p>編輯電話:</p>
    <input type="number" name="mobile" id="mobile" value="">
    <p>編輯mail:</p>
    <input type="text" name="mail" id="mail" value="">
    <p>編輯生日:</p>
    <input type="number" name="mail" id="mail" value="">
    <input type="submit" value="確認更新">
   








</form>






</div>

 <?php include "./include/footer.php";?>
</body>
</html>
© 2021 GitHub, Inc.
Terms
Privacy
