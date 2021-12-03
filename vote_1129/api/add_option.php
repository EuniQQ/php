<?php include_once"db.php";?>
<?php

$subject=$_GET['id'];
insert('options',['opt'=>"",'topic_id'=>$id]);

to("../backend/?do=edit_subject&id=$id");
?>