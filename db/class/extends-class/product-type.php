<?php
class Type extends Product
{
    public string $brand;
    //public  $rating;
    public string $type;
    public  string $subtype;

    //public  $discount;

    public function __construct(
        //int $rating,
        //float $discount,
        string $name,
        int $price,
        string $img,
        string $description,
        Categories $categories,
        string $brand,
        string $type,
        string $subtype,
    ) {
        //$this->$rating = $rating;
        //$this->discount = $discount;
        parent::__construct(
            $name,
            $price,
            $img,
            $description,
            $categories
        );
        $this->brand = $brand;
        $this->type = $type;
        $this->subtype = $subtype;
    }
}