<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $room_type = $_POST["room_type"];
    
    // Connect to database (you need to replace these with your database credentials)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "hotel_reservation";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Insert data into database
    $sql = "INSERT INTO reservations (name, email, checkin, checkout, room_type)
    VALUES ('$name', '$email', '$checkin', '$checkout', '$room_type')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation made successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
