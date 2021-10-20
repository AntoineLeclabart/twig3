<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once __DIR__ . '/../src/Products.php';

echo $twig->render('products.html.twig', ['products' => $products]);
