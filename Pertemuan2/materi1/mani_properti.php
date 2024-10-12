<?php

//include class mobil.php
require_once "kelas.php";

//inisalisasi variabel (objek) mobilsatu
$mobilsatu = new mobil() ;


//menambahkan property pada objek mobilsatu
$mobilsatu->nama = " Avanza";
$mobilsatu->merk = " Toyota";
$mobilsatu->warna = " hitam";
$mobilsatu->tahun = 2019;
$mobilsatu->kecepatanmaksimal = 1300;

//menampilkan informasi objek mobilsatu
echo " Nama : $mobilsatu->nama" . PHP_EOL;
echo " Merk : $mobilsatu->merk" . PHP_EOL;
echo " Warna : $mobilsatu->warna" . PHP_EOL;
echo " Tahun : $mobilsatu->tahun" . PHP_EOL;
echo " Kecepatan Maksimal : $mobilsatu->kecepatanmaksimal" . PHP_EOL;

//inisalisasi variabel (objek) mobildua
$mobildua = new mobil() ;


//menambahkan property pada objek mobildua
$mobildua->nama = " Brio";
$mobildua->merk = " Honda";
$mobildua->warna = " Merah";
$mobildua->tahun = 2018;
$mobildua->kecepatanmaksimal = 1000;

//menampilkan informasi objek
var_dump($mobildua) ;

?>