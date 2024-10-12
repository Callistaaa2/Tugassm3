<?php
    class mobil{
        var $nama;
        var ?string $merk=null;
        var string $tahun;

        public function __construct( $nama, ?string $merk) {
            $this->nama = $nama;
            $this->merk = $merk;
        }

        public function infomobil(){
            return "$this->nama, $this->merk, $this->tahun;";
        }

    }
    
?>