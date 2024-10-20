<?php
    //vlass untuk menghubungakan DB
    class Database{
        //properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php_0035";
        public $connect;

        function __construct(){
            $this->connect=mysqli_connect($this->host, 
            $this->username, $this->password);
            mysqli_select_db($this->connect, $this->database);

            //cek koneksi
            //if($this->connect->connect_error){
            //    die ("Koneksi gagal : " . $this->connect->connect_error);
           // }

            //echo "Koneksi Berhasil";
        }

        function tampildata(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_user_0035");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            //var_dump($rows);
            return $rows;
        }
        
        function tambahdata($nama,$alamat,$nohp,$jenis_kelamin,$poto){
            mysqli_query($this->connect,"INSERT INTO tb_user_0035 VALUES (NULL,'$nama','$alamat','$nohp','$jenis_kelamin','$poto')");
        }

        function editdata($id){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_user_0035 WHERE id=$id");
            $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $row;
        }

        function updatedata($id,$nama,$alamat,$nohp,$jenis_kelamin,$poto){
            mysqli_query($this->connect,"UPDATE tb_user_0035 SET 'nama' = '$nama', 'alamat' = '$alamat', 'nohp' = '$nohp', 'jenis_kelamin' = '$jenis_kelamin',poto='$poto' WHERE id='$id'");
        }

        function hapusdata($id){
            mysqli_query($this->connect,"DELETE FROM tb_user_0035 WHERE id='$id'");
        }
    }
?>
