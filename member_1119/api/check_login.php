<?php
session_start();

// $account=$_POST['account'];
// $password=$_POST['password'];
// $password=md5($_POST['password']);
// 加上md5讓密碼變成編碼過的(加密)，不是明碼在資料庫
$sql="SELECT count(*) FROM `account` Where `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";
echo $sql;
// $sql="SELECT count(*) FROM `account` Where `account`='{$_POST['account']}' && `password`='{$password}'";
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$result=$pdo->query->fetchColumn();
// echo $result['account'];
// echo $result['password'];

// if($_POST['account']==$result['account'] && $_POST['password']==$result['password']){
//     echo "登入成功";
//     }else{
//         echo "帳號或密碼錯誤";
//     }

    if($result>0){

        $_SESSION['user']=$_POST['account'];
        // 問號之前是網址，問號之後是參數，用來隔開
        header("location:dashboard.php?user=".$_POST['account']);
        }else{
            header('location:../index.php?err=1');
        }

// 如果登入成功到首頁，如果失敗回到登入頁
?>