
<?php
    require_once('functions.php');
 
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("index.php" => "Home", "about.php" => "About Us", "houses.php" => "View Houses", "registrationform.php" => "Sign Up","login.php" => "Login", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

  <!--The database login information is inputted to get a connection to the database instead of using a prepared statement to prevent database hijacking. 
  This is not bestpractise however I was unable to connect to the database using the prepared statement.  -->
<?php

        $conn = new mysqli('localhost', 'unn_w21042395', 'Longlife@35', 'unn_w21042395');

        $customer_forename = $_POST['customer_forename']; 
        $customer_surname = $_POST['customer_surname']; 
        $username = $_POST['username']; 
        $customer_postcode = $_POST['customer_postcode']; 
        $customer_address1 = $_POST['customer_address1']; 
        $customer_address2 = $_POST['customer_address2']; 
        $date_of_birth = $_POST['date_of_birth'];
        $password_hash = $_POST['password_hash'];  
 
    // Post client information into the customer table database after submission and validation. 

        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            $hash = password_hash($password_hash, PASSWORD_BCRYPT);
            $stmt = $conn->prepare("INSERT into customers(customer_forename, customer_surname, username, customer_postcode, customer_address1, customer_address2, date_of_birth, password_hash) values(?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("ssssssds",$customer_forename, $customer_surname, $username, $customer_postcode, $customer_address1, $customer_address2, $date_of_birth, $hash);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }
           
?>

    <script src = "validation.js"></script>
<!-- Display account creation message after user/client as created their account sucessfully -->
    <div class = "addCustomerContainer">
        <div id = "addCustomer">
            <p>Account Created sucessfully</p>
            <a href="login.php">LOGIN IN TO CREATE ACCOUNT</a>
        </div>
    </div>
    




<?php
    echo endMain();

    echo makeFooter(array('index.php' => 'Home', 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses', 'booking.php' => 'Make a Booking', 'securitypage.php' => 'Security Page', 'about.php' => 'About Us'));
    
    echo makePageEnd();
?>