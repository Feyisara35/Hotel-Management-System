<?php

    ini_set("session.save_path", "/home/unn_w21042395/sessionData");

    session_start();
?>

<?php
    require_once('functions.php');
 
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now", "logout.php" => "Logout", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

<?php
    // Validate user information, login users with valid credentials or Display error message if invalid credentials are inputed.
    
        $_SESSION['logged-in'] = true;

        require_once 'functions.php';

        $conn = getConnection();

        $username = array_key_exists('username', $_REQUEST)?$_REQUEST['username']:null;

        $password_hash = array_key_exists('password_hash', $_REQUEST)?$_REQUEST['password_hash']:null;

        $querySQL = "SELECT password_hash FROM customers WHERE username = ?";

        $stmt = mysqli_prepare($conn, $querySQL);

        mysqli_stmt_bind_param($stmt, "s", $username);

        mysqli_stmt_execute($stmt);

        $queryresult = mysqli_stmt_get_result($stmt);

        $userRow = mysqli_fetch_assoc($queryresult);

        if($userRow){
            $password_hash = $userRow['password_hash'];
            echo '<div id = "login-process"><a href="fayoLoggedIn.php">CLICK HERE TO ACCESS HOME PAGE</a></div>'; 
        }
        else{
            echo "The username or password does not exists";
        }
    ?>
    <script src = "loginValidation.js"></script>

<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses', 'booking.php' => 'Make a Booking','about.php' => 'About Us', "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>
		
