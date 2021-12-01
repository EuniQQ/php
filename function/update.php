UPDATE 函式設計
1.指定資料表 $table  =>字串
2.指定更新的欄位 $column =>陣列
3.指定更新的條件 $where


<?php
function pdo($db){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');

}  

$array=['col1'=>'val1',
'col2'=>'val2',
'col3'=>'val3'];
foreach($array as $key => $value ){
   echo '迴圈執行前=> ' . $sql . '<br>';
   $sql=$sql . "`$key`='$key='$value',";
   echo '迴圈執行後=> ' . $sql . '<br>';
}

// trim()可用來去除最後一個單一符號
echo "迴圈完成後=>" . trim($sql,",");
function update($table,$column,$where){ 
     global $pdo;
     $sql="UPDATE `$table` SET `col1`='val1',`col2`='val2',`col3`='val3'
                          WHERE `col1`='val1',`col2`='val2',`col3`='val3'";
}

?>