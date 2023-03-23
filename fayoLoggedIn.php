<?php
    require_once('functionsLoggedIn.php');
    
    echo makePageStart('Fayo Accomodation', "style.css");

    echo makeHeader("<input type= 'text' placeholder= 'Find an apartment...'>");
	
    echo makeNavMenu(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now","logout.php" => "Logout", "referencepage.php" => "Reference Page"));

    echo startMain();

?>

<main>	
	<!-- Display accommodation listing details after the validation of user search input -->
            <div class= "top-container">
                <form class = "searchbar" action = "searchbarIn.php" method = "POST" id = "searchForm">
                    <input type= "text" placeholder= "Find an Apartment..." id = "search" required pattern = "[a-zA-Z-0-9]{1,20}">
					<button type = "submit" name = "submit" class = "searchbar-button">FIND APARTMENT</button>
					<span id = "error"></span>
					<script src = "searchbarValidation.js"> </script>
				</form>
				
            </div>

<!-- The 'Facility-container' class contains images of some of the features of the self-catering apartments  -->
			<div class = "facilities-container">
			
				<div class= "h3"><h3>Our Facilities</h3></div>
				<div class = "imagestyle">
				<!--Image source: pxfuel Available at: https://www.pxfuel.com/en/free-photo-xxogy (Accessed: 14 October 2021)-->
				<img src= "images/luxurykitchen.jpg" alt="Kitchen">
				<div class= "desc">Equipped Kitchen</div>
				</div>
			
				<div class = "imagestyle">
				<!--//Image source: pxfuel Available at: https://www.pxfuel.com/en/free-photo-ozwib (Accessed: 14 October 2021)-->
				<img src= "images/parking.jpg" alt="Parking lot">
				<div class= "desc">Parking lot</div>
				</div>
			
				<div class = "imagestyle">
				<!--//Image source: The Bathroom Studio at: https://www.chroniclelive.co.uk/special-features/looking-luxury-bathroom-trust-tyneside-14444966 (Accessed: 14 October 2021)-->
				<img src= "images/bathroom.jpg" alt="Luxury Bathroom" >
				<div class= "desc">Luxury bathroom</div>
				</div>
				
				<div class = "imagestyle">
				<!--//Image source: pxfuel Available at: https://www.pxfuel.com/en/free-photo-xxogy (Accessed: 14 October 2021)-->
				<img src= "images/fireplace.jpg" alt="Fire Place" >
				<div class= "desc">Fire Place</div>
				</div>
				
				<div id = "slide-show">
					<img src="images/house 1.jpg" alt="House">
					<img src="images/wooden floor.jpg" alt="Wooden Floor">
					<img src="images/study 1.jpg" alt="Study">
				</div>
			</div>	

		</main>


<?php
    echo endMain();

    echo makeFooter(array("fayoLoggedIn.php" => "Home", "aboutLoggedIn.php" => "About Us", "housesLoggedIn.php" => "View Houses", "booking.php" => "Book Now","logout.php" => "Logout", "referencepage.php" => "Reference Page"));
    
    echo makePageEnd();
?>
