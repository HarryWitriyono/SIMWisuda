<?php 
if (isset($_POST['submit'])) {
    include_once('koneksiwisuda.db.php');
    $IdPeriodeWisuda=mysqli_real_escape_string($kon,$_POST['IdPeriodeWisuda']);
    $KodeProdi=mysqli_real_escape_string($kon,$_POST['KodeProdi']);
    $sql="SELECT w.*,p.NamaProdi,pr.WaktuWisuda FROM wisudawan w INNER JOIN `Progam Studi` p ON w.KodeProdi=p.KodeProdi INNER JOIN PeriodeWisuda pr ON w.IdPeriodeWisuda=pr.IdPeriodeWisuda WHERE pr.IdPeriodeWisuda='".$IdPeriodeWisuda."' and p.KodeProdi='".$KodeProdi."'";
    $q=mysqli_query($kon,$sql);
    $r=mysqli_fetch_assoc($q);
    $hasil=array();
    if (!empty($r)) {
        do {
            array_push($hasil,$r);
        }while($r=mysqli_fetch_assoc($q));
        echo json_encode($hasil);
    } else {
        echo 'Rekord tabel tidak ada !';
    }
} else {
    echo 'Salah penggunaan API !';
}
?>