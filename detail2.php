<?php
$id = $_GET["id"] ;

$buku = [
    1 => ['judul' => 'Gadis Kretek', 'harga' => 150000],
    2 => ['judul' => 'Halemorra', 'harga' => 120000],
    3 => ['judul' => 'Make U Mine', 'harga' => 135000],
];

if (!isset($buku[$id])) {
    echo "<h3>tidak ada buku</h3>";
    echo '<a href="bb.html">back</a>';

}

$detail = $buku[$id];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
    <style>
        body {
            font-family: Arial;
            padding: 30px;
            background: rgb(161, 197, 182);
        }
        form {
            margin-top: 15px;
        }
        input[type=number] {
            width: 60px;
        }
        button {
            background: rgba(53, 176, 125, 1);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: red;
        }
    </style>
</head>
<body>
        <h2> <?php echo $detail["judul"] ?> </h2>
        <p>Harga: Rp <?php echo number_format($detail['harga'], 0, ',', '.'); ?></p>


        <form method="POST">
            <label>Masukkan jumlah:</label>
            <input type="number" min="1" name="jumlah" required>
            <button type="submit">hitung total</button>
         </form>

         <?php
         //kalo tombol submit ditekan
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $jumlah = $_POST["jumlah"];
            $total = $jumlah * $detail["harga"];

            echo "<p><strong>Total: Rp " . number_format($total, 0, ',', '.') . "</strong></p>"; 
            
         }
         ?>

         <a href="b.html" class="btn">← Kembali</a>
        </body>
        </html>
