<?php
    include_once('koneksiwisuda.db.php');
    $sql="SELECT * FROM `PeriodeWisuda`";
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
?>