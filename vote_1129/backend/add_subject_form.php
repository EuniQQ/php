<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    




</head>
<body>
    <form action="api/save_subject.php" method="post" class="col-6 m-auto">
          <label>問卷主題: <input type="text" name="subject" ></label>
          <label class="list-group-item">選項一: <input type="text" name="options[]" ></label>
          <label class="list-group-item">選項二: <input type="text" name="options[]" ></label>
          <label class="list-group-item">選項三: <input type="text" name="options[]" ></label>
          <label class="list-group-item">選項四: <input type="text" name="options[]" ></label>

          <!-- 按順序傳進來時，因為name一樣，後面的內容會蓋掉前面的，最後server的post只會收到subject跟最後一個options
          所以要使用陣列。 -->

     <input type="submit" value="送出">     
     </form>







    </body>
</html>