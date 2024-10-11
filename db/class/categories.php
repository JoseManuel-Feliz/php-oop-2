<?php
class categories
{
    public string $species;


    public function GetCategorySpecies()
    {
        return $this->species;
    }

    public function SetCategorySpecies($species)
    {
        $this->species = $species;
    }


    public function __construct(string $species)
    {
        $this->species = $species;
    }
}