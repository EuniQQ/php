<?php


echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "****<br>";
echo "*****<br>";
echo "******<br>";

for($i=0;$i<6;$i++){

    echo "*<br>";
}


for($j=1;$j<=10;$j++){
    for($i=0;$i<$j;$i++){
        echo "*";
    }
 echo "<br>";
}


echo "<br>";

//echo "手打的******<br>";

/* 起始值=> $i=0;
條件 => 星星數 $i<星星數(1~6)
遞增值=> $i=$i+1; */
/*
起始值:$a = 6 
條件: $a>0  $a>=1
遞增值:$a=$a-1
*/
?>



<h2>倒三角形</h2>
<hr>
<?php
for($a = 8 ; $a>0 ;$a=$a-1){

    for($i=0;$i<$a;$i++){

        echo "*";

    }
    echo "<br>";
}
?>

<br>


<h2>手打正三角形</h2>
<?php
echo "";
echo "<hr>";
echo "&ensp;&ensp;&ensp;&ensp;*<br>";
echo "&ensp;&ensp;&ensp;***<br>";
echo "&ensp;&ensp;*****<br>";
echo "&ensp;*******<br>";
echo "*********<br>";
?>

<br>


<h2>正三角形</h2>
<hr>
<?php
$row=5;
for($j=1;$j<=$row;$j++){
    $fontsize=30-$j*2;
    for($i=0;$i<($row-$j);$i++){
        echo "<span style='color:red;font-size:{$fontsize}px'>&ensp;</span>";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "<span style='color:blue;font-size:{$fontsize}px'>*</span>";
    }
    echo "<br>";
}
?>


<br>


<h2>變形的三角形</h2>
<hr>
<?php
$row=5;
for($j=1;$j<=$row;$j++){
    $fontsize=30-$j*2;
    for($i=0;$i<($row-$j);$i++){
        echo "<span style='color:red;font-size:{$fontsize}px'>&ensp;</span>";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "<span style='color:blue;font-size:{$fontsize}px'>*</span>";
    }
    echo "<br>";
}
?>

<br>


<h2>菱形</h2>
<hr>
<?php
$row=8;

if($row%2 == 0){
     $row=$row+1;
 }

for($i=1;$i<=$row;$i++){

    $mid=($row+1)/2;

    if($i<=$mid){
        $stars=2*$i-1;
        $space=$mid-$i;
    }else{
        $stars=($row-$i)*2+1;
        $space=($mid-1)-($row-$i);
    }

    for($k=1;$k<=$space;$k++){

        echo "&ensp;";
    }
    for($j=1;$j<=$stars;$j++){
        echo "*";
    }

    echo "<br>";
}



?>

<h2>矩形</h2>
<hr>
<?php

$row=6;
for($i=1;$i<=$row;$i=$i+1){
    for($j=1;$j<=$row;$j++){
        if($i==1 || $i==$row){
                echo "*";
        }else{
            if($j==1 || $j==$row){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
 }
 echo "<br>";
}


?>
<h2>矩形對角線</h2>
<hr>
<?php

$row=7;
for($i=1;$i<=$row;$i=$i+1){
    for($j=1;$j<=$row;$j++){
        if($i==1 || $i==$row){
                echo "*";
        }else{
            if($j==1 || $j==$row || $j==$i || $j==$row+1-$i){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }
 }
 echo "<br>";
}


?>