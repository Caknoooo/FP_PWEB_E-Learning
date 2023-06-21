<?php
session_start();

include("config.php");

if (isset($_POST['daftar'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // $ret = array(
  //   'name' => $name,
  //   'email' => $email,
  // );
  // echo json_encode($ret);

  if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "<script>alert('Please fill in the fields below to sign up')</script>";
    echo "<script>window.location.href = 'register.php'</script>";
  } else {
    if ($password != $confirm_password) {
      echo "<script>alert('Password and Confirm Password do not match')</script>";
      echo "<script>window.location.href = 'register.php'</script>";
    } else {
      $sql = "INSERT INTO user (nama, email, password) VALUES ('$name', '$email', '$password')";
      $query = mysqli_query($db, $sql);

      if ($query) {
        echo "<script>alert('Registration Success')</script>";
        echo "<script>window.location.href = 'login.php'</script>";
      } else {
        echo "<script>alert('Registration Failed')</script>";
      }
    }
  }
}
?>