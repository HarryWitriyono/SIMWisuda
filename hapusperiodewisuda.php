<?php
if (isset($_POST['submit'])) {
    include_once('koneksiwisuda.db.php');
    $IdPeriodeWisuda=mysqli_real_escape_string($koneksi,$_POST['IdPeriodeWisuda']);

    $sql="DELETE * FROM `PeriodeWisuda` WHERE `IdPeriodeWisuda`='".$IdPeriodeWisuda."'";
    $q=mysqli_query($koneksi,$sql);
    if ($q) {
        echo "Rekord sudah dihapus !";
    } else {
        echo "Rekord tidak dapat dihapus !";
    }
}
?>