<?php

// 接收post送過來的資料
// accoun表單的欄位
$account=$_POST['account'];
$password=$_POST['password'];
$mail=$_POST['mail'];

// member表單的欄位
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

// insert新增/插入 語法：
// 欄位(account)用上引號、值(values)用單引號
$sql_account="insert into `account`(`account`,`password`,`mail`)values('$account','$password','$mail')";
$sql_member="insert into `member`(`name`,`address`,`mobile`,`birthday`)values('$name','$address','$mobile','$birthday')";
// 前面的欄位順序跟後面value的順序須一致，可對應
// 但這裡的順序跟資料表的順序無須一樣，mysql會自動抓

// 連線資料庫：
$dsn="mysql:host=localhost;charset=utf8;dbname=member";

// 建立pdo的物件(PDO在PHP裡是綠色)
// 寫法：PDO($dsn,帳號,密碼);第四個參數可放可不放
$pdo=new PDO($dsn,'root','');


$pdo->exec($sql_account);
$pdo->exec($sql_member);

// echo下面兩個變數得到的內容
// echo $sql_account;
// echo "<hr>";
// echo $sql_member;
// echo "<hr>";
// // echo下面兩個函式，可得知新增成功會失敗(會得到影響筆數1或0)
// echo $pdo->exec($sql_account);
// echo "<hr>";
// echo $pdo->exec($sql_member);
// 將上列程式註解掉，因為使用者不需看見


// 註冊後導回首頁
header("location:../index.php");
// 將使用者從reg.php導到api裡的reg.php，再導回上一層的index.php(所以路徑要加../)


?>