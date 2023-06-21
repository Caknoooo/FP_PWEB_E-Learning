<?php
session_start();
include("config.php");

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
  // Jika pengguna belum login, redirect ke halaman login
  header("Location: login.php");
  exit();
}

// Periksa apakah ada data yang dikirim melalui metode POST
if (isset($_POST['joinCourse'])) {
  // Dapatkan course ID dari input tersembunyi
  $courseId = $_POST['courseId'];

  // Periksa apakah pengguna sudah terdaftar dalam kursus
  $userId = $_SESSION['loginInfo']['id'];
  $query = "SELECT * FROM course_user WHERE uid = $userId AND cid = $courseId";
  $result = mysqli_query($db, $query);

  // $row = mysqli_num_rows($result);
  // print_r($row);
  // exit();

  if (mysqli_num_rows($result) > 0) {
    // Pengguna sudah terdaftar dalam kursus, redirect ke halaman detail kursus
    echo "<script>alert('Anda sudah mendaftar di course ini')</script>";
    echo "<script>window.location.href = 'course.php';</script>";
    exit();
  } else {
    // Tambahkan pengguna ke kursus
    $query = "INSERT INTO course_user (uid, cid) VALUES ($userId, $courseId)";
    $result = mysqli_query($db, $query);

    if ($result) {
      // Berhasil menambahkan pengguna ke kursus, redirect ke halaman detail kursus
      echo "<script>alert('Berhasil Mendaftar Course')</script>";
      echo "<script>window.location.href = 'profile.php';</script>";
      exit();
    } else {
      // Gagal menambahkan pengguna ke kursus, redirect ke halaman course
      echo "<script>alert('Gagal Mendaftarkan Course')</script>";
      echo "<script>window.location.href = 'join_course.php?id=$courseId';</script>";
      exit();
    }
  }
} else {
  // Jika tidak ada data yang dikirim melalui metode POST, redirect ke halaman course
  header("Location: course.php");
  exit();
}

?>