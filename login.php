<?php
    require_once('functions.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("index.php" => "Home", "about.php" => "About Us", "houses.php" => "View Houses", "registrationform.php" => "Sign Up", "login.php" => "Login", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

<main>
    <!-- Collect user login information for validation -->
    <div id = login-container>
        <h2>LOGIN PAGE</h2>

        <br>
        <br>
        <form  novalidate action="loginProcess.php" method = "post"  id = "loginForm">

            <label for="username">Username:</label>
            <input type ="text" name = "username" id = "username" required pattern="[A-Za-z0-9]+">

            <br>
            <br>

            <label for="password_hash">Password:</label>
            <input type ="password" name = "password_hash" id = "password_hash" minlength="8" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

            <br>
            <br>

            <input type= "submit" name = "submit"  value = "Login">
            <span id = "error"></span>
        </form>
        <script src = "loginValidation.js"></script>
    </div>
    
</main>

<?php
    echo endMain();

    echo makeFooter(array('index.php' => 'Home', 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses', 'about.php' => 'About Us', "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>