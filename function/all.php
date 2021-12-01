<?php
// echo "<pre>";
// print_r(all('places')); 
// // fetchAll()拿回是二微陣列，所以用print_r
// echo "</pre>";

$rows=all('daily money');

foreach($rows as $row){
    echo $row['item']."-".$row['category']."<br>";

}

// 取出指定資料表的資料
function all($table){
    $dsn="mysql:host=localhost;charset=utf8;dbname=test";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table`";
    // echo "$sql";  平常會用的debug方式
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


?>