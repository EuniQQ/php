<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            padding:5px;
            border:1px solid black;
            text-align:center;
        }

        td{
            width:500px;
            margin:auto;
            padding:20px;
            border:1px solid black;

        }
    </style>
</head>
<body>
    只要xy的表格，幾乎都是用巢狀迴圈
    <?php

for($i=0;$i<7;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td></td>"

    }
}
echo "</tabble>";

?>
</body>
</html>