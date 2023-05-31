<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Attractions</title>
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

<!-- more attractions start -->
<div class="heading" style="background:url(images/heading.jpg) no-repeat">
    <h1>more attractions</h1>
</div>

<section class="attraction">
    <h1 class="heading-title">Attractions that are not available in packages</h1>
    <div class="box-container">
        
        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/tours/Kochi/Private-Houseboat-Day-Cruise-with-Lunch-from-Cochin/d952-110843P7" target="_blank">
                <img src="images/attraction1kerala.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Kerala Backwater Day Tour</h3>
                <p>from $136.12</p>
                <a href="https://www.viator.com/tours/Kochi/Private-Houseboat-Day-Cruise-with-Lunch-from-Cochin/d952-110843P7" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/tours/Singapore/Singapore-Cable-Car-Sky-Pass/d60449-57373P16" target="_blank">
                <img src="images/attraction2.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Singapore Cable Car</h3>
                <p>from $21.60</p>
                <a href="https://www.viator.com/tours/Singapore/Singapore-Cable-Car-Sky-Pass/d60449-57373P16" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/tours/Broome/Sunset-Tour-60-Minutes/d789-136518P1" target="_blank">
                <img src="images/attraction3.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Australia Broome Sunset</h3>
                <p>from $78.77</p>
                <a href="https://www.viator.com/tours/Broome/Sunset-Tour-60-Minutes/d789-136518P1" target="_blan" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-GB/tours/Vienna/Concerts-at-St-Peters-Church-Vienna-2017/d454-20099P3" target="_blank">
                <img src="images/attraction4.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Austria St. Peter's Church</h3>
                <p>from $37.75</p>
                <a href="https://www.viator.com/en-GB/tours/Vienna/Concerts-at-St-Peters-Church-Vienna-2017/d454-20099P3" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/Dubai/Dubai-Miracle-Garden-Entry-Pass/d828-270296P52" target="_blank">
                <img src="images/attraction5.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Dubai Miracle Garden</h3>
                <p>from $28</p>
                <a href="https://www.viator.com/en-SG/tours/Dubai/Dubai-Miracle-Garden-Entry-Pass/d828-270296P52" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/Paris/Bateaux-Mouches-3-Hour-Seine-River-Cruise-Including-Dinner-and-Live-Music/d479-23561P3" target="_blank">
                <img src="images/attraction6.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Paris Seine River Dinner</h3>
                <p>from $127.68</p>
                <a href="https://www.viator.com/en-SG/tours/Paris/Bateaux-Mouches-3-Hour-Seine-River-Cruise-Including-Dinner-and-Live-Music/d479-23561P3" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/Male/Maldives-Submarine-Tour/d4673-46474P1" target="_blank">
                <img src="images/attraction7.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Maldives Submarine Tour</h3>
                <p>from $80</p>
                <a href="https://www.viator.com/en-SG/tours/Male/Maldives-Submarine-Tour/d4673-46474P1" target="_blan" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/Phuket/James-Bond-Island-trip-on-Luxury-boat-Lunch-buffet-Dinner-Kayaking-Toys-DJ/d349-208505P1" target="_blank">
                <img src="images/attraction8.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Thailand James bond islands</h3>
                <p>from $142.87</p>
                <a href="https://www.viator.com/en-SG/tours/Phuket/James-Bond-Island-trip-on-Luxury-boat-Lunch-buffet-Dinner-Kayaking-Toys-DJ/d349-208505P1" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/London/ArcelorMittal-Orbit-Abseil-Experience/d737-57877P1" target="_blank">
                <img src="images/attraction9.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>London Abseil</h3>
                <p>from $83.09</p>
                <a href="https://www.viator.com/en-SG/tours/London/ArcelorMittal-Orbit-Abseil-Experience/d737-57877P1" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/New-York-City/CATACOMBS-BY-CANDLELIGHT/d687-41393P2" target="_blank">
                <img src="images/attraction10.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>New York Catacombs</h3>
                <p>from $37</p>
                <a href="https://www.viator.com/en-SG/tours/New-York-City/CATACOMBS-BY-CANDLELIGHT/d687-41393P2" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/Galle/Whales-Watching-at-Mirissa/d22288-106255P8" target="_blank">
                <img src="images/attraction11.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>sri lanka Whales watching Mirissa</h3>
                <p>from $9</p>
                <a href="https://www.viator.com/en-SG/tours/Galle/Whales-Watching-at-Mirissa/d22288-106255P8" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/en-SG/tours/Kuala-Lumpur/Full-day-Cameron-Highlands-Day-Trip-from-Kuala-Lumpur/d335-144369P41" target="_blank">
                <img src="images/attraction12.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>malaysia ameron Highlands</h3>
                <p>from $101</p>
                <a href="https://www.viator.com/en-SG/tours/Kuala-Lumpur/Full-day-Cameron-Highlands-Day-Trip-from-Kuala-Lumpur/d335-144369P41" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/tours/Fiordland-and-Milford-Sound/Milford-Sound-Sightseeing-Cruise/d756-21377P1" target="_blank">
                <img src="images/attraction13.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>new zealand Cruise Milford</h3>
                <p>from $83.53</p>
                <a href="https://www.viator.com/tours/Fiordland-and-Milford-Sound/Milford-Sound-Sightseeing-Cruise/d756-21377P1" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/tours/Vancouver/Victoria-and-Butchart-Gardens-Tour-departing-Vancouver/d616-5313P17" target="_blank">
                <img src="images/attraction14.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>Canada Victoria/Butchart Gardens</h3>
                <p>from $189.5</p>
                <a href="https://www.viator.com/tours/Vancouver/Victoria-and-Butchart-Gardens-Tour-departing-Vancouver/d616-5313P17" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <a href="https://www.viator.com/tours/Lisbon/Sintra-and-Cascais-Small-Group-Day-Trip-from-Lisbon/d538-5383SINTRACASCAIS" target="_blank">
                <img src="images/attraction15.jpg" alt="">
            </a>
            </div>
            <div class="content">
                <h3>portugal Sintra and Cascais </h3>
                <p>from $94.37</p>
                <a href="https://www.viator.com/tours/Lisbon/Sintra-and-Cascais-Small-Group-Day-Trip-from-Lisbon/d538-5383SINTRACASCAIS" target="_blank" class="btnbuy">buy</a>
            </div>
        </div>

    </div>

    <div class="loadmore"><span class="btn">load more</span></div>
</section>
<!-- more attractions end -->

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