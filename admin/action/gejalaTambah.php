<?php

$id = $_POST['kode-gejala'];
$nama = $_POST['nama-gejala'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_gejala(id_gejala, name) VALUES('$id','$nama')");


if($tambah){
    header("location: ../index.php?page=gejala-list");
}else{
    echo "Data Gagal Disimpan";
    
}

?>