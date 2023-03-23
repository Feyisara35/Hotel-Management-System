<?php
    require_once('functions.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("index.php" => "Home", "about.php" => "About Us", "houses.php" => "View Houses", "registrationform.php" => "Sign Up", "login.php" => "Login", "referencepage.php" => "Reference Page"));

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

    echo makeFooter(array('index.php' => 'Home', 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses','about.php' => 'About Us',  "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>