<?php
session_start();
if(isset($_SESSION['user'])){
    header("location:mem_center.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* .form{
    background-color: rgb(199, 250, 233);
    display
} */
div{
    background-color: rgb(195, 248, 230);
    padding:10px;
}
    </style>
</head>
<body>
    <!-- <form action='login.php'  method='post'>
    <div class="form">
        <lable for="name">Username</lable>
        <input type="text" id="name" name="name" value=""><br>
        <lable for="pWord">passWord</lable>
        <input type="number" id="pWord" name="pWord" value=""><br>
        <input type="summit"  value="登入">
        <input type="summit"  value="取消">
        
    </div>
    </form> -->
<h1>使用session登入並記錄登入狀態</h1>
<div>
  <?php
if(isset($_GET['status'])&& $_GET['status']=='err'){
    echo "<span style='color:red'>帳號或密碼錯誤</span>";
}

 ?>
   
        <form action="check_login_1108.php" method='post'>
           
                <p>帳號:<input type="text" name="acc"></p>
                <p>密碼:<input type="password" name="pw"></p>
                <p><input type="submit" value=登入><input type="submit" value=取消></p>
           
        </form>
    


    </div>

</body>
</html>