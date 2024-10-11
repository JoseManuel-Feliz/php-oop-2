<?php

require_once __DIR__ . "/class/categories.php";
require_once __DIR__ . "/class/products.php";
require_once __DIR__ . "/class/detailsclass.php";

/*  
TODO 
! to transform in data array
*/
//DATA
$products = [
    /* 
    TODO 
    ! ARRAY SUBCATEGORIES PRODUCTS TYPES
    */

    //DRY FOOD
    new product('Natural Trainer', 'Food', 14, new Categories('Cat')),
    new product('Purina One', 'Food', 8, new Categories('Kitten')),
    new product('Whiskas', 'Food', 5, new Categories('Kitten')),
    new product('Virtus Cat Sterilised', 'Food', 23, new Categories('Cat')),

    //WET FOOD
    new product('Felix', 'Food', 20, new Categories('Cat')),
    new product('Felix', 'Food', 7, new Categories('Kitten')),
    new product('Schesir Cat', 'Food', 5, new Categories('Cat')),
    new product('Purina Gourmet', 'Food', 16, new Categories('Cat')),

    // CAT LITTER
    new product('CatSan', 'Cat Litter', 16, new Categories('Cat')),
    new product("Biokat's", 'Cat Litter', 11, new Categories('Cat')),
    new product('Sanicat', 'Cat Litter', 11, new Categories('Cat')),
    new product('Ever Clean', 'Cat Litter', 18, new Categories('Cat')),

    //CAT TOWERS
    new product('Trixie', 'Cat Tower', 55, new Categories('Cat')),
    new product('Topeakmart', 'Cat Tower', 70, new Categories('Cat')),

    //CAT SCRATCHER
    new product('EveryYay', 'Cat Scratcher', 25, new Categories('Cat')),
    new product('Anione', 'Cat Scratcher', 13, new Categories('Cat')),

    //CAT CARRIER
    new product('Pet Around You', 'Cat Carrier', 17, new Categories('Cat')),
    new product('Sherpa', 'Cat Carrier', 75, new Categories('Cat')),

    //CAT TOYS 
    new product('Grey Mice', 'Cat Toy', 3, new Categories('Cat')),
    new product('Laser Pointer', 'Cat Toy', 5, new Categories('Cat')),
    new product('Mice Cat Teaser', 'Cat Toy', 5, new Categories('Cat')),

    //CAT BED
    new product('Cat Pad', 'Cat Pad', 10, new Categories('Cat')),
    new product('Cat Bed', 'Cat Bed', 30, new Categories('Cat')),

];

var_dump($products);
