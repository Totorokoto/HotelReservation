<!DOCTYPE html>
<html>
<head>
    <title>Choose Room</title>
    <link rel="stylesheet" type="text/css" href="Rstyle.css">
</head>
<body>

<div class="container">
    <h2>Choose Your Room</h2>
    <?php
    $room_type = $_POST['room_type'];
    echo "<p>You selected: $room_type</p>";
    ?>
    <p>Please choose a room from the available options below:</p>
    <ul>
        <?php
        // You can fetch room information from your database and display it here
        // For now, we'll just show some example rooms
        if ($room_type == 'Single') {
            echo "<li>Room 101</li>";
            echo "<li>Room 102</li>";
            echo "<li>Room 103</li>";
        } elseif ($room_type == 'Double') {
            echo "<li>Room 201</li>";
            echo "<li>Room 202</li>";
            echo "<li>Room 203</li>";
        } elseif ($room_type == 'Suite') {
            echo "<li>Suite 301</li>";
            echo "<li>Suite 302</li>";
            echo "<li>Suite 303</li>";
        } else {
            echo "<li>No rooms available for the selected type</li>";
        }
        ?>
    </ul>
</div>

<div class="footer">
    <p>Hotel Reservation System - &copy; 2024</p>
</div>

</body>
</html>
