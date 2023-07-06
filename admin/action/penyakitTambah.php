<?php

$id = $_POST['kode-penyakit'];
$nama = $_POST['nama-penyakit'];
$solusi = $_POST['solusi'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_penyakit(id_penyakit, name, solusi) VALUES('$id','$nama','$solusi')");


if($tambah){
    header("location: ../index.php?page=penyakit-list");
}else{
    echo "Data Gagal Disimpan";
    
}

?>