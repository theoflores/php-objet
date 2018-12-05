<?php
class Person {
    private $firstname;
    private $lastname;
    /**
     * Création d'un setter (ou mutateur)
     *
     * @param $pFirstname
     */
    public function setFirstname($pFirstname) {
        $this->firstname = $pFirstname;
    }
    /**
     * Création d'un getter (ou accesseur)
     *
     * @return mixed
     */
    public function getFirstname() {
        return $this->firstname;
    }
    public function setLastname($pLastname) {
        $this->lastname = $pLastname;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function speak() {
        return "Hello my name is " . $this->firstname . " " . $this->lastname ;
    }
}
$person1 = new Person();
$person1->setFirstname("Toto");
$person1->setLastname("Labrico");
var_dump($person1->speak());

$person2 = new Person();
$person2->setFirstname("Stefan");
$person2->setLastname("Lelefant");
var_dump($person2->speak());
