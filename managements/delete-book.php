<?php
// 1. PANGGIL KONEKSI
require_once '../process/koneksi.php';

// 2. DAPETIN ID BUKU DENGAN METHOD GET
$id = $_GET['deleteID'];

// 3. HAPUS BUKU
$hapusBuku = $koneksi->prepare("DELETE FROM books WHERE ID='$id'");
$hapusBuku->execute();
echo '<script>
alert("Buku berhasil dihapus")
window.location.href="manage-book.php"
</script>';