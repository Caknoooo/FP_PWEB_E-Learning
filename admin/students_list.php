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
  <title>User List</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
  <main class="dashboard d-flex">
    <!-- start sidebar -->
    <?php
    include "component/sidebar.php";
    ?>
    <!-- end sidebar -->

    <!-- start content page -->
    <div class="container-fluid px-4">
      <?php
      include "component/header.php";
      ?>


      <!-- start user list table -->
      <div class="user-list-header d-flex justify-content-between align-items-center py-2">
        <div class="title h6 fw-bold">User List</div>
        <div class="btn-add d-flex gap-3 align-items-center">
          <div class="short">
            <i class="far fa-sort"></i>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table user_list table-borderless">
          <thead>
            <tr class="align-middle">
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include('../config.php');
            $result = $db->query("SELECT * FROM user");
            while ($row = $result->fetch_assoc()) :
            ?>
              <tr class="bg-white align-middle">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['email'] ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      <!-- end user list table -->
    </div>
    <!-- end content page -->
  </main>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>