<?php
    require_once('functions.php');
 
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("index.php" => "Home", "about.php" => "About Us", "houses.php" => "View Houses", "registrationform.php" => "Sign Up", "login.php" => "Login", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

<main id = "registration-container">

    <div id = "registration-heading">
        <h2>REGISTRATION PAGE</h2>
        <br>
        <p>KINDLY FILL THE FORM TO CREATE AN ACCOUNT</p>
    </div>    

        
    <form novalidate action="addCustomer.php" method="post" id = "registrationform">
    <!-- Collect user registration information for validation -->
        <div class = "registration-div">
            <label for="fName">First Name:</label>
            <input type ="text" name = "customer_forename" id = "customer_forename" required pattern = "[a-zA-Z]{1,20}">
        </div>
        
        <br>

        <div class = "registration-div">
            <label for="lName">Last Name:</label>
            <input type ="text" name = "customer_surname" id = "customer_surname" required pattern = "[a-zA-Z]{1,20}">
        </div>
       
        <br>

        <div class = "registration-div">
            <label for="uName">Username:</label>
            <input type ="text" name = "username" id = "username" required pattern="[A-Za-z0-9]+">
        </div>
        
        <br>

        <div class = "registration-div"> 
            <label for="pCode">Postcode:</label>
            <input type ="text" name = "customer_postcode" id = "customer_postcode" required pattern = "[A-Za-z-0-9]{1,10}">
        </div>
        
        <br>

        <div class = "registration-div">
            <label for="address1">Address line 1:</label>
            <input type ="text" name = "customer_address1" id = "customer_address1" required pattern = "[#.0-9a-zA-Z\s,-]+$}">
        </div>
        
        <br>
       
        <div class = "registration-div">
            <label for="address2">Address Line 2:</label>
            <input type ="text" name = "customer_address2" id = "customer_address2" pattern = "^[#.0-9a-zA-Z\s,-]+$">
        </div>
        
        <br>

        <div>
            <label for="dateOB">Date of Birth:</label>
            <input type="date" name = "date_of_birth" id = "date_of_birth" required>
        </div>

        <br>

        <div>
            <label for="pword">Password:</label>
            <input type="password" name ="password_hash" id= "password_hash" minlength="8" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        </div>

        <br>

        <div class= "submit-button">
            <input type= "submit" name = "submit"  value = "Sign Up">
        </div>
        <span id = "error"></span>
    </form>
    <script src = "validation.js"></script>
</main>

<?php
    echo endMain();

    echo makeFooter(array('index.php' => 'Home', 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses', "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>