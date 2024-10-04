<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1-0035</title>
    <style>
        /* Gaya umum untuk body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #d81b60; /* Latar belakang pink gelap */
            color: #333;
            margin: 0;
            padding: 20px;
        }

        /* Gaya untuk kontainer */
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #ffe4f1; /* Latar belakang pink cerah untuk kontainer */
            border-radius: 10px; /* Sudut yang lebih membulat */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Bayangan untuk efek kedalaman */
            transform: translateY(-10px); /* Posisi awal untuk animasi */
            animation: fadeIn 0.5s ease-in-out forwards; /* Animasi saat memuat */
        }

        /* Gaya untuk judul */
        h1 {
            text-align: center;
            color: #fff; /* Warna putih untuk kontras */
            margin-bottom: 20px; /* Ruang di bawah judul */
            font-size: 24px; /* Ukuran font lebih besar */
        }

        /* Gaya untuk tabel */
        table {
            width: 100%;
            margin-bottom: 20px;
        }

        /* Gaya untuk setiap sel tabel */
        td {
            padding: 15px; /* Ruang dalam sel */
            border-bottom: 1px solid #f8bbd0; /* Garis bawah untuk pemisah */
        }

        /* Gaya untuk label */
        label {
            margin-right: 15px;
        }

        /* Gaya untuk input angka */
        input[type="number"] {
            width: calc(100% - 20px); /* Lebar input */
            padding: 10px;
            border: 1px solid #f48fb1; /* Warna pink muda */
            border-radius: 5px; /* Sudut yang lebih membulat */
            margin-bottom: 20px;
            font-size: 16px; /* Ukuran font lebih besar */
        }

        /* Gaya untuk tombol kirim */
        input[type="submit"] {
            background-color: #d5006d; /* Warna pink */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px; /* Sudut yang lebih membulat */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s; /* Efek transisi saat hover */
        }

        /* Efek saat hover pada tombol */
        input[type="submit"]:hover {
            background-color: #c51162; /* Warna lebih gelap saat hover */
            transform: scale(1.05); /* Efek membesar saat hover */
        }

        /* Gaya untuk hasil perhitungan */
        .result {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #d5006d; /* Garis pink di sekeliling hasil */
            border-radius: 5px; /* Sudut yang lebih membulat */
            background-color: #ffe4f1; /* Latar belakang pink muda */
            color: #d5006d; /* Warna teks pink */
            text-align: center; /* Menempatkan teks di tengah */
            font-weight: bold; /* Membuat teks menjadi tebal */
            display: flex; /* Menggunakan flexbox untuk membuat teks justify */
            justify-content: center; /* Memusatkan konten */
            flex-direction: column; /* Menyusun konten secara vertikal */
        }
    </style>
</head>
<body>
    <h1>SELAMAT DATANG DI WILIEMART</h1>
<div class="container">

    <form action="tugas1.php" method="post">
    <table>
        <tr>
            <td> Ada membernya kak ?</td>
            <td>
                <label>
                    <input type="radio" name="member" id="member" value="punya" >Punya kak
                </label>
                <label>
                    <input type="radio" name="member" id="member" value="ga">Ga Punya kak
                </label>
            </td>
        </tr>
        </table>
        <label for="">Masukkan total belanja : </label>
        <input type="number" name="ttl" id="ttl" placeholder="">
    
    <input type="submit" name="hitung" value="hitung">
    </form>



    <?php
    echo "<div class = 'result'>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $member = $_POST['member'];
        $ttl = (floatval($_POST['ttl']));
        $dismem = $ttl * 0.1; // 
        
    if (isset($_POST['member'])) {
        if ($member === 'punya') {
            echo "Total Belanja : " . $ttl . "<br>" ;
            echo "Diskon Member 10% : " . $dismem . "<br>" ;
            if ($ttl >= 500000) {
                $disk = $ttl * 0.1;
                echo "Diskon Belanja 10% : " . $disk . "<br>" ;
                $ttlakr = $ttl - ($dismem+$disk);
                echo "Total Bayar : " . $ttlakr . "<br>" ;
            }elseif ($ttl >= 300000) {
                $disk = $ttl * 0.05;
                echo "Diskon Belanja 5% : " . $disk . "<br>" ;
                $ttlakr = $ttl - ($dismem+$disk);
                echo "Total Bayar : " . $ttlakr . "<br>" ;
            }else{
                $ttlakr = $ttl -$dismem;
                echo "Total Bayar : " . $ttlakr . "<br>" ;
            }
             
        }else{
            if ($ttl >= 500000) {
                $disk = $ttl * 0.1;
                echo "Diskon Belanja 10% : " . $disk . "<br>" ;
                $ttlakr = $ttl - $disk;
                echo "Total Bayar : " . $ttlakr . "<br>" ;
            }else {
                echo "Total Bayar : " . $ttl . "<br>" ;
            }
        }
    }
}
echo "</div>";
    ?>
   </div>
</body>
</html>