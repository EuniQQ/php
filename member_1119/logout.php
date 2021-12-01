<?php

session_start();
unset($_SESSION['user']);
// 還原設定

header("location:index.php");





?>