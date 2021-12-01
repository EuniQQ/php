<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串取代</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>字串取代</h1>
    <h3>將”aaddw1123”改成”*********”</h3>
    <?php
   
//    方法一：str_repeat()
   $str='aaddq1123';
   echo str_repeat("*", 9);
    // echo str_repeat("字串/符號", 重複次數);
    // strlen 字串長度

    echo "<hr>";    

//    方法二：
    $str='aaddq1123';
    echo str_repeat("*", strlen($str));   

    echo "<hr>";    


    // 方法三：
        // echo str_replace(被取代的字元,取代成字元,$str)
        $str='aaddq1123';
        echo str_replace(['a','d','q','1','2','3'],'*',$str); 
        
        
        // $array=[];
        // for($i=1;$i<strlen($str));

        // echo "<hr>";

        // substr(string $string, int $offset, ?int $length = null): string
        // int前的問號代表可有可無

        $array=[];
    for($i=0;$i<strlen($str);$i++){
        /* echo $str[$i]; */
        $s=substr($str,$i,1);
        if(!in_array($s,$array)){
            $array[]=$s;
        }
    }

    echo str_replace($array,'*',$str);

?>
</body>
</html>