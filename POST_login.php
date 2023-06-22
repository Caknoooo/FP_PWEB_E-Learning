<?php
session_start();

include("config.php");

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    echo "<script>
            alert('Please fill in the fields below to sign in');
            window.location.href = 'login.php';
          </script>";
  } else {
    // Query untuk memeriksa kecocokan email dan password dalam database
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $role = $row['role'];

      // Set session dengan informasi login
      $_SESSION['loginInfo'] = $row;
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $row['nama'];

      // Redirect sesuai dengan role pengguna
      if ($role == 'admin') {
        header("Location: admin/home.php");
      } elseif ($role == 'user') {
        header("Location: index.php");
      } else {
        echo "<script>
                alert('Invalid role');
                window.location.href = 'login.php';
              </script>";
      }
    } else {
      // Jika data tidak ditemukan, tampilkan pesan error menggunakan JavaScript
      echo "<script>
              alert('Invalid email or password');
              window.location.href = 'login.php';
            </script>";
    }
  }
}
