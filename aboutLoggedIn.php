<?php
    require_once('functionsLoggedIn.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now", "logout.php" => "Logout", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

<main>
    <!-- The 'about-container' div class contains the the the About-us Introductor images -->
    <div id= "about-container">
        <img  src="images/about.jpg" alt="aboutUs">
    </div>

    <div id = "description-container">
        <!-- The about us decription container paragraphs contains a brief introduction about the Fayo accomodation -->
        <p>
            FAYO is a self-catering apartment located in Lagos, Nigeria designed to be your home away from home.
            <br>
			Established in 2020 FAYO has catered to over 100 individuals, families, and business people.
            <br>
			As a 4-star rated establishment, we have a range of affordable and luxury apartments suited to meet your needs.
        </p>
    </div>
</main>

<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now","logout.php" => "Logout", "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>