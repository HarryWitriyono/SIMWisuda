<?php
include('koneksi.db.php');
$NKK=mysqli_real_escape_string($koneksi,$_POST['NKK']);
$NIK=mysqli_real_escape_string($_POST['NIK']);
$NamaAnggota=mysqli_real_escape_string($_POST['NamaAnggota']);
$NoWAHP=mysqli_real_escape_string($_POST['NoWAHP']);
$Password=mysqli_real_escape_string($_POST['Password']);
$Level='Anggota';
if((empty($NKK)) or (empty($NIK)) or (empty($NamaAnggota)) or (empty($NoWAHP)) or (empty($Password))) {
    echo "NKK,NIK,Nama Anggota, No.HP/WA atau Password tidak boleh kosong !";
} else {
    $sql="INSERT INTO `anggota`(`NKK`, `NIK`, `NamaAnggota`, `NoWAHP`, `Password`, `Level`) VALUES ('".$NKK."','".$NIK."','".$NamaAnggota."','".$NoWAHP."','".$Password."','".$Level."')";
    $q=mysqli_query($koneksi,$sql);
    if ($q) {
        echo "Berhasil disimpan !";
    } else {
        echo "Pendaftaran pengguna gagal !";
    }
}
?>