<?php require_once '../process/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book | Books Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- FORM TAMBAH BUKU -->
    <div class="container">
        <div class="col-md-8 bg-light table-wrapper">
            <h3>Create Book</h3>
            <hr>

            <form action="" method="post">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku">
                </div>
                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Penulis buku">
                </div>
                <div class="form-group">
                    <label>Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit">
                </div>
                <div class="form-group">
                    <label>Jumlah Halaman</label>
                    <input type="number" class="form-control" name="jumlah_halaman" placeholder="Masukkan jumlah halaman">
                </div>
                <button type="submit" name="tambahBuku" class="btn btn-primary btn-sm">Submit</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['tambahBuku'])) {
       $judul = $_POST['judul'];
       $penulis = $_POST['penulis'];
       $tahun_terbit = $_POST['tahun_terbit'];
       $jumlah_halaman = $_POST['jumlah_halaman'];

       if (empty(trim($judul)) || empty(trim($penulis)) || empty(trim($tahun_terbit)) || empty(trim($jumlah_halaman))) {
            echo '<script> alert("Harap mengisi form, tidak boleh ada yang kosong!")</script>'; 
       } else { 
            $tambahBuku = $koneksi->prepare("
                INSERT INTO books(judul, penulis, tahun_terbit, jumlah_hlm)
                VALUES ('$judul', '$penulis', '$tahun_terbit', '$jumlah_halaman')
            ");
            $tambahBuku->execute();

            echo '
                <script>
                alert("Buku berhasil ditambahkan")</script>';    
       }
}
    ?>

    <script> alert('please wait');</script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>