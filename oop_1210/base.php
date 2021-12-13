<?php


class DB{
    protected $table;
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    protected $pdo;

    public function __construct($table){
        $this->pdo=new PDO($this->dsn,'root','');
        $this->table=$table;
    }


    public function all(...$arg){
        $sql="SELECT * FROM $this->table ";

        //依參數數量來決定進行的動作因此使用switch...case
        switch(count($arg)){
            case 1:
        
                //判斷參數是否為陣列
                if(is_array($arg[0])){
        
                    //使用迴圈來建立條件語句的字串型式，並暫存在陣列中
                    foreach($arg[0] as $key => $value){
        
                        $tmp[]="`$key`='$value'";
        
                    }
        
                    //使用implode()來轉換陣列為字串並和原本的$sql字串再結合
                    $sql.=" WHERE ". implode(" AND " ,$tmp);
                }else{
                    
                    //如果參數不是陣列，那應該是SQL語句字串，因此直接接在原本的$sql字串之後即可
                    $sql.=$arg[0];
                }
            break;
            case 2:
        
                //第一個參數必須為陣列，使用迴圈來建立條件語句的陣列
                foreach($arg[0] as $key => $value){
        
                    $tmp[]="`$key`='$value'";
        
                }
        
                //將條件語句的陣列使用implode()來轉成字串，最後再接上第二個參數(必須為字串)
                $sql.=" WHERE ". implode(" AND " ,$tmp) . $arg[1];
            break;
        
            //執行連線資料庫查詢並回傳sql語句執行的結果
            }
        
            //fetchAll()加上常數參數FETCH_ASSOC是為了讓取回的資料陣列中
            //只有欄位名稱,而沒有數字的索引值
           // echo $sql;
            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        
        
    }





//只取一筆
public function find($id){
    $sql="SELECT * FROM $this->table WHERE ";
    if(is_array($id)){

        foreach($id as $key => $value){
            //$tmp=條件句
            $tmp[]="`$key`='$value'";

        }

$sql .= implode('AND ',$tmp);

    }else{
        //縮寫寫法: 
        $sql.="id = '$id' ";
        //原始寫法: $sql = $sql."id = '$id' ";
    }



    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

//計算某個欄位或是計算符合條件的筆數
//max,min,sum,count,avg

//聚合函式寫法
public function math($math,$col,...$arg){
    $sql="SELECT $math($col) FROM $this->table ";

    //依參數數量來決定進行的動作因此使用switch...case
    switch(count($arg)){
        case 1:
    
            if(is_array($arg[0])){
    
                foreach($arg[0] as $key => $value){
    
                    $tmp[]="`$key`='$value'";
    
                }
    
                $sql.=" WHERE ". implode(" AND " ,$tmp);
            }else{
                
                $sql.=$arg[0];
            }
        break;
        case 2:
    
            foreach($arg[0] as $key => $value){
    
                $tmp[]="`$key`='$value'";
    
            }
    
            $sql.=" WHERE ". implode(" AND " ,$tmp) . $arg[1];
        break;
    
        }
    
        
        echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    
    
}


//新增或更新資料,僅限一次一筆資料
public function save($array){
    //一定要是array才能run
    if(isset($array['id'])){
        //update
        foreach($array as $key => $value){

            if($key!='id'){
            $tmp[]="`$key`='$value'";
        }
    }
        $sql="UPDATE $this ->table SET " .implode(" , ",$tmp);
        $sql.=" WHERE `id`={$array['id']}";

    }else{
        //insert
        //['col1'=>'value1','col2'=>'value2','col3'=>'value3',];

        // 寫法一:
        // $keys=array_keys($array);

        // $cols=implode("`,`",$keys);
        // $values=implode("','",$array);

        //寫法二:
        $sql="INSERT INTO $this->table (`".implode("`,`",array_keys($array))."`) 
                                 VALUES('".implode("','",$array)."')";   
        echo $sql;
    }

   
    return $this->pdo->exec($sql);
}





//刪除資料
public function del($id){
    $sql="SELECT * FROM $this->table WHERE ";
    if(is_array($id)){

        foreach($id as $key => $value){
            //$tmp=條件句
            $tmp[]="`$key`='$value'";

        }

$sql .= implode('AND ',$tmp);

    }else{
        $sql.="id = '$id' ";
    }
        
        //echo $sql;
        return $this->pdo->exec($sql);
        //只須回傳這次影響的資料筆數(0-沒有成功刪除/1-順利刪除/1以上...)
    
    
}




//萬用的查詢
public function q($sql){
    
    return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

}





$students=new DB('students');
echo "<pre>";
// print_r($students->find(['name'=>'孫雲婷']));
print_r($students->math('count','*',['name'=>'孫雲婷']));
echo "</pre>"; 
echo "<pre>";
// print_r($students->all(['name'=>'孫雲婷']));
print_r($students->math('sum','id',['name'=>'孫雲婷']));
echo "</pre>"; 
echo "<pre>";
print_r($students->math('min','id',['name'=>'孫雲婷']));
echo "</pre>";
echo "<pre>";
print_r($students->del(2));   //刪除第二筆
echo "</pre>";
print_r($students->q("seclect * from `students` where `seat_num`='10101'"));
echo "<pre>";
print_r($students->save(['id'=>7,'seat_num'=10107]));   //刪除第二筆
echo "</pre>";


/* $db=new DB('journal');
echo "<pre>";
print_r($db->all(['item'=>'早餐']," ORDER by `money` desc"));
echo "</pre>";
echo "<pre>";
print_r($db->all());
echo "</pre>"; */







?>