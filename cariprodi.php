<?php
if (isset($_POST['submit'])) {
    include_once('koneksiwisuda.db.php');
    $KodeProdi=mysqli_real_escape_string($koneksi,$_POST['KodeProdi']);
    $sql="SELECT * FROM `Progam Studi` WHERE `KodeProdi`='".$KodeProdi."'";
    $q=mysqli_query($koneksi,$sql);
    $r=mysqli_fetch_assoc($q);
    $hasil=array();
    if (empty($r)) {
        echo 'Rekord tabel kosong !';
    } else {
        do {
            array_push($hasil,$r);
        }while($r=mysqli_fetch_assoc($q));
        echo json_encode($hasil);
    }
} else {
    echo 'Salah format API !';
}
?>