<?php
session_start();
$acc='eunice';
$pw='1234';

if($acc==$_POST['acc'] && $pw==$_POST['pw']){
    // setcookie('user',$_POST['acc'],time()+3600);
    $_SESSION['user']=$_POST['acc'];
    header("location:mem_ceter.php");

}else{
    header("location:index.php?status=err");
    // 若是登入失敗的訊息
}





?>