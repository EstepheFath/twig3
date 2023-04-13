<?php
require_once __DIR__ . '/../config/twig.php';
require_once __DIR__ . '/../src/View/products.html.twig';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);