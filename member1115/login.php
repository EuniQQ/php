<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <?php include "./include/head.php";?>
</head>
<body>
 <?php include "./include/header.php";?>
 <?php include "./include/nav.php";?>
 
 <?php include "./include/side_bar.php";?>
<div class="content">
<form action="./api/check_login.php" method="post"></form>

<tatle id=loginForm>
<tr>
    <td colsplan='2'>會員登入</td><br>
    
</tr>
<tr>
    <td>帳號:</td>
    <td><input type="text" name="account" id=""></td><br>
</tr>
<tr>
    <td>密碼:</td>
    <td><input type="password" name="password" id=""></td><br>
</tr>
<tr>
    <td colsplan='2'>
    <input type="submit" value="登入">
    <input type="reset" value="重置">
    </td>
    <!-- 快速輸入方式:input:submit + input:reset -->

</tr>


</tatle>

</div>
 <?php include "./include/footer.php";?>
</body>
</html>