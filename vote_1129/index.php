<?php include_once "./api/db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>


    </style>
</head>
<body>
<<div class="jumbotron p-0" style="overflow:hidden;height:250px">
<div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
  <div class="carousel-inner position-absolute" style="top:-250px">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="./image/01.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/03.jpg" alt="Third slide">
    </div>
  </div>
</div>
</div>    


<div class="container">
<?php

$do=(isset($_GET['do']))?$_GET['do']:'show_vote_list';
$file="./frontend/".$do.".php";
if(file_exists($file)){
//如果檔案存在,載入這檔案
    include $file;
}else{
    include "./frontend/show_vote_list.php";
}

?>
</div>

<div class="p-3 text-center text-light bg-info fixed-bottom"></div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>