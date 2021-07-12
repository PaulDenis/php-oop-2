<?php 

require_once __DIR__ . "/User.php";

class Client extends User {
    // ATTRIBUTI/PROPRIETA'

    private $address;

    //  METODI
    
    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddres() {
        return $this->address;
    }
}
