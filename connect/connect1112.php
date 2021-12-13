<?php
// 可以跟資料庫連結的語法:
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');
// 語法： $pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');
// charset=字元集
// new是物件導向的意思

$range=(isset($_GET['id']))?$_GET['id']:20;
// 上列問號只是三元運算式子的分隔號
// 語法：var=(條件式)?真:假;

$sql="select * from students where `id`< $range";
// 「pdo php」可至官方網站搜尋
$rows=$pdo->query($sql)->fetchAll();
// fetch=取得,一次拿一筆;fetchAll=全部拿來

echo "<pre>";
// print_r($rows);
var_dump($rows);
echo "<pre>";
// print_r或_var_dump都可以

?>

<style>
table{
    border:3px double;
    border-collapse:collapse;
}

td{
    border:1px solid black;
    padding:5px 10px;
}





</style>




<table>
<tr>
    <td>學號</td>
    <td>座號</td>
    <td>姓名</td>
    <td>性別</td>
    欄位沒有性別，但是透過身分證第二碼0/1分辨是男/女
    <td>出生年月日</td>
    <td>畢業國中</td>
</tr>



<?php
// 把$rows裡面的資料放到$row這個變數裡
foreach($rows as $row){
    echo "<tr>";
    echo "<td>". $row['uni_id']    ."</td>";
    echo "<td>". $row['seat_num']  ."</td>";
    echo "<td>". $row['name']      ."</td>";
    if(mb_substr($row['national_id'],1,1)==1){
        echo "<td>男生</td>";
    }else{
        echo "<td>女生</td>";
    }
    echo "<td>". $row['birthday']  ."</td>";
    echo "<td>". $row['secondary'] ."</td>";
    echo "</tr>";
}

?>
</table>