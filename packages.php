<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
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

<!-- packages content start -->

<div class="heading" style="background:url(images/heading.jpg) no-repeat">
    <h1>packages</h1>
</div>

<section class="packages">
    <h1 class="heading-title">popular destinations</h1>
    <div class="box-container">
        
        <div class="box">
            <div class="image">
                <img src="images/packages1.jpg" alt="">
            </div>
            <div class="content">
                <h3>India</h3>
                <p>from $399</p>
                <a href="packagesknowmore.php#India" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Singapore</h3>
                <p>from $499</p>
                <a href="packagesknowmore.php#Singapore" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Australia</h3>
                <p>from $559</p>
                <a href="packagesknowmore.php#Australia" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Austria</h3>
                <p>from $349</p>
                <a href="packagesknowmore.php#Austria" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages5.jpg" alt="">
            </div>
            <div class="content">
                <h3>Dubai</h3>
                <p>from $469</p>
                <a href="packagesknowmore.php#Dubai" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Paris</h3>
                <p>from $739</p>
                <a href="packagesknowmore.php#Paris" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages7.jpg" alt="">
            </div>
            <div class="content">
                <h3>Maldives</h3>
                <p>from $599</p>
                <a href="packagesknowmore.php#Maldives" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Thailand</h3>
                <p>from $399</p>
                <a href="packagesknowmore.php#Thailand" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages9.jpg" alt="">
            </div>
            <div class="content">
                <h3>London</h3>
                <p>from $789</p>
                <a href="packagesknowmore.php#London" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages10.jpg" alt="">
            </div>
            <div class="content">
                <h3>New york</h3>
                <p>from $999</p>
                <a href="packagesknowmore.php#Newyork" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages11.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sri lanka</h3>
                <p>from $299</p>
                <a href="packagesknowmore.php#Srilanka" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages12.jpg" alt="">
            </div>
            <div class="content">
                <h3>Malaysia</h3>
                <p>from $489</p>
                <a href="packagesknowmore.php#Malaysia" class="knowmore">know more</a> <br>
                <a href="book.php" class="btn">book trip</a>
            </div>
        </div>

    </div>

    <div class="loadmore"><span class="btn">load more</span></div>
</section>

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
<!-- packages content end -->

<!-- Footer End -->

<!-- Swiper JS link. -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Custome JS file link. -->
<script src = "js/script.js"></script>

</body>
</html>