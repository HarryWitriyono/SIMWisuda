<?php
if (isset($_POST['submit'])) {
    include_once('koneksiwisuda.db.php');
    $NPM=mysqli_real_escape_string($koneksi,$_POST['NPM']);
    $sql="DELETE FROM `wisudawan` WHERE `NPM`='".$NPM."'";
    $q=mysqli_query($koneksi,$sql);
    if ($q) {
        echo "Rekord sudah dihapus !";
    } else {
        echo "Rekord gagal dihapus !";
    }
}
?>