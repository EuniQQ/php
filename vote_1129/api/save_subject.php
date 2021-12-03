<!-- 儲存題目和選項 -->

<?php
include_once "db.php";

//資料表名稱欄位=>資料內容
$topic_array=['topic'=>$_POST['subject']];
insert('topics',$topic_array);  
//新增subject這張資料表，第二個參數是陣列

$topic_sql="select * from `topics` where `topic`='{$_POST['subject']}'";
$topic=$pdo->query($topic_sql)->fetch();


foreach($_POST['options'] as $opt){
    if($opt!=""){
// 如果不是空白才把檔案加進資料庫
    $opt_array=["opt"=>$opt,"topic_id"=>$topic['id']];
    insert('options',$opt_array);   //因為是迴圈，這個函式會跑四次
}

}

?>