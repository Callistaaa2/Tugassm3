<?php
require_once 'app/config/database.php';
require_once 'app/models/User.php';

// Koneksi ke database
$dbConnection = getDBConnection();
$userModel = new User($dbConnection);

// Periksa jika ID ada
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $user = $userModel->getUserById($id); 
} else {
    header('Location: index.php'); 
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Data - 0035</h1>
        <p><strong>ID:</strong> <?php echo $user['id']; ?></p>
        <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <a href="index.php" class="btn btn-danger">Kembali</a>
    </div>
</body>
</html>
