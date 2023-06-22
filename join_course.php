<?php
session_start();
include("config.php");

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

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
  // Jika pengguna belum login, redirect ke halaman login
  header("Location: login.php");
  exit();
}

// Periksa apakah ada parameter course ID yang dikirimkan melalui URL
if (!isset($_GET['id'])) {
  // Jika tidak ada course ID, redirect ke halaman course
  header("Location: course.php");
  exit();
}

// Dapatkan course ID dari parameter URL
$courseId = $_GET['id'];

// Query untuk mendapatkan informasi kursus berdasarkan course ID
$query = "SELECT * FROM course WHERE id = $courseId";
$result = mysqli_query($db, $query);

// Periksa apakah kursus ditemukan
if (mysqli_num_rows($result) == 0) {
  // Jika kursus tidak ditemukan, redirect ke halaman course
  header("Location: course.php");
  exit();
}

// Ambil data kursus dari hasil query
$course = mysqli_fetch_assoc($result);

// Tampilkan informasi kursus
?>

<!DOCTYPE html>
<html>

<head>
  <title>Course Detail</title>
  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">

  <!-- tailwind cdn -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <style>
    body {
      min-height: 100vh;
    }
  </style>
</head>

<body>
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
        echo '<a href="profile.php">profile</a>';
        // Jika pengguna belum login, tampilkan tombol login
        echo '<a href="login.php" class="text-white bg-yellow-200 hover:bg-yellow-300 focus:ring-yellow-400 font-medium rounded-lg text-sm px-8 ml-2 py-4 mr-2.5 mb-2">Login</a>';
      }
      ?>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <section class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">
      <div class="container mx-auto px-4 py-6 flex-grow">
        <div class="flex flex-wrap items-center justify-center gap-6">
          <div class="w-full md:w-1/2">
            <img class="w-full h-auto" src="<?php echo $course['gambar']; ?>" alt="Course Image">
          </div>
          <div class="w-full md:w-1/2 text-center">
            <h3 class="text-3xl font-semibold mb-4"><?php echo $course['nama']; ?></h3>
            <p class="text-gray-600 mb-6"><?php echo $course['deskripsi']; ?></p>
            <div class="flex flex-wrap mb-6">
              <div class="w-full md:w-1/2 lg:w-1/3">
                <p class="mb-2 text-gray-700">Durasi:</p>
                <p><?php echo $course['durasi']; ?> jam</p>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3">
                <p class="mb-2 text-gray-700">Jumlah Modul:</p>
                <p><?php echo $course['jumlah_modul']; ?></p>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3">
                <p class="mb-2 text-gray-700">Tingkat Kesulitan:</p>
                <p><?php echo $course['tingkat']; ?></p>
              </div>
            </div>
            <form action="join_course_process.php" method="POST">
              <input type="hidden" name="courseId" value="<?php echo $course['id']; ?>">
              <button type="submit" name="joinCourse" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-8 rounded mt-6">Join Course</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



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
</body>

</html>