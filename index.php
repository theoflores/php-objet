<?php

class Person {
    private $firstname;
    private $lastname;

    public function setFirstname($pFirstname){
        $this->firstname = $pFirstname;
    }
    public function setLastname($pLastname){
        $this->lastame = $pLastname;
    }
}
    
$person1 = new Person();
//$person1->firstname = "Toto";
//$person1->lastname = "Labricot";
$person1->setFirstname("Toto");
$person1->setLastname("Labricot");


var_dump($person1);

//$person2 = new Person();
//$person2->firstname = "Stefan";
//$person2->lastname = "Lelephant";
//var_dump($person2);