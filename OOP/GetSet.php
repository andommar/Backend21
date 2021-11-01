<?php
class GetSet{

    private $fullName;
    private $age;

    public function getFullName(){
        return $this->fullName;
    }
    public function getAge(){
        return $this->age;
    }

    public function setFullName($value){
        $this->fullName = trim($value);
    }
    public function setAge($value){
        $this->age = trim($value);
    }

}
$getSet = new GetSet();
$getSet->setFullName("   Kim   ");
$getSet->setAge(36);
echo "INSERT INTO names VALUES (".$getSet->getFullName().",".$getSet->getAge().")";