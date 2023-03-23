<?php
    require_once('functions.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("index.php" => "Home", "about.php" => "About Us", "houses.php" => "View Houses", "registrationform.php" => "Sign Up", "login.php" => "Login", "securitypage.php" => "Security Page"));

    echo startMain();

?>

<?php

include 'dbconn.php';

?>

<?php

    //Validate user input before returning search result.
    
    if(isset($_POST['submit'])){
        $search = mysqli_real_escape_string($conn, $_POST['submit']);
        $sql = "SELECT * FROM accommodation WHERE price LIKE '%$search%' OR location LIKE '%$search%' OR description LIKE '%$search%' OR accommodation_name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        // echo "We found ".$queryResult." results!";

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div id = 'search-link'>
                            <a href = 'houses.php?name=".$row['accommodation_name']."&price=".$row['price']."'>
                                <div class= 'horizontal-grid'>
                                    <h3>".$row['accommodation_name']."</h3>
                                    <p>".$row['location']."</p>
                                    <p>".$row['description']."</p>
                                    <p>".$row['price']."<p>
                                </div>
                            </a>
                    </div>";
            }
        }else {
            echo "No result found!";
        }
    }
?>
<script src = "searchbarValidation.js"> </script>
<?php
    echo endMain();

    echo makeFooter(array('index.php' => 'Home', 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses', 'about.php' => 'About Us',  "referencepage.php" => "Reference Page"));     
    
    echo makePageEnd();
?>
