    <form action="../api/new_subject.php" method="post" class="col-6 m-auto">
          <label>問卷主題: <input type="text" name="subject"></label><br>
          <!-- 增加選項
          <a href="../api/add_option.php?id=<?=$subject['id']?>">
          <input class="bg-info border-info text-light rounded" type="button" value="+">
          </a> -->
          <?php
//依據選項數($_SESSION['option'])來產生選項
// if(isset($_SESSION['option'])){
//     for($i=1;$i<=$_SESSION['option'];$i++){
//         echo "<label class='list-group-item'>\n";
//         echo "選項" . $i . "\n";
//         echo "<input type='text' name='options[]' value=' ' \n";
//         echo "</label>\n";
//     }
// }
     ?>
   <div> <input type="submit" value="送出">  </div> 
     </form>






