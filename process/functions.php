<?php

// PROSES MENAMPILKAN SEMUA BUKU
function tampilSemuaBuku()
{
    global $koneksi;
    $perintahTampilBuku = $koneksi->prepare("SELECT * FROM books");
    $perintahTampilBuku->execute();
    $books = $perintahTampilBuku->fetchAll();

    return $books; //mengembalikan hasil array yang didapat
}


// PROSES MENAMPILKAN BUKU
function tampilBuku()
{
    global $koneksi;
    $perintahTampilBuku = $koneksi->prepare("SELECT * FROM books");
    $perintahTampilBuku->execute();
    $books = $perintahTampilBuku->fetchAll();

    return $books;
}

// PROSES MENGEDIT BUKU
function editBuku($id, $judul, $penulis, $tahun_terbit, $jumlah_halaman)
{
    global $koneksi;
    
    // mengupdate buku
    $statement = $koneksi->prepare("
                UPDATE books SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit', jumlah_hlm = '$jumlah_halaman' WHERE ID = '$id'
                ");
    $statement->execute();

    echo '<script>
    alert("Buku berhasil diedit")
    window.location.href="manage-book.php"
    </script>';
}