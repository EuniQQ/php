<?php

// $account=$_POST['account'];
// $password=$_POST['password']; 
// 因為下面寫法，上面兩行可省略

// 錯誤寫法：
// $sql="SELECT count(*) FROM `account` Where `account`='$_POST['account']' && `password`='$_POST['password']'";

// 正確寫法：
$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";
// 只有陣列可以這樣寫：加大括號把每一組隔開，以免系統因為單引號錯亂
// echo $sql;




$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');


// $result=$pdo->query->fetch();   //fetch()一次只拿一筆資料，而且得到是陣列
$result=$pdo->query($sql)->fetchColumn();     
//此函式執行sql語句，並返回該筆資料中指定欄位的資料，$n為欄位的索引值(0,1,2…)


// echo $result['account'];     //將得到他輸入的帳號
// echo $result['password'];    //將得到他的密碼
// (其實若要比對帳號密碼是否正確，只要知道sql語句執行成功/失敗即可，不需要把資料撈回來)


// if($_POST['account']==$result['account'] && $_POST['password']==$result['password']){
//     echo "登入成功";
//     }else{
//         echo "帳號或密碼錯誤";
//     }
// (以上程式等於比對了兩次，是多餘的步驟，浪費cpu)


    if($result>0){
        header('location:../dashborard.php');   //header()前面不要有任何echo
        }else{
            header('location:../index.php?err=1');
        }   // 如果登入成功到會員中心，如果失敗回到首頁
?>