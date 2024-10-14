<?php

require_once __DIR__ . "/class/categories.php";
require_once __DIR__ . "/class/products.php";
require_once __DIR__ . "/class/extends-class/product-type.php";

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
    new Type('Natural Trainer', 14, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), 'Natural Trainer', 'Food', 'Dry Food'),
    new Type('Purina One', 8, 'img goes here', '', new Categories('Kitten', 'cat-icon.png'), '', '', ''),
    new Type('Whiskas', 5, 'img goes here', '', new Categories('Kitten', 'cat-icon.png'), '', '', ''),
    new Type('Virtus Cat Sterilised', 23, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

    //WET FOOD
    new Type('Felix', 20, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Felix', 7, 'img goes here', '', new Categories('Kitten', 'cat-icon.png'), '', '', ''),
    new Type('Schesir Cat', 5, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Purina Gourmet', 16, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

    // CAT LITTER
    new Type('CatSan', 16, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type("Biokat's", 11, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Sanicat', 11, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Ever Clean', 18, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

    //CAT TOWERS
    new Type('Trixie', 55, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Topeakmart', 70, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

    //CAT SCRATCHER
    new Type('EveryYay', 25, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Anione', 13, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

    //CAT CARRIER
    new Type('Pet Around You', 17, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Sherpa', 75, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

    //CAT TOYS 
    new Type('Grey Mice', 3, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Laser Pointer', 5, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Mice Cat Teaser', 5, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

    //CAT BED
    new Type('Cat Pad', 10, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),
    new Type('Cat Bed', 30, 'img goes here', '', new Categories('Cat', 'cat-icon.png'), '', '', ''),

];

var_dump($products);
