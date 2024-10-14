<?php
class categories
{
    public string $species;
    public string $icon;


    public function __construct(string $species, string $icon)
    {
        $this->species = $species;
        $this->icon = $icon;
    }
    /* public function GetCategorySpecies()
    {
        return $this->species;
    }

    public function SetCategorySpecies($species)
    {
        $this->species = $species;
    } */
}
