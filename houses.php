<?php
    require_once('functions.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("index.php" => "Home", "about.php" => "About Us", "houses.php" => "View Houses", "registrationform.php" => "Sign Up", "login.php" => "Login", "referencepage.php" => "Reference Page"));

    echo startMain();

?>


<main id= "accomodation-main">	
    <!--Display accommodation listing details after the validation of user search input.-->
                <div id = "searchbar-container">
                    <form id = "searchbarOption" action = "searchbar.php" method = "POST" id = "searchForm">
                        <input type= "text" placeholder= "Find an Apartment..." name = "search" id = "searchBox" required pattern = "[a-zA-Z-0-9]{1,20}">
                        <button type = "submit" name = "submit" class = "searchbar-button">Find Apartment</button>
                        <script src = "searchbarValidation"> </script>
                    </form> 
                </div>

               
    <div class="accomodation-container">
        <!-- The 'accommodation-container' class contains images of some of the apartment.-->
                        <div class="horizontal-grid">
                            <div>
                                <a href="login.php"><img  src="images/home.jpg" alt="abc"></a>
                                <p>
                                    Name: Newman Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £200/night.
                                </p>
                                
                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div >
                                
                            <div>
                                <a href="login.php"><img  src="images/house 2.jpg" alt="abc"></a>
                                <p>
                                    Name: Sheffield Apartments <br>
                                    Location: Lekki <br>
                                    Size: 10 square meters <br>
                                    Price: £200/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div> 
                    
                            <div>
                                <a href="login.php"><img  src="images/house 3.jpg" alt="abc"></a>
                                <p>
                                    Name: Feyi Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £200/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div>
                        </div>
            
                        <div class="horizontal-grid">
                            <div>
                                <a href="login.php"><img  src="images/house 4.jpg" alt="abc"></a>
                                <p>
                                    Name: Fayob Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £200/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div>
                
                            <div>
                                <a href="login.php"><img  src="images/house 5.jpg" alt="abc"></a>
                                <p>
                                    Name: Tumilee Apartments <br>
                                    Location: Jack, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £300/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div>
                
                            <div>
                                <a href="login.php"><img  src="images/house 6.jpg" alt="abc"></a>
                                <p>
                                    Name: Bash Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £500/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div>
                        </div>
        
                        <div class="horizontal-grid">
                            <div>
                            <a href="login.php"><img  src="images/house 7.jpg" alt="abc"></a>
                                <p>
                                    Name: Akins Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 10 square meters <br>
                                    Price: £700/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div>
                
                            <div>
                            <a href="login.php"><img  src="images/house 8.jpg" alt="abc"></a>
                                <p>
                                    Name: Newly Apartments <br>
                                    Location: Phase, GRA <br>
                                    Size: 15 square meters <br>
                                    Price: £800/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div>
                
                            <div>
                            <a href="login.php"><img  src="images/house 9.jpg" alt="abc"></a>
                                <p>
                                    Name :Newman Apartments <br>
                                    Location: VI, GRA <br>
                                    Size: 20 square meters <br>
                                    Price: £1000/night.
                                </p>

                                <button id = "booking-button"><a href="login.php">Book Now</a></button>
                            </div>
                
                        </div>	
    </div> 

</main>

<?php
    echo endMain();

    echo makeFooter(array('index.php' => 'Home', 'registrationform.php' => 'Register', 'login.php' => 'Login','houses.php' => 'View Houses','about.php' => 'About Us',"referencepage.php" => "Reference Page"));     
    
    echo makePageEnd();
?>
