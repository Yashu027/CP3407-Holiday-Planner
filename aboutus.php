<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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


<div class="heading" style="background:url(images/heading.jpg) no-repeat">
    <h1>about us</h1>
</div>

<section class="about">
    <div class="image">
        <img src="images/homeslider3.jpg" alt="">
    </div>
    <div class="content">
        <h3>why us?</h3>
        <p>Welcome to Holiday Planner, your go-to travel partner for unforgettable journeys! As a team of avid travelers, we appreciate 
            the joy and memories that come with exploring the world. Our mission is to help you experience the finest adventures our 
            planet has to offer, all within your budget. At Holiday Planner, we specialize in tailor-made vacations, offering 
            personalized experiences that cater to your unique interests and preferences. Our expert travel consultants work closely 
            with you to craft bespoke itineraries, ensuring an unforgettable journey that captures the essence of your dream destination. 
            Embrace the excitement of new adventures with Holiday Planner, where we transform ordinary trips into extraordinary experiences.</p>
        <p>Join us at Holiday Planner and turn your travel dreams into reality. we strive to make your travel dreams a reality. Embark 
            on a journey with us, and let the adventure begin!</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-dollar"></i>
                <span>budget friendly</span>
            </div>
            <div class="icons">
                <i class="fas fa-map-location-dot"></i>
                <span>great destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 services</span>
            </div>
            <div class="icons">
                <i class="fas fa-user"></i>
                <span>expert guidance</span>
            </div>
        </div>
    </div>
</section>

<!-- Customer Feedback Starts -->

<section class="feedbacks" id="feedbacks">
    <h1><div class="heading-title">Customer Feedbacks</div></h1>

    <div class="box-container container">
        <div class="box">
            <img src="images/customer2.jpg" alt="">
            <p>Your website provided me with a wide range of options for hotels and flights. I appreciated the detailed descriptions and reviews from other travelers, which helped me make an informed decision.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Khyathi</h3>
            <span>Service is satisfying</span>
        </div>

        <div class="box">
            <img src="images/customer1.jpg" alt="">
            <p>I had an incredible experience using your travel website. The user interface was intuitive, and I found it easy to navigate and book my flights and accommodations. Just Amazing.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Chaitanya</h3>
            <span>Best service ever</span>
        </div>

        <div class="box">
            <img src="images/customer3.jpg" alt="">
            <p>I had a wonderful experience using your travel website to book a vacation package. The ability to bundle flights, accommodations, and activities saved me time and money</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rishika</h3>
            <span>Smooth Service</span>
        </div>
    </div>
</section>

<!-- Customer Feedback End -->

<!-- Footer Start. -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fa fa-home"></i>home</a>
            <a href="packages.php"><i class="fa fa-plane"></i>packages</a>
            <a href="book.php"><i class="fa fa-handshake"></i>book</a>
            <a href="attractions.php"><i class="fa fa-university"></i>More Attractions</a>
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