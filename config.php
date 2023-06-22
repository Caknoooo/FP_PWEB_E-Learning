<?php

$server = "sql211.infinityfree.com";
$user = "if0_34478693";
$password = "uvyagIGWbIvSXn";
$nama_database = "if0_34478693_fppweb";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>  