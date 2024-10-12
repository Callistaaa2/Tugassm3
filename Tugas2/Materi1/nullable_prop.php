<?php

    class mobil {
        var string $nama;
        var string $merk;
        var ?string $warna = null;
        var int $tahun;
        var int $kecepatanmaksimal;
    }   
    $mobilsatu = new mobil();
    //menambahkan properti pada objek mobilsatu
    $mobilsatu->nama = null;
    $mobilsatu->merk = "Toyota";
    $mobilsatu->warna = null;
    $mobilsatu->tahun = 2019;
    $mobilsatu->kecepatanmaksimal = 1300;

?>