<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know More About Packages</title>
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

<!-- Packages know more start -->
<div class="heading" style="background:url(images/heading.jpg) no-repeat">
    <h1>know more about the packages</h1>
</div>

<div class="locations">
<div class="location" id="India">
    <h2>India</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: The Oberoi Amarvilas, Hotel Clarks Shiraz, Zostel Agra</li>
      <li>Attractions: Taj Mahal, Qutub Minar, Red Fort, Jaipur City Palace, Amber Fort, Humayun's Tomb, Mehtab Bagh</li>
    </ul>
</div>

<div class="location" id="Singapore">
    <h2>Singapore</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: Marina Bay Sands, Hotel G Singapore, Capsule Pod Boutique Hostel</li>
      <li>Attractions: Gardens by the Bay, Sentosa Island, Marina Bay Sands, Merlion Park, Orchard Road, Chinatown, Universal Studios Singapore</li>
    </ul>
</div>

<div class="location" id="Australia">
    <h2>Australia (Sydney)</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: Park Hyatt Sydney, Meriton Suites Kent Street, Sydney Harbour YHA</li>
      <li>Attractions: Sydney Opera House, Sydney Harbour Bridge, Bondi Beach, Darling Harbour, The Rocks, Royal Botanic Garden Sydney, Queen Victoria Building</li>
    </ul>
</div>

<div class="location" id="Austria">
    <h2>Austria (Vienna)</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: Hotel Sacher Wien, 25hours Hotel beim MuseumsQuartier, Wombats City Hostel Vienna</li>
      <li>Attractions: Schönbrunn Palace, St. Stephen's Cathedral, Vienna State Opera, Belvedere Palace, Hofburg, Prater, Albertina</li>
    </ul>
</div>

<div class="location" id="Dubai">
    <h2>Dubai</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: Burj Al Arab Jumeirah, Hilton Dubai Jumeirah, Marina View Hotel Apartments</li>
      <li>Attractions: Burj Khalifa, Dubai Mall, Palm Jumeirah, Dubai Creek, The Dubai Fountain, Jumeirah Mosque, Dubai Frame</li>
    </ul>
</div>

<div class="location" id="Paris">
    <h2>Paris</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: The Ritz Paris, Hotel de France Quartier Latin, The Loft Boutique Hostel</li>
      <li>Attractions: Eiffel Tower, Louvre Museum, Notre-Dame Cathedral, Champs-Élysées, Montmartre, Palace of Versailles, Sainte-Chapelle</li>
    </ul>
</div>

<div class="location" id="Maldives">
    <h2>Maldives</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: Gili Lankanfushi Maldives, Hotel Ocean Grand at Hulhumale, UI Inn</li>
      <li>Attractions: Malé Atoll, Ari Atoll, Underwater snorkeling and diving sites, Maafushi Island, Thulusdhoo Island</li>
    </ul>
</div>

<div class="location" id="Thailand">
    <h2>Thailand</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: Mandarin Oriental, Bangkok, ibis Styles Bangkok Khaosan Viengtai, Here Hostel</li>
      <li>Attractions: Grand Palace, Wat Arun, Wat Phra Kaew, Chatuchak Weekend Market, Elephant Nature Park, Doi Suthep, Chiang Mai Night Bazaar</li>
    </ul>
</div>

<div class="location" id="London">
    <h2>London</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: The Savoy, Premier Inn London City, Generator Hostel London</li>
      <li>Attractions: British Museum, Buckingham Palace, Tower of London, London Eye, The Shard, Hyde Park, Tower Bridge</li>
    </ul>
</div>

<div class="location" id="Newyork">
    <h2>New York</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: The Plaza, The Pod 51, HI NYC Hostel</li>
      <li>Attractions: Central Park, Times Square, Statue of Liberty, Empire State Building, Metropolitan Museum of Art, Broadway, Rockefeller Center</li>
    </ul>
</div>

<div class="location" id="Srilanka">
    <h2>Sri Lanka</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: Shangri-La Hotel, Colombo, OZO Colombo, Clock Inn Colombo</li>
      <li>Attractions: Temple of the Tooth, Royal Botanical Gardens, Unawatuna Beach, Galle Fort, Gangaramaya Temple, National Museum of Colombo, Kandy Lake</li>
    </ul>
</div>

<div class="location" id="Malaysia">
    <h2>Malaysia</h2>
    <ul>
      <li>Flight ticket</li>
      <li>Visa</li>
      <li>Accommodations: The Majestic Hotel Kuala Lumpur, Hotel Sentral Kuala Lumpur, BackHome Kuala Lumpur</li>
      <li>Attractions: Petronas Towers, Batu Caves, KLCC Park, Jalan Alor, Merdeka Square, George Town, Penang Hill</li>
    </ul>
</div>
</div>
<!-- Packages know more end -->

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