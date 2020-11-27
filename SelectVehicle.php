<!DOCTYPE html>
<!-- Written by Hung Ly -->
<html>
	<head>
		<meta charset = "utf-8">
		<link rel="icon" href="pics/minilogo.png">
		<title>Car4Rent | Select Vehicle</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<style type="text/css"> 
			.banner {display:none;}
			sup {font-size:9pt;}
		</style>
	</head>
	<body>
		<button onclick="topFunction()" id="BTTbutton" title="Go to top"></button>
		<script>
			//Get the button
			var mybutton = document.getElementById("BTTbutton");
			
			// When the user scrolls down 50px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
				mybutton.style.display = "block";
			  } else {
				mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
			
			function showsubmenu(divname) {
				switch(divname){
					case "rent":
						if (document.getElementById(divname).style.display == "block")
							document.getElementById(divname).style.display = "none";
						else {
							document.getElementById(divname).style.display = "block";
							document.getElementById("learn").style.display = "none";
							document.getElementById("location").style.display = "none";
							document.getElementById("help").style.display = "none";}
						break;
					case "learn":
						if (document.getElementById(divname).style.display == "block")
							document.getElementById(divname).style.display = "none";
						else {
						document.getElementById(divname).style.display = "block";
						document.getElementById("rent").style.display = "none";
						document.getElementById("location").style.display = "none";
						document.getElementById("help").style.display = "none";}
						break;
					case "location":
						if (document.getElementById(divname).style.display == "block")
							document.getElementById(divname).style.display = "none";
						else {
						document.getElementById(divname).style.display = "block";
						document.getElementById("learn").style.display = "none";
						document.getElementById("rent").style.display = "none";
						document.getElementById("help").style.display = "none";}
						break;
					case "help":
						if (document.getElementById(divname).style.display == "block")
							document.getElementById(divname).style.display = "none";
						else {
						document.getElementById(divname).style.display = "block";
						document.getElementById("learn").style.display = "none";
						document.getElementById("location").style.display = "none";
						document.getElementById("rent").style.display = "none";}
						break;
					default:
						break;
				}
			}
		</script>
		<header>
			<div class="navbar">
				<a class="header" href="covid.html">Covid19 Update⚠</a>
				<div class="dropdown">
					<button class="dropbtn">User 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a class="usr" href="#">Sign In</a>
					  <a class="usr" href="#">Sign Up</a>
					</div>
				</div> 
				<div class="dropdown">
					<button class="dropbtn">Currency 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="#">USD ($)</a>
					  <a href="#">CAD ($)</a>
					  <a href="#">EUR (€)</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Language 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="#">English</a>
					  <a href="#">Español</a>
					</div>
				</div> 
			</div>
		</header>
		<div class="menu">
			<div class="logo"><a href="HomePage.html"><img src="pics/logo.png" height="75"></a></div>
			<div class="submenu" onclick="showsubmenu('rent')">RENT</div>
			<div class="submenu" onclick="showsubmenu('learn')">LEARN MORE</div>
			<div class="submenu" onclick="showsubmenu('location')">LOCATIONS</div>
			<div class="submenu" onclick="showsubmenu('help')">CONTACT US</div>
		</div>
		<div class="banner" id="bannercontainer">
			<div class="txtholder" id="submenuEXT">
				<h1 style="color:white; font-size:30pt">RENT YOUR FIRST CAR WITH CONFIDENCE</h1>
				<p style="color:white; font-size:14pt">Customer's satisfaction is our number one priority. We commit to provide the best service and protect the well-being of our customers and employees.</p>
			</div>
			<div style="display:inline-block;overflow:hidden;float:right; max-height:400px;">
				<img id="bannerimage" src="pics/cars.jpg" height="400" alt="cars">
			</div>
		</div>
		<div class="banner" id="rent">
			<div class="txtholder">
				<p><a class='sm' href='Booking.html'>> Start A Reservation</a></p>
				<p><a class='sm' href='#'>> Reservation Status</a></p>
				<p><a class='sm' href='#'>> Cancel Reservation</a></p>
			</div>
			<div style="display:inline-block;overflow:hidden;float:right; max-height:400px;">
				<img id="bannerimage" src="pics/rent1.jpg" height="400" alt="cars">
			</div>
		</div>
		<div class="banner" id="learn">
			<div class="txtholder">
				<p><a class='sm' href='AboutUs.html'>> About Us</a></p>
				<p><a class='sm' href='MeetTheTeam.html'>> Meet The Team</a></p>
				<p><a class='sm' href='CarsPage.html'>> Vehicles</a></p>
			</div>
			<div style="display:inline-block;overflow:hidden;float:right; max-height:400px;">
				<img id="bannerimage" src="pics/learn.jpg" height="400" alt="cars">
			</div>
		</div>
		<div class="banner" id="location">
			<div class="txtholder">
				<p><a class='sm' href='Houston.php'>> Houston</a></p>
				<p><a class='sm' href='Austin.php'>> Austin</a></p>
				<p><a class='sm' href='Dallas.php'>> Dallas</a></p>
			</div>
			<div style="display:inline-block;overflow:hidden;float:right; max-height:400px;">
				<img id="bannerimage" src="pics/loca.jpg" height="400" alt="cars">
			</div>
		</div>
		<div class="banner" id="help">
			<div class="txtholder">
				<p><a class='sm' href='FAQ.html'>> FAQs</a></p>
				<p><a class='sm' href='ContactUs.html'>> Contact Us</a></p>
				<p><a class='sm' href='Report.html'>> Report An Issue</a></p>
			</div>
			<div style="display:inline-block;overflow:hidden;float:right; max-height:400px;">
				<img id="bannerimage" src="pics/CSRa.jpg" height="400" alt="cars">
			</div>
		</div>
		<!--Insert your BODY HERE!!!-->
		<!--------------------------------------------------------------------->
		<div style="margin:50px; font-size:14pt; border-bottom:5px solid darkgray;">
			<nav style="margin-bottom:10px;">
				<a class="header" style="float:none;color:#00361d" href="Booking.html">Check Availability</a> >
				<a class="header" style="float:none;color:#00361d" href="SelectLocation.php">Select A Location</a> >
				<span class="header" style="float:none;color:#00361d;background-color:yellow">Select A Vehicle</span> >
				<span class="header" style="float:none;color:grey">Review & Submit</span>
			</nav>
		</div>
		<div style="margin:50px;">
			<h2>Select a Vehicle:</h2>
			<form action="ReviewBooking.php" method="post">
				<?php
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					$tel = $_POST['tel'];
					$put = $_POST['put'];
					$rt = $_POST['rt'];
					$loc = $_POST['location'];
					echo "<input type='hidden' name='fname' value='".$fname."'>";
					echo "<input type='hidden' name='lname' value='".$lname."'>";
					echo "<input type='hidden' name='email' value='".$email."'>";
					echo "<input type='hidden' name='tel' value='".$tel."'>";
					echo "<input type='hidden' name='put' value='".$put."'>";
					echo "<input type='hidden' name='rt' value='".$rt."'>";
					echo "<input type='hidden' name='loc' value='".$loc."'>";
				?>
				<fieldset>
					<legend>Mitsubishi Mirage</legend>
					<div style="display:inline-block">
						<img src="cars/EconomyCar.png" alt="Economy Car" style="width:150px">
					</div>
					<div style="display:inline-block">
						<p class="msrp"><img src="pics/passenger.png" height="10"> Passengers: 4</p>
						<p class="price">$48.<sup>98</sup> per day</p>
						<input type="hidden" name='veh[name]' value='Mitsubishi Mirage'>
						<input type="hidden" name="veh[rate]" value="$48.98">
						<p><input type="submit" name='veh[submit]' value="Select"></input></p>
					</div>
				</fieldset>
				<fieldset>				
					<legend>Nissan Versa</legend>
					<div style="display:inline-block">
						<img src="cars/CompactCar.png" alt="Compact Car" style="width:150px">
					</div>
					<div style="display:inline-block">
						<p class="msrp"><img src="pics/passenger.png" height="10"> Passengers: 5</p>
						<p class="price">$54.<sup>98</sup> per day</p>
						<input type="hidden" name='veh[name]' value='Nissan Versa'>
						<input type="hidden" name="veh[rate]" value="$54.98">
						<p><input type="submit" name='veh[submit]' value="Select"></input></p>
					</div>
				</fieldset>
			</form>
		</div>
		<!--------------------------------------------------------------------->
		<footer>
			<div style="margin:20px; text-align:center;">
				<img src="pics/logo.png" height="100">&copy
			</div>
		</footer>
	</body>
</html>