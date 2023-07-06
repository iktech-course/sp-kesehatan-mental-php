<?php

$id_penyakit = $_POST['kode-penyakit'];
$id_gejala = $_POST['kode_gejala'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_aturan(id_penyakit, id_gejala) VALUES('$id_penyakit','$id_gejala')");


if($tambah){
    header("location: ../index.php?page=rule-list");
}else{
    echo "Data Gagal Disimpan";
    
}

?>