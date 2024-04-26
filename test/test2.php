<?php
include_once './../src/autoloader.php';

$product = new NewTik\ocApiData\Model\Temp\Product();

$product->getAttrinutes(12)->getDescription(1)->text = '5454545';

$product->getAttrinutes(12)->getDescription(2)->text = '12';

$product->getDescriptions(1)->name = 'test';

$category = new NewTik\ocApiData\Model\Temp\Category();

$category->getDescriptions(1)->description = 'fghgfhgfhfgh';

echo '<pre>';
var_dump($category->toArray());
echo '</pre>';