<?php

require_once __DIR__ . "/class/categories.php";
require_once __DIR__ . "/class/products.php";
require_once __DIR__ . "/class/detailsclass.php";

// DATA
$products = [
    new product('Natural Trainer', 'Dry Food', 55.25, new Categories('Cat')),
];

var_dump($products);
