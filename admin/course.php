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
  <title>Courses</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
  <main class="dashboard d-flex">
    <!-- start sidebar -->
    <?php include "component/sidebar.php"; ?>
    <!-- end sidebar -->
    <div class="container-fluid px-4">
      <?php include "component/header.php"; ?>

      <!-- start course list table -->
      <div class="button-add-course">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Course</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="addcourse.php" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="nama" class="col-form-label">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi" class="col-form-label">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="durasi" class="col-form-label">Durasi:</label>
                    <input type="number" class="form-control" id="durasi" name="durasi">
                  </div>
                  <div class="form-group">
                    <label for="jumlah_modul" class="col-form-label">Jumlah Modul:</label>
                    <input type="number" class="form-control" id="jumlah_modul" name="jumlah_modul">
                  </div>
                  <div class="form-group">
                    <label for="tingkat" class="col-form-label">Tingkat:</label>
                    <input type="text" class="form-control" id="tingkat" name="tingkat">
                  </div>
                  <div class="">
                    <label for="img" class="col-form-label">Gambar:</label>
                    <input type="file" class="form-control" id="img" accept=".jpg,.png,.jpeg" name="img">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Add Course</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="courses">
        <table class="table table-responsive">
          <thead>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Durasi</th>
            <th>Jumlah Modul</th>
            <th>Tingkat</th>
            <th>Gambar</th>
          </thead>
          <tbody>
            <?php
            include '../config.php';
            $query = "SELECT * FROM course";
            $result = $db->query($query);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['deskripsi']; ?></td>
                  <td><?php echo $row['durasi']; ?></td>
                  <td><?php echo $row['jumlah_modul']; ?></td>
                  <td><?php echo $row['tingkat']; ?></td>
                  <!-- <td><?php echo $row['gambar']; ?></td> -->
                  <td class=""><img src="../<?php echo $row['gambar']; ?>" alt="img" height="50" with="50"></td>
                </tr>
            <?php
              }
            } else {
              echo "<tr><td colspan='6'>No courses found</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- end content page -->
  </main>

  <script src="js/script.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>