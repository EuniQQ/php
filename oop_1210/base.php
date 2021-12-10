<?php

class DB{
    protected $table;
    protected $dsn="mysql:host=localhost;charset=uft8;dbname=member"; //資料庫
    protected $pdo;

    public function __construct($table){
        $this->pdo=new PDO($this->dsn,'root','');
        $this->table=$table;
    }
    
        public function all(){
            $row=$this->pdo->query("select * from $this->table")->fetchAll(PDO::FETCH_ASSOC);


            return $this->table;
        }
    }

    
           //資料表
$db=new DB('members');
echo "<pre>";
print_r($db->all());
echo "</pre>";












?>