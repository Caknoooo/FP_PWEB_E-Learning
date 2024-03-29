<?php
session_start();

// Cek apakah user sudah login atau belum
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
  <main class="dashboard d-flex">
    <!-- start sidebar -->

    <?php
    include "component/sidebar.php";
    include('../config.php');

    // Query untuk mengambil jumlah siswa
    $nbr_students = $db->query("SELECT COUNT(*) as total FROM user WHERE role = 'user'");
    $nbr_students = $nbr_students->fetch_assoc()['total'];

    // Query untuk mengambil jumlah course
    $nbr_courses = $db->query("SELECT COUNT(*) as total FROM course");
    $nbr_courses = $nbr_courses->fetch_assoc()['total'];

    ?>
    <!-- end sidebar -->

    <!-- start content page -->
    <div class="container-fluid px">
      <?php
      include "component/header.php";
      ?>
      <div class="cards row gap-3 justify-content-center mt-5">
        <div class=" card__items card__items--blue col-md-3 position-relative">
          <div class="card__students d-flex flex-column gap-2 mt-3">
            <i class="far fa-graduation-cap h3"></i>
            <span>Students</span>
          </div>
          <div class="card__nbr-students">
            <span class="h5 fw-bold nbr"><?php echo $nbr_students; ?></span>
          </div>
        </div>

        <div class=" card__items card__items--rose col-md-3 position-relative">
          <div class="card__Course d-flex flex-column gap-2 mt-3">
            <i class="fal fa-bookmark h3"></i>
            <span>Course</span>
          </div>
          <div class="card__nbr-course">
            <span class="h5 fw-bold nbr"><?php echo $nbr_courses; ?></span>
          </div>
        </div>

        <div class=" card__items card__items--yellow col-md-3 position-relative">
          <div class="card__payments d-flex flex-column gap-2 mt-3">
            <i class="fal fa-usd-square h3"></i>
            <span>Payments</span>
          </div>
          <div class="card__payments">
            <span class="h5 fw-bold nbr">DHS 556,000</span>
          </div>
        </div>

        <div class="card__items card__items--gradient col-md-3 position-relative">
          <div class="card__users d-flex flex-column gap-2 mt-3">
            <i class="fal fa-user h3"></i>
            <span>Users</span>
          </div>
          <?php
          // Query untuk mengambil jumlah users
          $nbr_users = $db->query("SELECT COUNT(*) as total FROM user WHERE role = 'user'");
          $nbr_users = $nbr_users->fetch_assoc()['total'];
          ?>
          <span class="h5 fw-bold nbr"><?php echo $nbr_users; ?></span>
        </div>
      </div>

    </div>
    <!-- end contentpage -->
  </main>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>