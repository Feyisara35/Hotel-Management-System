<?php
    require_once('functionsLoggedIn.php');
 
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now","logout.php" => "Logout", "referencepage.php" => "Reference Page"));

    echo startMain();

?>
<!-- Collect validated user information for account creation. -->
<main>
    <div id = "booking-container">
        <h2>BOOKING PAGE</h2>

        <form novalidate action="bookingPage.php" method = "POST" id = "bookingForm">
            <label for="accommodationID">Accomodation</label>
            <input type="text" name = "accommodationID" id = "accommodationID" maxlength="8" required pattern = "[0-9][10]">


            <br>
            <br>
        <label for="customerID">Customer ID Number:</label>
            <input type="text" name = "customerID" id = "customerID" maxlength="8" required pattern = "[0-9][10]">

            <br>
            <br>
            <label for="start_date">Reservation Start Date</label>
            <input type="datetime-local" min = "2022-01-01" name = "start_date" id = "start_date" required>

            <br>
            <br>
            <label for="start_date">Reservation End Date</label>
            <input type="datetime-local" min = "2022-01-01" name = "end_date" id = "end_date" required>

            <br>
            <br>

            <label for="num_guests">Number of Guests</label>
            <input type="text"  name= "num_guests" id = "num_guests" maxlength="8" required pattern = "[0-9][10]">

            <br>
            <br>
            <input type="submit" name = "submit"  value = "Book Now">
            <span id = "error"></span>
        </form>
        <script src = "bookingValidation.js"></script>
    </div>
    
</main>

<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses', 'booking.php' => 'Make a Booking','about.php' => 'About Us', "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>