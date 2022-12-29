<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

     <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header starts -->
    <section class="header">

        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="logout.php">Logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header ends -->

    <!-- home section -->
    <section class="home">

        <div class="swiper home-slider">
     
           <div class="swiper-wrapper">
     
              <div class="swiper-slide slide" style="background:url(img/home-slide-1.jpg) no-repeat">
                 <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel arround the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                 </div>
              </div>
     
              <div class="swiper-slide slide" style="background:url(img/home-slide-2.jpg) no-repeat">
                 <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Discover the new places</h3>
                    <a href="package.php" class="btn">Discover more</a>
                 </div>
              </div>
     
              <div class="swiper-slide slide" style="background:url(img/home-slide-3.jpg) no-repeat">
                 <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Make your tour worthwhile</h3>
                    <a href="package.php" class="btn">Discover more</a>
                 </div>
              </div>
              
           </div>
     
           <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
     
        </div>
     
     </section>
   

    <!-- services section -->

    <section class="services">
        <h1 class="heading-title">Our Services</h1>

        <div class="box-container">
            <div class="box">
                <img src="img/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="img/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="img/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="img/icon-4.png" alt="">
                <h3>Camp fire</h3>
            </div>

            <div class="box">
                <img src="img/icon-5.png" alt="">
                <h3>Off road</h3>
            </div>

            <div class="box">
                <img src="img/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>

    <!-- home about section -->

    <section class="home-about">

        <div class="image">
            <img src="img/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perspiciatis architecto illum animi a quos magni repellat inventore sequi, sapiente eum ipsum veniam dolorum dolorem tempora non quae consectetur dolor!</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </section>

    <!-- home packages section -->

    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur quaerat veniam quod asperiores animi iste, laudantium repellendus esse molestias ullam explicabo ex. Laudantium doloribus consequuntur id, aut aperiam numquam eaque!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione molestiae, vero delectus voluptatum accusantium iure exercitationem quae cupiditate maxime ea veniam sapiente. Aliquid tempora, libero qui dicta vitae distinctio esse.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione molestiae, vero delectus voluptatum accusantium iure exercitationem quae cupiditate maxime ea veniam sapiente. Aliquid tempora, libero qui dicta vitae distinctio esse.</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"> <a href="package.php" class="btn">Load more</a> </div>
    </section>

    <!-- home offer section -->

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum accusamus sequi doloremque harum possimus sed sapiente id, veniam, reprehenderit excepturi, deleniti vel error necessitatibus nulla. Perferendis natus numquam temporibus voluptate?</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>


    <!-- footer section -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +383 46-589-478</a>
                <a href="#"><i class="fas fa-phone"></i>+383 44-665-965</a>
                <a href="#"><i class="fas fa-envelope"></i>johndenny@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Prizren, KOSOVO - 20000</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>

        <div class="credit">Created by me | all rights reserved !</div>
    </section>


    <!-- js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="javascript.js"></script>
</body>
</body>
</html>