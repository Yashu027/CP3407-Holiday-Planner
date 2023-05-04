<?php
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $passengers = $_POST['passengers'];
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
        $departure_place = $_POST['departure_place'];
        $arrival_place = $_POST['arrival_place'];
        $departure_date = $_POST['departure_date'];
        $arrival_date = $_POST['arrival_date'];

        $request = "insert into book_form(name, email, contact, passengers, departure, arrival, departure_place, arrival_place, departure_date, arrival_date) values
        ('$name', '$email', '$contact', '$passengers', '$departure', '$arrival', '$departure_place', '$arrival_place', '$departure_date', '$arrival_date')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'Something went wrong try again';
    }
?>