<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>傳到本頁面</h1>

<div>
<form action="./login.php" method='post'></form>
</div>  


<?php 
if(!empty($_post)){
// 系統變數是一定存在的
   $acc=$_post['acc'];
   $pw=$_post['pw'];
   
   if($acc=='eunice'&& $pw=='12345'){
       echo "帳號密碼正確";
       echo "<br>";
       echo "登入失敗";
       echo "<br>";
       echo "登入成功";
   }else{
       echo "帳號或密碼錯誤";
   }
}    
    
?>

        <p>帳號:<input type="text" name="acc"></p>
        <p>密碼:<input type="password" name="pw"></p>
        <p><input type="submit" value=登入><input type="submit" value=取消></p>


</body>
</html>