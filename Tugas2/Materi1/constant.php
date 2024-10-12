<?php

    class mobil1{
        const AUTHOR = "Faqih MW";
        var string $nama;
        var string $merk;
        var ?string $warna = null;
        var int $tahun;
        var int $kecepatanmaksimal;

        function tambahkecepatan() {
            echo "Kecepatan Bertambah! ";
        }

        function infomobil(?string $nama) {

            //kondisi jika parameter kosong maka akan ditampilkan properti dari objek
            if (is_null($nama)) {
            echo "Nama Mobil adalah ($this->nama)" . PHP_EOL;
            //Jika parameter memiliki nilai maka yang ditampilkan adalah parameter pada function
            }else{ 
            echo "Mobil Anda adalah $nama" . PHP_EOL;
            }
            
            }

    }
    $mobilsatu = new mobil1();
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

    //mengakses function infomobil()
    $mobilsatu->infomobil("xenia");

    //mengambil dan menampilkan constant
    echo mobil1::AUTHOR;

?>