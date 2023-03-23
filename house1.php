<?php
    require_once('functionsLoggedIn.php');
 
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now", "logout.php" => "Logout", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

    <!--Imges showcasing some to the apartment features.  -->
<main id = "house-container">
    <div class = "house-description"> 
        <img src="images/home.jpg" alt="house 1">
    </div>
    <!-- Lorem ipsim text as place holder for apartment description -->
    <div class = "house-description">
        <p>
        Donec sed eros id purus malesuada eleifend. Mauris et elit est. Suspendisse nec nibh lectus. Cras a pharetra quam. 
        Praesent ac pellentesque neque, ut sodales felis. 
        <br>
        Donec faucibus erat tempor magna rutrum semper. 
        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        <br>
        Praesent mi ex, porttitor a ex nec, placerat eleifend felis. Vivamus lobortis nunc consectetur, imperdiet ex sed, elementum mi.
        </p>
    </div>

    <!--Imges showcasing some to the apartment features.  -->
    <div class = "middle-image">
        <img src="images/study 1.jpg" alt="Study">
    </div>

    <!-- Lorem ipsim text as place holder for apartment description -->
    <div class = "house-description">
        <p>
            Donec sed eros id purus malesuada eleifend. Mauris et elit est. Suspendisse nec nibh lectus. Cras a pharetra quam. 
            <br>
            Praesent ac pellentesque neque, ut sodales felis. Donec faucibus erat tempor magna rutrum semper. 
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            Praesent mi ex, porttitor a ex nec, placerat eleifend felis. Vivamus lobortis nunc consectetur, imperdiet ex sed, elementum mi.
        </p>
    </div>

    <!--Imges showcasing some to the apartment features.  -->
    <div class = "bottom-image">
        <img src="images/bedroom 1.jpg" alt="Bedroom 1">
    </div>
</main>

<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses', 'booking.php' => 'Make a Booking', 'about.php' => 'About Us', "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>