<?php
session_start();

$_SESSION['name']='eunice';

echo $_SESSION['name'];

$_SESSION['students']=['大頭','胖虎','多多'];

?>