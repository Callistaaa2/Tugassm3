<?php
    class mahasiswa{
        var $nama ;
        var $nim;
        var $alamat;
        var $cita;

        function citaku(){
            echo "Mahasiswa Bernama $this->nama Bercita-cita Sebagai $this->cita";
        }

    }
    //membuat objek dan properti
    $wildan = new mahasiswa();
    $wildan->nama = "MUHAMMAD FAQIH WILDAN";
    $wildan->nim = "23.240.0035";
    $wildan->alamat = "Pekalongan";
    $wildan->cita = "ORANG SUKSES";
    
    //memanggil function
    $wildan->citaku();



?>