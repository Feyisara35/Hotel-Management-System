
<?php
    require_once('functionsLoggedIn.php');
 
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now", "logout.php" => "Logout", "referencepage.php" => "Reference Page"));
    
    echo startMain();

?>

<!--The database login information is inputted to get a connection to the database instead of using a prepared statement to prevent database hijacking. 
  This is not bestpractise however I was unable to connect to the database using the prepared statement. 
-->

<?php

$conn = new mysqli('localhost', 'unn_w21042395', 'Longlife@35', 'unn_w21042395');

$accommodationID = $_POST['accommodationID'];
$customerID = $_POST['customerID'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$num_guests = $_POST['num_guests'];

// Input users reservation details into the reservation table in the database after sucessful connection and validation.

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT into reservations(accommodationID, customerID, start_date, end_date, num_guests) values(?, ?, ?, ?, ?)");
    $dt = date("Y-m-d H:i:s");
    $stmt->bind_param('iiddi', $accommodationID, $customerID, $start_date, $end_date, $num_guests);
    $stmt->execute();
    echo '<div class = "booking-page"> <p> RESERVATION SUCESSFULL!</p>
    </div>';
    $stmt->close();
    $conn->close();

}
?>

<script src = "bookingValidation.js"></script>
<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now","logout.php" => "Logout", "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>