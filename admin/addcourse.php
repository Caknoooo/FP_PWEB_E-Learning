<?php

include ("../config.php");

if(isset($_POST['submit'])) {
  $name = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $jumlah_modul = $_POST['jumlah_modul'];
  $tingkat = $_POST['tingkat'];
  $img = $_FILES['img']['name'];
  $tmp = $_FILES['img']['tmp_name'];

  $path = "images/".$img;
  move_uploaded_file($tmp, $path);

  $sql = "INSERT INTO course (nama, deskripsi, jumlah_modul, tingkat, gambar) VALUES ('$name', '$deskripsi', '$jumlah_modul', '$tingkat', '$path')";
  $query = mysqli_query($db, $sql);

  if( $query ) {
    echo '<script>alert("Berhasil menambahkan course");</script>';
    echo '<script>window.location.href = "course.php";</script>';
  } else {
    echo '<script>alert("Gagal menambahkan course");</script>';
    echo '<script>window.location.href = "course.php";</script>';
  }
}