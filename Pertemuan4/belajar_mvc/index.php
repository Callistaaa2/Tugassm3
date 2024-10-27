<?php
require_once 'app/config/database.php';
require_once 'app/controllers/UserController.php';

//koneksi ke database
$dbConnection = getDBConnection();

//mendapatkan parameter dari url
$id = isset($_GET['id']) ? intval($_GET['id']) :1;

//membuat instance UserController
$controller = new UserController($dbConnection);

//menampilkan data pengguna
$controller->show();
?>