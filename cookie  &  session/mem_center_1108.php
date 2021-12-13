<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
歡迎
<?php
if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
}else{
    echo $_COOKIE['user'];
}

?>


</body>
</html>