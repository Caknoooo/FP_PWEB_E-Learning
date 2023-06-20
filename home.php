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

    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slides-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slides-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slides-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
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
                <img src="images/" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends -->

    <!-- home about section starts -->

    <section class="home-about">
        <div class="image">
            <img src="images/home-about.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, necessitatibus mollitia vitae, voluptatum
                sapiente esse, nesciunt magnam error ex laudantium ullam. Necessitatibus iusto modi aliquid natus fuga!
                Inventore, vel! Quaerat?</p>
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
                    <img src="images/img-1.jpg">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adip</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adip</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>lorem ipsum dolor sit amet, consectetur adip</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

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