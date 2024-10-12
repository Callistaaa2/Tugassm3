<?php

    class mobil {
        var string $nama;
        var string $merk;
        var ?string $warna = null;
        var int $tahun;
        var int $kecepatanmaksimal;

        function tambahkecepatan() {
            echo "Kecepatan Bertambah! ";
        }

    }
    $mobilsatu = new mobil();
    //menambahkan properti pada objek mobilsatu
    $mobilsatu->nama = "Avanza";
    $mobilsatu->merk = "Toyota";
    $mobilsatu->warna = null;
    $mobilsatu->tahun = 2019;
    $mobilsatu->kecepatanmaksimal = 1300;

    //menampilkan informasi objek mobilsatu
    echo " Nama : $mobilsatu->nama" . PHP_EOL;
    echo " Merk : $mobilsatu->merk" . PHP_EOL;
    echo " Warna : $mobilsatu->warna" . PHP_EOL;
    echo " Tahun : $mobilsatu->tahun" . PHP_EOL;
    echo " Kecepatan Maksimal : $mobilsatu->kecepatanmaksimal" . PHP_EOL;


    //mengakses method atau fungsi
    $mobilsatu->tambahkecepatan() ;

?>