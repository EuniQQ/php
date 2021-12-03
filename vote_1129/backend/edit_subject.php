<!-- 編輯 -->
<?php

$subject=find('topics',$_GET['id']);
$options=all('options',['topic_id'=>$_GET['id']]);



?>

<form action="../api/edit_subject.php" method="post" class="col-6 m-auto">
          <label>問卷主題: <input type="text" name="topic" value='<?=$subject['topic'];?>' ></label>
          <input type="hidden" name="topic_id" value="<?=$subject['id'];?>">
          <!-- <button type="button">+</button> -->
          <!-- 若button在表單裡，他會預設是送出表單的功能,除非加上type="button" -->
          <a href="../api/add_option.php?id=$subject['id']"></a><input class="bg-info border-info text-light rounded" type="button" value="+">
          
<?php
foreach($options as $key => $opt){
    echo "<label class='list-group-item'>\n";  
    // \n代表原始碼的斷行，前端不變
    echo "選項" . ($key+1);
    echo "<input type='text' name='options[]' value='{$opt['opt']}'>";
    echo "<input type='hidden' name='opt_id[]' value='{$opt['id']}'>";
    echo "</label>";
}

// 如果選項不足四個自動補齊
if(count($options)<=4){
  for($i=0;$i<(4-count($options));$i++){
      echo "<label class='list-group-item'>";
      echo   "選項" . (count($options)+1+$i);
      echo   "<input type='text' name='options[]' value=''>";
      echo "</label>";            
  }
}

?>
<input type="submit" value="送出">
</form>