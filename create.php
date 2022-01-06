<?php
require_once './config.php';

$id = $_POST['id'];
$merek = $_POST['merek'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];

$result = $koneksi->
    query("INSERT INTO baju VALUES(0,'$merek', '$ukuran', '$harga')");
    if($result){
        header("location:./index.php");
    }else {
        echo $koneksi->error; 
    }
?>