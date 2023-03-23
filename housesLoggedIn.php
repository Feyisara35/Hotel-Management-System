<?php
    require_once('functionsLoggedIn.php');
 
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now", "logout.php" => "Logout", "referencepage.php" => "Reference Page"));
    
    echo startMain();

?>

<main id= "accomodation-main">	

<!-- Display accommodation listing details after the validation of user search input -->
                <div id = "searchbar-container">
                    <form id = "searchbarOption" action = "searchbar.php" method = "POST" id = "searchForm">
                        <input type= "text" placeholder= "Find an Apartment..." name = "search" id = "searchBox" required pattern = "[a-zA-Z-0-9]{1,20}">
                        <button type = "submit" name = "submit" class = "searchbar-button">Find Apartment</button>
                        <script src = "searchbarValidation"> </script>
                    </form> 
                </div>

<!-- The 'accommodation-container' class contains images of some of the apartment. Referenced link displays the accomodation details and other information.-->

    <div class="accomodation-container">
        
                        <div class="horizontal-grid">
                            <div>
                                <a href="house1.php"><img  src="images/home.jpg" alt="abc"></a>
                                <p>
                                    Name: Newman Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £200/night. <br>
                                    Accommodation ID: 1.
                                </p>
                                
                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div >
                                
                            <div>
                                <a href="house2.php"><img  src="images/house 2.jpg" alt="abc"></a>
                                <p>
                                    Name: Sheffield Apartments <br>
                                    Location: Lekki <br>
                                    Size: 10 square meters <br>
                                    Price: £200/night. <br>
                                    Accommodation ID: 2.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div> 
                    
                            <div>
                                <a href="house3.php"><img  src="images/house 3.jpg" alt="abc"></a>
                                <p>
                                    Name: Feyi Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £200/night. <br>
                                    Accommodation ID: 3.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div>
                        </div>
            
                        <div class="horizontal-grid">
                            <div>
                                <a href="house4.php"><img  src="images/house 4.jpg" alt="abc"></a>
                                <p>
                                    Name: Fayob Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £200/night. <br>
                                    Accommodation ID: 4.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div>
                
                            <div>
                                <a href="house5.php"><img  src="images/house 5.jpg" alt="abc"></a>
                                <p>
                                    Name: Tumilee Apartments <br>
                                    Location: Jack, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £300/night. <br>
                                    Accommodation ID: 5.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div>
                
                            <div>
                                <a href="house6.php"><img  src="images/house 6.jpg" alt="abc"></a>
                                <p>
                                    Name: Bash Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 5 square meters <br>
                                    Price: £500/night. <br>
                                    Accommodation ID: 6.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div>
                        </div>
        
                        <div class="horizontal-grid">
                            <div>
                            <a href="house7.php"><img  src="images/house 7.jpg" alt="abc"></a>
                                <p>
                                    Name: Akins Apartments <br>
                                    Location: Ikeja, GRA <br>
                                    Size: 10 square meters <br>
                                    Price: £700/night. <br>
                                    Accommodation ID: 7.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div>
                
                            <div>
                            <a href="house8.php"><img  src="images/house 8.jpg" alt="abc"></a>
                                <p>
                                    Name: Newly Apartments <br>
                                    Location: Phase, GRA <br>
                                    Size: 15 square meters <br>
                                    Price: £800/night. <br>
                                    Accommodation ID: 8.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div>
                
                            <div>
                            <a href="house9.php"><img  src="images/house 9.jpg" alt="abc"></a>
                                <p>
                                    Name: Newman Apartments <br>
                                    Location: VI, GRA <br>
                                    Size: 20 square meters <br>
                                    Price: £1000/night. <br>
                                    Accommodation ID: 9.
                                </p>

                                <button id = "booking-button"><a href="booking.php">Book Now</a></button>
                            </div>
                
                        </div>	
    </div> 

</main>

<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now","logout.php" => "Logout", "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>
