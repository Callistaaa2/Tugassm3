<?php
    require_once("inheritance.php");
    require_once("inheritance2.php");

    //objek dari class mobil
    $avanza = new mobil("Avanza","Toyota", 2020);
    echo $avanza->infomobil();

    //objek movilsport
    $supra = new mobilsport("Supra", "Toyota",2021);
    echo $supra->infomobil();
    echo $supra->jalankanturbo();



?>