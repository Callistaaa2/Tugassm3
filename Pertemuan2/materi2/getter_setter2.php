<?php
require_once "getter_setter.php";

$objcategory = new category();
//untuk instan variabel tidak menggunakan seperti ini
//$objcategory->name="handphone";

$objcategory->setName("Handphone");
$objcategory->setExpensive(true);

//mengakses data
echo "Name : {$objcategory->getName()}" . PHP_EOL;
echo "Expensive : {$objcategory->isExpensive()}" . PHP_EOL;


?>