<?php require_once 'process/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Collection</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php require_once 'views/navbar.php'; ?>

    <!-- BANNER -->
    <div class="container bg-light banner">
        <h1>Welcome to our online library books collection 📚😎</h1>
        <p class="mb-4">In here, you can add your own book collection. Maybe you can add your favorite book into here or you can add your read list too.</p>
        <a href="#" class="btn btn-primary">Explore Book</a>
    </div>

    <!-- BOOK CONTENT -->
    <div class="container">
        <div class="row">
            <?php
            $books = tampilBuku();
            foreach ($books as $book) :  
            ?>
                <div class="col-md-3 mb-4">
                    <div class="col-md-12 book-content bg-light">
                        <h3 class="judul"><?php echo $book['judul']; ?></h3>
                        <span class="badge bg-info mb-3">Tahun Terbit <?php echo $book ['tahun_terbit']; ?></span>
                        <span class="d-block">Pengarang: <?= $book['penulis']; ?></span>
                        <span class="d-block">Jumlah Halaman:<?= $book['jumlah_hlm']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>        
        </div>
    </div>

    <!-- FOOTER -->
    <?php require_once 'views/footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>