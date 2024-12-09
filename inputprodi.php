<?php
if (isset($_POST['submit'])) {
    include_once('koneksiwisuda.db.php');
    $KodeProdi=mysqli_real_escape_string($koneksi,$_POST['KodeProdi']);
    $NamaProdi=mysqli_real_escape_string($koneksi,$_POST['NamaProdi']);
    $sql="INSERT INTO `Progam Studi`(`KodeProdi`, `NamaProdi`) VALUES ('".$KodeProdi."','".$NamaProdi."')";
    $q=mysqli_query($koneksi,$sql);
    if ($q) {
        echo "Rekord sudah tersimpan !";
    } else {
        echo "Rekord gagal tersimpan !";
    }
}
?>