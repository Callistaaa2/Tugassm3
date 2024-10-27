<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3 col-md-12">
    <h1 class="text-center">User Details - 0035</h1>
    <hr>

    <table class="table table-hover table-secondary table-striped">
        <thead>
            <tr>
                <th scope="col" class="col-md-1">NO</th>
                <th scope="col" class="col-md-1">NAMA</th>
                <th scope="col" class="col-md-1">ALAMAT EMAIL</th>
                <th scope="col" class="col-md-1">AKSI</th>
            </tr>
        </thead>
        <tbody> <!-- Tag <tbody> ditambahkan di sini -->
        <tbody>
    <?php if (is_array($users) && !empty($users)): // Cek apakah $users adalah array dan tidak kosong ?> 
        <?php $nomor = 1;?>
        <?php foreach ($users as $user): ?>
        <tr>
            <th scope="row"><?php echo $nomor++; ?></th>
            <td><?php echo htmlspecialchars($user['name']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td>
            <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm m-1">Edit</a>
            <a href="hapus.php?id=<?php echo $user['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah ingin menghapus data ini?');">Hapus</a>
            <a href="detail.php?id=<?php echo $user['id']; ?>" class="btn btn-secondary btn-sm m-1">Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4" class="text-center">Tidak Ada User yang Ditemukan</td>
        </tr>
    <?php endif; ?>
</tbody>

        </tbody> <!-- Penutup <tbody> dipertahankan -->
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>
