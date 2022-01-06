<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from baju where id_baju='$id'");

header("location:index.php");