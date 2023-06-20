<?php include('config.php'); ?>

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
</head>

<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home" class="logo">E-Learning</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="course.php">course</a>
            <a href="profile.php">profile</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <!-- profile section start -->
    <section class="profile">
        <div class="content">
            <h3>Weclome ...user...<h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ex nibh, mattis ut nisi ac,
                        pretium
                        feugiat nisl.
                        Sed urna ligula, tincidunt vel neque tempus, luctus fermentum orci.</p>
        </div>
    </section>
    <!-- profile section ends -->

    <!-- profile's course starts -->


    <?php
    $sql = "SELECT * FROM course";
    // cari yang telah diambil user
    $query = mysqli_query($db, $sql);
    ?>
    <section class="packages">
        <div class="home-offer">
            <div class="content">
                <h3>Your Course</h3>
            </div>
        </div>
        <div class="box-container">
            <?php
            while ($courses = mysqli_fetch_array($query)) {
                echo '<div class="box">';
                echo '<div class="content">';
                echo "<h3>" . $courses['nama'] . "</h3>";
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
    <!-- profile's course ends -->


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