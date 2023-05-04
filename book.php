<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <!-- cdnjs font awesome link. -->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS file link. -->
    <link rel = "stylesheet" href = "css/style.css">

</head>
<body>
  
<!-- Header Start. -->

<section class="header">

    <a href = "index.php" class = "logo">Holiday-planner</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="packages.php">packages</a>
        <a href="book.php">book</a>
        <a href="aboutus.php">about us</a>
        <a href="moreattractions.php">More Attractions</a>
        <a href="store.php">store</a>
        <a href="loginregister.php">login/register</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header End. -->

<div class="heading" style="background:url(images/heading.jpg) no-repeat">
    <h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">Book your Package</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>name: </span>
                <input type="text" placeholder="Enter your name" name = "name">
            </div>
            <div class="inputbox">
                <span>email: </span>
                <input type="email" placeholder="Enter your email" name = "email">
            </div>
            <div class="inputbox">
                <span>contact: </span>
                <input type="number" placeholder="Contact number" name = "contact">
            </div>
            <div class="inputbox">
                <span>number of passengers: </span>
                <input type="number" placeholder="Total passengers" name = "passengers">
            </div>
            <div class="inputbox">
                <span>departure: </span>
                <input type="text" placeholder="From" name = "departure">
            </div>
            <div class="inputbox">
                <span>arrival: </span>
                <input type="text" placeholder="To" name = "arrival">
            </div>
            <div class="inputbox">
                <span>departure city/district: </span>
                <input type="text" placeholder="City/District (NA if no City/District)" name = "departure_place">
            </div>
            <div class="inputbox">
                <span>arrival city/district: </span>
                <input type="text" placeholder="City/District (NA if no City/District)" name = "arrival_place">
            </div>
            <div class="inputbox">
                <span>departure date: </span>
                <input type="date" name = "departure_date">
            </div>
            <div class="inputbox">
                <span>arrival date: </span>
                <input type="date" name = "arrival_date">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<!-- Footer Start. -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="index.php"><i class="fa fa-home"></i>home</a>
            <a href="packages.php"><i class="fa fa-plane"></i>packages</a>
            <a href="book.php"><i class="fa fa-handshake"></i>book</a>
            <a href="about us.php"><i class="fa fa-user-circle"></i>services</a>
            <a href="attractions.php"><i class="fa fa-university"></i>More Attractions</a>
            <a href="store.php"><i class="fa fa-store"></i>Store</a>
            <a href="loginregister.php"><i class="fa fa-sign-in"></i>login/register</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fa fa-question-circle"></i>Queries</a>
            <a href="#"><i class="fa fa-phone"></i>About Us</a>
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