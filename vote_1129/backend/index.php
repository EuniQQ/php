<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷系統</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>建立問卷頁面</title>
    <style>


    </style>
</head>
<body>
<div class="jumbotron p-0" style="overflow:hidden;height:250px">
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

$do=(isset($_GET['do']))?$_GET['do']:'manage_vote';
$file=$do.".php";
if(file_exists($file)){
    include $file;
}else{
    include "manage_vote.php";
}
?>
</div> 
<div class="p-3 text-center text-light bg-primary fixed-bottom">mack版權所有、歡迎盜用</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>