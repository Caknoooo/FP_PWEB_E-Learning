<?php
session_start();

include("config.php");

$navbarLoginText = "Login"; // Teks awal untuk tautan login

if (isset($_SESSION['loginInfo'])) {
  $loginInfo = $_SESSION['loginInfo'];

  $name = '';
  $id = 0;
  $sql = "SELECT * FROM user WHERE id = '" . $loginInfo['id'] . "'";
  $query = mysqli_query($db, $sql);
  if (mysqli_num_rows($query)) {
    $row = mysqli_fetch_array($query);
    $name = $row['nama'];
    $id = $row['id'];
  }

  if (!empty($name)) {
    $navbarLoginText = $name; // Jika nama pengguna tersedia, ganti teks dengan nama pengguna
  }
}

?>

<!-- reviews end -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

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
      <a href="home.php">home</a>
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

  <!-- home section starts -->
  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background:url(images/home-slides-4.jpg) no-repeat">
          <div class="content">
            <span>Explore your brain</span>
            <h3>Recipes tell you nothing. Learning techniques is the key.</h3>
            <a href="package.php" class="btn">Let's Go!</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slides-5.jpg) no-repeat">
          <div class="content">
            <span>Explore your brain</span>
            <h3>Recipes tell you nothing. Learning techniques is the key.</h3>
            <a href="package.php" class="btn">Let's Go!</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slides-6.jpg) no-repeat">
          <div class="content">
            <span>Explore your brain</span>
            <h3>Recipes tell you nothing. Learning techniques is the key.</h3>
            <a href="package.php" class="btn">Let's Go!</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

  </section>
  <!-- home section ends -->

  <!-- services section starts -->
  <section class="services">
    <h1 class="heading-title"> our services </h1>

    <div class="box-container">
      <div class="box">
        <img src="images/dart.png" alt="" class="h-full w-full">
        <h3>Dart</h3>
      </div>
      <div class="box">
        <img src="images/javascript.png" alt="" class="h-full w-full">
        <h3>Javascript</h3>
      </div>
      <div class="box">
        <img src="images/c.jpg" alt="" class="h-full w-full">
        <h3>C/C++</h3>
      </div>
      <div class="box">
        <img src="images/python.png" alt="" class="h-full w-full">
        <h3>Python</h3>
      </div>
      <div class="box">
        <img src="images/nextjs.jpg" alt="" class="h-full w-full">
        <h3>Next Js</h3>
      </div>
      <div class="box">
        <img src="images/laravel.png" alt="" class="h-full w-full">
        <h3>Laravel</h3>
      </div>
    </div>
  </section>
  <!-- services section ends -->

  <!-- home about section starts -->

  <section class="home-about">
    <div class="image">
      <img src="images/icon_se.jpg" alt="">
    </div>

    <div class="content">
      <h3>Software Engineering</h3>
      <p>software engineer adalah orang yang menggunakan ilmu komputer, prinsip-prinsip teknik dan pemrograman untuk membuat aplikasi software.</p>
      <a href="about.php" class="btn">read more</a>
    </div>

  </section>

  <!-- home about section ends -->

  <!-- home packages start -->
  <section class="home-packages">

    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/icon_py.jpg" class="object-contain h-30">
        </div>
        <div class="content">
          <h3>Python Bootcamp From Zero to Hero in Python</h3>
          <p>Take your Python skills to the next level with our Python 3.10 For Advanced course. Explore advanced concepts and techniques to become a proficient Python developer.</p>
          <a href="course.php" class="btn">Join now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/icon_py2.jpg" class="object-contain h-30">
        </div>
        <div class="content">
          <h3>Mastery Bootcamp Python For Beginners</h3>
          <p>Start your journey into the world of programming with our Mastery Bootcamp Python For Beginners. Learn the fundamentals and build a solid foundation in Python.</p>
          <a href="course.php" class="btn">Join now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/java.jpg" class="object-contain h-30">
        </div>
        <div class="content">
          <h3>Unleash Your Potential with Java Programming</h3>
          <p>Dive into the realm of Java programming and unleash your creativity. Master the language that powers countless applications and open up endless opportunities.</p>
          <a href="course.php" class="btn">Join now</a>
        </div>
      </div>
    </div>

    <div class="load-more"><a href="course.php" class="btn">load more</a></div>

  </section>

  <!-- home packages end -->


  <!-- home partenr start -->

  <section class="home-offer">
    <div class="content">
      <h3>our partners</h3>
    </div>
    <div class="box-container">
      <?php
      include("./config.php");

      $sql_get_pesan = "SELECT gambar_logo FROM partners";

      $pesans = mysqli_query($db, $sql_get_pesan);

      while ($row = mysqli_fetch_array($pesans)) {
        echo '<div class="box">';
        echo ' <div class="image"> <img src="' . $row['gambar_logo'] . '.png"> </div>';
        echo ' </div>';
      }
      ?>
    </div>

  </section>

  <!-- home partner end -->

  <!-- footer section start -->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
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