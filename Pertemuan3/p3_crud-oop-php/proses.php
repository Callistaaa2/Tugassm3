<?php
    include 'database.php';
    $db = new Database();

    $aksi = $_GET['aksi'];

    if ($aksi == 'tambah') {
        
        $namaFile = $_FILES['poto']['name'];
        $tmpFile = $_FILES['poto']['tmp_name'];
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));

        $gambar = uniqid() . "." . $ekstensiFile;
        move_uploaded_file($tmpFile, 'poto/' . $gambar);

        $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'],$gambar);
        header("location:index.php");
    } else if ($aksi == 'update') {
        // Ambil gambar lama dari form (hidden input)
        $gambarLama = $_POST['foto_lama'];

        // Cek apakah ada gambar baru yang diunggah
        if ($_FILES["poto"]["error"] === 4) {
            // Jika tidak ada gambar baru, tetap gunakan gambar lama
            $gambar = $gambarLama;
        } else {
            // Jika ada gambar baru, hapus gambar lama
            $namaFile = $_FILES['poto']['name'];
            $tmpFile = $_FILES['poto']['tmp_name'];
            $ekstensiFile = explode('.', $namaFile);
            $ekstensiFile = strtolower(end($ekstensiFile));
            $gambar = uniqid() . "." . $ekstensiFile;

            // Hapus gambar lama jika file lama ada
            if (file_exists('poto/' . $gambarLama)) {
                unlink('poto/' . $gambarLama);
            }

            // Pindahkan file gambar baru
            move_uploaded_file($tmpFile, 'poto/' . $gambar);
        }

        $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'],$gambar);
        header("location: index.php");
    } else if ($aksi == 'hapus') {
        $id = $_GET['id'];

        $ambilData = mysqli_query($db->connect, "SELECT poto FROM tb_user_0035 WHERE id=$id");
        while($data = mysqli_fetch_assoc($ambilData)) {
            $gambar = $data['poto'];
        }
        unlink('poto/' . $gambar);

        $db->hapusData($_GET['id']);
        header("location: index.php");
    }


?>