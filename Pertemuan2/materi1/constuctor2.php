<?php
require_once "constuctor.php";

$mobilsatu = new mobil("Avanza", "Toyota") ;
$mobilsatu->tahun = "2019";

$mobildua = new mobil("Brio", null) ;
$mobildua->tahun = "2020";


echo $mobilsatu->infomobil() . PHP_EOL;
echo $mobildua->infomobil() . PHP_EOL;

?>