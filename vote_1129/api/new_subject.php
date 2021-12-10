<!-- 儲存題目和選項 -->

<?php
include_once "db.php";

//資料表名稱欄位=>資料內容
$topic=['topic'=>$_POST['subject']];
insert('topics',$topic);  
//新增subject這張資料表，第二個參數是陣列

to("../backend");


?>