<?php 

class User {
    //  ATTRIBUTI/PROPRIETA'

    private $name;
    private $surname;
    public $nickname;
    private $gender;    
    private $registration_id;

    //  COSTRUTTORE

    function __construct($name, $surname, $nickname, $gender) {
        $this->name = $name;
        $this->surname = $surname;
        $this->nickname = $nickname;
        $this->gender = $gender;
        $this->registration_id = $this->setRegistrationid(); //Setta il numero di registrazione unico.
    }

    //  METODI
    
    public function setRegistrationid() {
        return strtolower(substr($this->name, -2) . substr($this->surname, -2) . substr($this->nickname, 3, -2) . rand(100, 999));
        //da aggiungere controllo di unicità quando si avrà un database
    }

    public function getNickname() {
        return $this->nickname;
    }
    
    public function getFullName() {
        return $this->name . " " . $this->surname;
    }

    public function getRegistrationid() {
        return $this->registration_id;
    }
}