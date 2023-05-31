<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

<!-- Sign Up Start -->

    <div class="form_1">

<div class="sign_up">
    <h1>Birthday Specials Signup</h1>
    <form onsubmit="return validateForm()" action="signup_complete.php" method="post">
    <div class="form_size">Name*  </div>
      <label for="name"></label>
      <input class="fix_height" type="text" id="name" size="115" name="name" placeholder="E.g. Sallu Bhai" required>
      <label id="Uname"> Invalid</label>

    <div class="form_size"> Email*</div>
      <label for="email"></label>
      <input class="fix_height" type="text" id="email" size="115" name="email" placeholder="E.g. SalluBhai@gmail.com"  required>
      <label id="Uname"> Invalid</label>

    <div class="form_size">Birthday Off:</div>
        <!-- <input type="checkbox" id="product" name="product1" value="#"> -->
        <label class="off" for="product1">50% OFF on flight tickets</label><br>

    <div class="form_size">Choose what you are intrested on and like to be notified on</div>

      <input type="checkbox" id="product" name="product1" value="Flights Offer">
      <label class="Flights_Offer" for="product1">Flights Offer</label><br>
      <input type="checkbox" id="product" name="product2" value="Packages">
      <label class="Packages" for="product2">Packages</label><br>
      <input type="checkbox" id="product" name="product3" value="Visa Offers">
      <label class="Visa_Offers" for="product3">Visa Offers</label><br>
      <input type="checkbox" id="product" name="product4" value="Accomidation Offers">
      <label class="Accomidation_Offers" for="product4">Accomidation Offers</label><br>

      <div class="form_size">Birthday*</div>
        <lable for="birth" class="day">Day</lable>
        <input class="fix_width" type="number" id="birth_day" name="birth_day"  value="" oninput="if(value>31)value=31;if(value<1)value=1" required>&nbsp;&nbsp;
        <lable class="month" for="birth">Month</lable>
        <input class="fix_width"type="number" id="birth_month" name="birth_month"  value="" oninput="if(value>12)value=12;if(value<1)value=2" required>

        <div class="agree">
					<input type="checkbox" id="agree" name="agree" required>
					<lable for="agree">I agree to be added to the Holiday-planner email list.</lable>
        </div>
		<button class="btnbuy" type="submit">Send</button>
    </form>

</div>
</div>

<!-- Sign Up End -->

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