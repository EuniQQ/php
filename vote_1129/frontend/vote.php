<!-- 投票頁 -->

<?php
$id=$_GET['id'];
$subject=find('topics',$id);


$options=all('options',['topic_id'=>$id]);
?>

<h1><?=$subject['topic'];?></h1>
<ol>
<form action="./api/save_vote.php" method="post">

<?php
foreach ($options as $key =>$opt) {
    echo "<li>";
    echo "<input type='radio' name='opt' value='{$opt['id']}'>";
    // name盡量取跟資料表名字一樣的,
    echo $opt['opt'];

    echo "</li>";
}

?>
</ol>
<input type="submit" value="投票">
</form>