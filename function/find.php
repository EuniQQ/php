find()-會回傳資料表指定id的資料

<?php

// function放在上/下皆可
function find($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=test";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$table` WHERE `id`='$id';";
    
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}


echo "<pre>";
print_r(find('daily money',4));
echo "</pre>";

?>