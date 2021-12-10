<?php
interface Sound{
    public function sound();
}
class Animal implements sound{
    protected $name='';
    protected $age=0;
    protected $heartbeat=0;

    public function sound(){
        return "gi";
    }

    public function getName(){
        return $this->name;
    }

    public function getHeartbeat(){
        return $this->heartbeat;
    }

    public function getName(){
        return $this->name;
    }

}

$animal=new Animal;
// 實體化的過程稱為new
echo $animal->getName();
// 透過getName()這個function來存取name
$animal->getName('Mary');
echo $animal->getName();
echo $animal->getHeartbeat();
echo "<hr>";
$dog->setName('herry');
echo $dog->getName();


$dog=new Dog;
echo $dog->getName();
echo "<br>";

?>