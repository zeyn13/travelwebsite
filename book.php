<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book</title>

    <!-- swiper css link  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section -->
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

    <div class="heading" style="background: url(img/header-bg-3.png) no-repeat">
      <h1>Book now</h1>
    </div>

    <!-- booking section -->

    <section class="booking">
      <h1 class="heading-title">Book your trip !</h1>

      <form action="#">
        <div class="flex">
          <div class="inputbBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter your name" name="name" />
          </div>
          <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Enter your email" name="email" />
          </div>
          <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="Enter your number" name="phone" />
          </div>
          <div class="inputBox">
            <span>Address :</span>
            <input
              type="text"
              placeholder="Enter your address"
              name="address"
            />
          </div>
          <div class="inputBox">
            <span>Where to :</span>
            <input
              type="text"
              placeholder="Place you want to visit"
              name="location"
            />
          </div>
          <div class="inputBox">
            <span>How many :</span>
            <input type="number" placeholder="Number of guests" name="guests" />
          </div>
          <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrivals" />
          </div>
          <div class="inputBox">
            <span>Leaving :</span>
            <input type="date" name="Leaving" />
          </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send" />
      </form>
    </section>
  </body>
</html>
