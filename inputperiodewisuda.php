<?php
if (isset($_POST['submit'])) {
    include_once('koneksiwisuda.db.php');
    $IdPeriodeWisuda=mysqli_real_escape_string($koneksi,$_POST['IdPeriodeWisuda']);
    $KuotaWisuda=mysqli_real_escape_string($koneksi,$_POST['KuotaWisuda']);
    $WaktuWisuda=mysqli_real_escape_string($koneksi,$_POST['WaktuWisuda']);
    $sql="INSERT INTO `PeriodeWisuda`(`IdPeriodeWisuda`, `KuotaWisuda`, `WaktuWisuda`) VALUES ('".$IdPeriodeWisuda."','".$KuotaWisuda."','".$WaktuWisuda."')";
    $q=mysqli_query($koneksi,$sql);
    if ($q) {
        echo "Rekord sudah tersimpan !";
    } else {
        echo "Rekord gagal tersimpan !";
    }
}
?>