<?php 
class Product {
    //  ATTRIBUTI/PROPRIETA'
    
    public $name;
    public $price;
    public $description;
    public $category;

    //  COSTRUTTORE
    
    function __construct($name, $description, $category, $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }

    //  METODI
}