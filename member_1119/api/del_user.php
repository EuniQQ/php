<?php
session_start();

// 若使用者沒有經過alert頁，把他導回首頁
if(!(isset($_SESSION['user']) && inset($_SESSION['alert']))){
    header("location:../index.php");
    exit();
}
$dsn="mysql:host=localhost;charset=utf8;dbname=member;";
$pdo=new PDO($dsn,'root','');
$user=$pdo->query("select `id` from `account` where `account`='{$_SESSION['user']}'")->fetchColumn();
$sql_account="DELET FROM `account` where `id`='{$user_id}'";
$sql_member="DELET FROM `member` where `id`='{$user_id}'";
// 刪帳號時連會員資料/session要刪

$pdo->exec($sql_account);
$pdo->exec($sql_member);
unset($SESSION['user']);
// 刪帳號時連sessionu也刪
header("location:../index.php");




?>