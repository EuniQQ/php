<?php

/* $score=85;
$level='';
if($score>=90 && $score<=100){
    $level="A";
}else if($score>=80 && $score<=89){
    $level="B";
}else if($score>=70 && $score<=79){
    $level="C";
}else if($score>=60 && $score<=69){
    $level="D";
}else{
    $level="E";
   
}

echo $level;
 */


 //閏年判斷

/* 
 $year=2100;



 if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 !=0)){
     echo "西元".$year . "元是閏年";
 }else{
    echo "西元".$year . "元不是閏年";
 } */


?>
<style>

table{
    border-collapse:collapse;
    width:800px;

}

table td{
    border:1px solid #ccc;
    padding:10px;
}
</style>

<table>
<?php 
for($j=1;$j<=9;$j++){
    echo '<tr>';
    for($i=1;$i<=9;$i++){
        echo "<td> $j X $i =" . ($j*$i) . "</td>";
     }
    echo "</tr>";
}
?>
   
</table>
<hr>
<table>

<?php 
$range=9;

for($j=0;$j<=$range;$j++){
    echo '<tr>';
    for($i=0;$i<=$range;$i++){

        if($j==0 && $i==0){
            echo "<td style='background:#ddd'></td>";
        }else if($j==0){
            echo "<td style='background:#ddd'>$i</td>";
        }else{

            if($i==0){
                echo "<td style='background:#ddd'>" . $j . "</td>";
            }else{
                echo "<td>" . ($j*$i) . "</td>";
            }
        }
     }
    echo '</tr>';
}
?>
   
</table>
