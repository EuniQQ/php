<?php
include_once "db.php";

$opt_id=$_POST['opt'];
$opt=find("options",$opt_id);

$opt['count']=$opt['count']+1;
// 寫法2: $opt['count']=$opt['count']++;
// 寫法3: $opt['count']=$opt['count']+=1;


update('options',['count'=>$opt['count']],['id'=>$opt_id]);

to("../index.php?do=vote_result&id={$opt['topic_id']}");
// 使用db的function
?>