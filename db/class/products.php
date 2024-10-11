<?php

class product
{
    public $name;
    public $type;
    public $price;
    //public $details;
    public  object $categories;

    public function __construct(string $name, string $type, int $price, Categories $categories, /* Details $details */)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        //$this->details = $details;
        $this->categories = $categories;
        /* 

// CONTROLLO SE CI SONO TUTTI I DATI INSERITI
        foreach ($this->categories as $category) {
            if (!$category instanceof Categories) {
                die("ERROR: Invalid Category Data");
            }
        } */
    }

    public function GetProductName()
    {
        return $this->name;
    }
    public function GetProductType()
    {
        return $this->type;
    }
    public function GetProductPrice()
    {
        return $this->price;
    }
    public function SetProductName($name)
    {
        $this->name = $name;
    }
    public function SetProductType($type)
    {
        $this->type = $type;
    }
    public function SetProductPrice($price)
    {
        $this->price = $price;
    }
}