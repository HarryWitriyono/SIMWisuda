<?php
if (isset($_POST['submit'])) {
    include_once('koneksiwisuda.db.php');
    $NPM=mysqli_real_escape_string($koneksi,$_POST['NPM']);
    $NamaMahasiswa=mysqli_real_escape_string($koneksi,$_POST['NamaMahasiswa']);
    $Password=mysqli_real_escape_string($koneksi,$_POST['Password']);
    $KodeProdi=mysqli_real_escape_string($koneksi,$_POST['KodeProdi']);
    $IdPeriodeWisuda=mysqli_real_escape_string($koneksi,$_POST['IdPeriodeWisuda']);
    $TglLulusUjian=mysqli_real_escape_string($koneksi,$_POST['TglLulusUjian']);
    $ipkakhir=mysqli_real_escape_string($koneksi,$_POST['ipkakhir']);
    $sql="UPDATE `wisudawan` SET `NamaMahasiswa`='".$NamaMahasiswa."',`Password`='".$Password."',`KodeProdi`='".$KodeProdi."',`IdPeriodeWisuda`='".$IdPeriodeWisuda."',`TglLulusUjian`='".$TglLulusUjian."',`ipkakhir`='".$ipkakhir."',`waktudaftar`=now() WHERE `NPM`='".$NPM."'";
    $q=mysqli_query($koneksi,$sql);
    if ($q) {
        echo "Rekord sudah tersimpan !";
    } else {
        echo "Rekord gagal tersimpan !";
    }
}
?>