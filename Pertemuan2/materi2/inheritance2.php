<?php
    class mobilsport extends mobil{
        public $turbo = false;

        function jalankanturbo(){
            $this->turbo = true;
            return "Jalankan Turbo";
        }

        function infomobil() {
            return "Nama Mobil : $this->nama" . PHP_EOL .
                   "Brand : $this->brand" . PHP_EOL .
                   "Tahun : " . $this->tahun . PHP_EOL .
                   "Turbo : " . $this->turbo = true . PHP_EOL;
                   
        }
    }

?>