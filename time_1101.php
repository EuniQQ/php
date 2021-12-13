<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<body>
<h1>GET</h1>    
<form action='api/get/book/1' method='GET'>
    <input type='text' name='book' value=''>
    <input type='submit' value='送出'>
</form>




<H1>POST</H1>
<form action='api/get/book/1' method='POST'>
<input type='text' name='book' value=''>
<input type='submit' value='送出'>
</form>


<H1>FILE</H1>
<form action='api/get/book/1' method='POST' enctype='multipart/form-data'>
    <input type='text' name='book' value=''>
    <input type='submit' value='送出'>
</form>
</body>
</html>