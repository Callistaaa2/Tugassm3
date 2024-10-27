<?php
require_once 'app/config/database.php';
require_once 'app/models/User.php';

$dbConnection = getDBConnection();
$userModel = new User($dbConnection);

if (isset($_GET['id']) && $_GET['aksi'] === 'hapus'){
    $id = intval($_GET['id']);
    $userModel->deleteById($id); 
    header('Location: index.php'); 
}
?>
