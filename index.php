<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- cdnjs font awesome link. -->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS file link. -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  
<!-- Header Start. -->

<section class="header">

    <a href ="index.php" class = "logo">Holiday-planner</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="packages.php">packages</a>
        <a href="book.php">book</a>
        <a href="moreattractions.php">More Attractions</a>
        <a href="store.php">store</a>
        <a href="aboutus.php">about us</a>
        <span id="login-link-container"><a href="#" id="login-link">Login/register</a></span>
        <a style="display: none;" id="welcome-user">Welcome, <span id="username"></span></a>
        <a href="#" style="display: none;" id="logout-link">Logout</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header End. -->

<!-- login register start -->

<section class="loginregister">
    <div id="auth-modal" style="display: none;">
        <h1>Holiday-Planner</h1>
        <div id="auth-tabs">
            <button id="login-tab" class="active">Login</button>
            <button id="register-tab">Register</button>
        </div>
        <form id="login-form">
            <div>
                <input id="login-username" type="text" placeholder="Username" required>
                <input id="login-password" type="password" placeholder="Password" required>
            </div>
            <button type="submit" class="auth-button">Login</button>
        </form>
        
        <form id="register-form" style="display: none;">
            <div>
                <label for="register-fullname">Full Name:</label>
                <input type="text" id="register-fullname" required>
                <label for="register-username">Username:</label>
                <input type="text" id="register-username" required>
                <label for="register-password">Password:</label>
                <input type="password" id="register-password" required>
                <label for="register-contact">Contact Number:</label>
                <input type="text" id="register-contact" required>
            </div>
            <button class="auth-button">Register</button>
        </form>        
            
    </div>
</section>

<!-- login register end -->

<!-- Home Section Start. -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/homeslider1.jpg) no-repeat">
                <div class="content">
                    <span>Travel, Explore and Discover</span>
                    <h3>Travel across the world</h3>
                    <a href="book.php" class="btn">Travel</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/homeslider2.jpg) no-repeat">
                <div class="content">
                    <span>Travel, Explore and Discover</span>
                    <h3>Explore Countries</h3>
                    <a href="book.php" class="btn">Explore</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/homeslider3.jpg) no-repeat">
                <div class="content">
                    <span>Travel, Explore and Discover</span>
                    <h3>Discover New things</h3>
                    <a href="book.php" class="btn">Discover</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!-- Home section End. -->

<!-- Packages In Home Start -->

<section class="home-packages">
    <h1 class="packages-title">Our Packages</h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/packages1.jpg" alt="">
            </div>
            <div class="content">
                <h3>India</h3>
                <p>from $379</p>
                <a href="packagesknowmore.php#India" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">Book Trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Singapore</h3>
                <p>From $419</p>
                <a href="packagesknowmore.php#Singapore" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">Book Trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Australia</h3>
                <p>From $469</p>
                <a href="packagesknowmore.php#Australia" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">Book Trip</a>
            </div>
        </div>

    </div>

    <div class="loadmore">
        <a href="packages.php" class ="btn">Check More</a>
    </div>

</section>

<!-- Packages In Home End -->

<!-- Birthday Special Sign Up Start -->

<section class="home-sign-up">
    <div class="image">
        <img src="images/birthdayspecial.PNG" alt="">
    </div>
    <div class="content">
        <h3>Birthday Special</h3>
        <p>Sign Up for the Birthday Special newsletter to get 50% Off on packages travelling during your Birthday week.</p>
        <a href="signup.php" class="btn">Sign Up for Birthday Special off!</a>
    </div>
</section>

<!-- Birthday Special Sign up End -->

<!-- Packages Inlude Start -->

<div class="packagesinclude">
    <h1 class="packages-title">our Packages Include </h1>
    <div class="box-container">

        <div class="box">
            <img src="images/flights.png" alt="">
            <h3>Flight Tickets</h3>
        </div>

        <div class="box">
            <img src="images/hotel.png" alt="">
            <h3>Accommodation</h3>
        </div>

        <div class="box">
            <img src="images/visa.png" alt="">
            <h3>Visa</h3>
        </div>

    </div>
</div>

<!-- Packages Inlude End -->

<!-- Services Start. -->

<div class="services">
    <h1 class="services-title"> Our Services </h1>
    <div class="box-container">

        <div class="box">
            <img src="images/touristattraction.png" alt="">
            <h3>Tourist Attraction</h3>
        </div>

        <div class="box">
            <img src="images/tourguide.png" alt="">
            <h3>Tour Guide</h3>
        </div>

        <div class="box">
            <img src="images/Hiking.png" alt="">
            <h3>Hiking</h3>
        </div>

        <div class="box">
            <img src="images/cycling.png" alt="">
            <h3>Cycling</h3>
        </div>

        <div class="box">
            <img src="images/Campfire.png" alt="">
            <h3>Campfire</h3>
        </div>

    </div>
</div>

<!-- Services End -->

<!-- About Website Start -->

<section class="home-about-us">
    <div class="image">
        <img src="images/test.jpg" alt="">
    </div>
    <div class="content">
        <h3>About Us</h3>
        <p>Holiday Planner, We Specialize In Tailor-Made Vacations, Offering Personalized Experiences That Cater To Your Unique Interests And Preferences. Our Expert Travel Consultants Work Closely With You To Craft Bespoke Itineraries, Ensuring An Unforgettable Journey That Captures The Essence Of Your Dream Destination.</p>
        <a href="#" class="btn">Know More</a>
    </div>
</section>

<!-- About Website End -->

<!-- Footer Start. -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="index.php"><i class="fa fa-home"></i>home</a>
            <a href="packages.php"><i class="fa fa-plane"></i>packages</a>
            <a href="book.php"><i class="fa fa-handshake"></i>book</a>
            <a href="moreattractions.php"><i class="fa fa-university"></i>More Attractions</a>
            <a href="store.php"><i class="fa fa-store"></i>Store</a>
            <a href="aboutus.php"><i class="fa fa-user-circle"></i>About Us</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="signup.php"><i class="fa fa-cake-candles"></i>Birthday Special sign up</a>
            <a href="#"><i class="fa fa-question-circle"></i>Queries</a>
            <a href="#"><i class="fa fa-user-secret"></i>Privacy Policy</a>
            <a href="#"><i class="fa fa-address-card"></i>Terms And Conditions</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fa fa-phone"></i>+91 1234567890</a>
            <a href="#"><i class="fa fa-phone"></i>+65 12345678</a>
            <a href="#"><i class="fa fa-envelope"></i>HolidayPlanner@JCU-SG</a>
            <a href="#"><i class="fa fa-envelope"></i>HolidayPlanner@JCU-AU</a>
            <a href="#"><i class="fa fa-map-marker"></i>JCU-SG 387380</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        </div>

    </div>
</section>

<!-- Footer End -->

<!-- Swiper JS link. -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Custome JS file link. -->
<script src = "js/script.js"></script>

</body>
</html>