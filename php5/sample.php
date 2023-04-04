<?php

    class Company
    {
        protected $name;
        protected $address;
        protected $phoneNumber;

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setAddress($address){
            $this->address = $address;
        }

        public function getPhonenumber(){
            return $this->phoneNumber;
        }

        public function setPhoneNumber($phoneNumber){
            $this->phoneNumber = $phoneNumber;
        }

    }

    class Department extends Company
    {
        private $task;
        private $leader;

        public function getTask(){
            return $this->task;
        }

        public function setTask($task){
            $this->task = $task;
        }

        public function getLeader(){
            return $this->leader;
        }

        public function setLeader($leader){
            $this->leader = $leader;
        }

    }

    $array = [
        ['サンプルA','市ヶ谷','080-XXXX-XXXX','人事','高田'],
        ['サンプルB','池袋','090-XXXX-XXXX','総務','田中'],
        ['サンプルC','新宿','070-XXXX-XXXX','営業','高橋']];
    
    foreach($array as $value){
    $sample = new Department();
    $sample->setName($value[0]);
    $sample->setAddress($value[1]);
    $sample->setPhoneNumber($value[2]);
    $sample->setTask($value[3]);
    $sample->setLeader($value[4]);

    echo '会社名:',$sample->getName();
    echo "\n";
    echo '住所:',$sample->getAddress();
    echo "\n";
    echo '電話番号:',$sample->getPhoneNumber();
    echo "\n";
    echo '部署名:',$sample->getTask();
    echo "\n";
    echo '部長:',$sample->getLeader();
    echo "\n"."\n";
    }

?>
