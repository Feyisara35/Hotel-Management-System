<?php
    require_once('functionsLoggedIn.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeHeader("<input type= 'text' placeholder= 'Find an apartment...'>");
	
    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now","logout.php" => "Logout", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

<?php

include_once 'dbconn.php';

?>

<?php

//Validate user input before returning search result. 

    if(isset($_POST['submit'])){
        $search = mysqli_real_escape_string($conn, $_POST['submit']);
        $sql = "SELECT * FROM accommodation WHERE price LIKE '%$search%' OR location LIKE '%$search%' OR description LIKE '%$search%' OR accommodation_name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo " <div id = 'search-link' >
                            <a  href = 'houses.php?name=".$row['accommodation_name']."&price=".$row['price']."'>
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
<script src = "searchbarValidation"> </script>
<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses','about.php' => 'About Us', "referencepage.php" => "Reference Page"));     
    
    echo makePageEnd();
?>
