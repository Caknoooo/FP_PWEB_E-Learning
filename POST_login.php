<?php
session_start();

include("config.php");

if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $id = 0;

  if(empty($email) || empty($password)) {
    echo "<script>alert('Please fill in the fields below to sign in')</script>";
    echo "<script>window.location.href = 'login.php'</script>";
  } else {
    // Query untuk memeriksa kecocokan email dan password dalam database
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      // Jika data ditemukan, set session dan redirect ke halaman utama
      $_SESSION['loginInfo'] = $row;
      $_SESSION['email'] = $email;
      header("Location: home.php");
    } else {
      // Jika data tidak ditemukan, tampilkan pesan error
      echo "<script>alert('Invalid email or password')</script>";
      echo "<script>window.location.href = 'login.php'</script>";
    }
  }
}
