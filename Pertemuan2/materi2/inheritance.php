<?php
class Mobil {
     var string $nama;
     var string $brand;
     var int $tahun;

    function __construct(string $nama, string $brand, int $tahun) {
        $this->nama = $nama;
        $this->brand = $brand;
        $this->tahun = $tahun;
    }

    function infomobil() {
        return "Nama Mobil : $this->nama" . PHP_EOL .
               "Brand : $this->brand" . PHP_EOL .
               "Tahun : " . $this->tahun . PHP_EOL;
    }
}
?>
