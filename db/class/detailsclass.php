<?php
class details
{
    public  $brand;
    public  $rating;
    public  $descrition;
    public  $img;
    public  $discount;

    public function __construct(
        string $brand,
        int $rating,
        string $descrition,
        string $img,
        float $discount,
    ) {
        $this->brand = $brand;
        $this->$rating = $rating;
        $this->descrition = $descrition;
        $this->img = $img;
        $this->discount = $discount;
    }
}
