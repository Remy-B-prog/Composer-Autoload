<?php 

namespace App;

class Hello {
    public string $name;
    public string $firstname;
    public string $adresse;
    public $dateOfBird;
    
    public function __construct(string $name, string $firstname, string $adresse, $dateOfBird){
        $this->setDateOfBird($dateOfBird);
        $this->name = $name;
        $this->firstname = $firstname;
        $this->adresse = $adresse;
    }

    public function getPersoninfo(){
        echo "$this->name $this->firstname $this->adresse " . $this->dateOfBird->format('d/m/Y');
    }
 
    public function setDateOfBird($dateOfBird) {
        $this->dateOfBird = \DateTime::createFromFormat('d/m/Y', $dateOfBird);
    }

    public function getDateOfBird() {
       return $this->dateOfBird;
    }
    
    public function getAge() {
        $today = new \DateTime();
        $diff = $today->diff($this->getDateOfBird());
        echo " $diff->y ans";
    }
}