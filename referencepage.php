<?php
    require_once('functions.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("index.php" => "Home", "about.php" => "About Us", "houses.php" => "View Houses", "registrationform.php" => "Sign Up", "login.php" => "Login", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

<main id = "reference-container">

<h3>CREDITS PAGE</h3>
<p>
    ALL IMAGES USED FOR THIS PROJECT IS FROM A FREE SOURCE WEBSITE AND REQUIRES NO REFRENCE.
    
</p>

<h3> Article Reference</h3>

<p> GeeksforGeeks, 2019. PHP SESSIONS. [Online] Available at: https://www.geeksforgeeks.org/php-sessions/ [Accessed 3 January 2022].</p>

<p>Hatzivasilis, G., 2017. Password-Hashing Status. Cryptography, 2(10), pp. 1-31.</p>

<p>Khuda Bux Jalbani, M. Y. M. S. S. R. J. O. A. H. a. Z. M., 2021. Poor Coding Leads to DoS Attacks and Security Issues in Web Application for Sensors. Security and Communication Networks (Hindawi), 2021(1), pp. 1-11.</p>

<p>Robinson, A., 2019. Generating a website from a paper mock-up, Bristol: the University Of Bristol, Department of Computer Science.</p>
</main>

<?php
    echo endMain();

    echo makeFooter(array('index.php' => 'Home', 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses','about.php' => 'About Us',"referencepage.php" => "Reference Page"));     
    
    echo makePageEnd();
?>