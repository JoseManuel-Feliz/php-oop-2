<?php

class product
{
    public string $name;
    public string $price;
    public  string $img;
    public string $description;
    public  object $categories;

    public function __construct(string $name, int $price, string $img, string $description, Categories $categories)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->description = $description;
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

    public function GetProductPrice()
    {
        return $this->price;
    }
    public function SetProductName($name)
    {
        $this->name = $name;
    }


    public function SetProductPrice($price)
    {
        $this->price = $price;
    }
}
