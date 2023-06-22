<?php
session_start();

include("config.php");

$navbarLoginText = "Login"; // Teks awal untuk tautan login

$name = ''; // Mendefinisikan variabel $name

if (isset($_SESSION['loginInfo'])) {
  $loginInfo = $_SESSION['loginInfo'];

  $id = 0;
  $sql = "SELECT * FROM user WHERE id = '" . $loginInfo['id'] . "'";
  $query = mysqli_query($db, $sql);
  if (mysqli_num_rows($query)) {
    $row = mysqli_fetch_array($query);
    $name = $row['nama'];
    $id = $row['id'];
    $role = $row['role'];
  }

  if (!empty($name)) {
    $navbarLoginText = $name; // Jika nama pengguna tersedia, ganti teks dengan nama pengguna
  }

  if ($role === 'admin') {
    header("Location: admin/home.php");
    exit();
  }
}

?>

<!-- reviews end -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <!-- swipper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">

  <!-- tailwind cdn -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
  <!-- header section starts -->
  <section class="header">
    <a href="home" class="logo">E-Learning</a>

    <nav class="navbar">
      <a href="index.php">home</a>
      <a href="about.php">about</a>
      <a href="course.php">course</a>
      <?php
      if (isset($_SESSION['loginInfo'])) {
        // Jika pengguna sudah login, tampilkan nama pengguna dan logout button
        echo '<a href="profile.php" class="text-white bg-yellow-200 hover:bg-yellow-300 focus:ring-yellow-400 font-medium rounded-lg text-sm px-8 ml-2 py-4 mr-2.5 mb-2">' . $name . '</a>';
        echo '<a href="login.php" class="text-white bg-red-200 hover:bg-red-300 focus:ring-red-400 font-medium rounded-lg text-sm px-8 ml-2 py-4 mr-2.5 mb-2">Logout</a>';
      } else {
        // Jika pengguna belum login, tampilkan tombol login
        echo '<a href="login.php" class="text-white bg-yellow-200 hover:bg-yellow-300 focus:ring-yellow-400 font-medium rounded-lg text-sm px-8 ml-2 py-4 mr-2.5 mb-2">Login</a>';
      }
      ?>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- header section ends -->

  <!-- profile section start -->
  <section class="profile">
    <div class="content">
      <h3>Welcome <?php echo $name; ?></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ex nibh, mattis ut nisi ac,
        pretium feugiat nisl.
        Sed urna ligula, tincidunt vel neque tempus, luctus fermentum orci.</p>
    </div>
  </section>
  <!-- profile section ends -->

  <!-- profile's course starts -->
  <section class="packages">
    <div class="home-offer">
      <div class="content">
        <h3>Your Course</h3>
      </div>
    </div>
    <div class="box-container">
      <?php
      $userId = $_SESSION['loginInfo']['id'];
      $sql = "SELECT * FROM course c INNER JOIN course_user cu ON c.id = cu.cid WHERE cu.uid = $userId";
      $query = mysqli_query($db, $sql);
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
          echo '<div class="box bg-white rounded-lg shadow-md p-4">';
          echo '  <div class="content flex flex-col items-center">';
          echo '    <div class="">';
          echo '      <img src="' . $row['gambar'] . '" alt="Profile Picture" class="object-contain h-40">';
          echo '    </div>';
          echo '    <h3>' . $row['nama'] . '</h3>';
          echo '  </div>';
          echo '</div>';
        }
      } else {
        echo '<div class="box">';
        echo '<div class="content">';
        echo "<h3>No Course Found</h3>";
        echo '</div>';
        echo '</div>';
      }
      ?>
    </div>
  </section>
  <!-- profile's course ends -->

  <!-- profile's course ends -->


  <!-- footer section start -->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="course.php"> <i class="fas fa-angle-right"></i> course</a>
        <a href="profile.php"> <i class="fas fa-angle-right"></i> profile</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>contatc info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
        <a href="#"> <i class="fas fa-envelope"></i> eleraning@mail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Surabaya, Indonesia - 60111</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedins</a>
      </div>

    </div>

    <div class="credit">All Right Reserved</div>

  </section>
  <!-- footer section ends -->

  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- custom js file link -->
  <script src="js/script.js"></script>
</body>

</html>