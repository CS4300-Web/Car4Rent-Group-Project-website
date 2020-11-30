<!DOCTYPE html>
<!-- NAV BAR Written by Hung Ly -->
<!--  -->
<html>
	<head>
		<meta charset = "utf-8">
		<link rel="icon" href="pics/minilogo.png">
		<title>Car4Rent | Vehicles</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link rel="stylesheet" href="CarsPageCss.css">
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
				<img id="bannerimage" src= "pics/loca.jpg" height="400" alt="cars">
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
		<?php
		$server_name="localhost";
		$username="root";
		$password="";
		$database_name="car4rent"; 
		

		$conn=mysqli_connect($server_name,$username,$password,$database_name);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM users WHERE user_id = 1110 "; 
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		echo "<h1><u>Welcome, " . $row["first_name"] ."</u></h1>";
		?>

<button class="tablink" onclick="openPage('Reservations', this, '#C3C3C3') "id="defaultOpen">Reservations</button>
<button class="tablink" onclick="openPage('MyInfo', this, '#C3C3C3')" >MyInfo</button>



<div id="Reservations" class="tabcontent">
  <h3>Reservations</h3>
  <hr>
  <p>		
	  
	  <?php
		//RESERVED VEHICLES 
		$sql = "SELECT * FROM vehicles WHERE vehicle_id in (SELECT vehicle_id FROM request WHERE user_id = 1110)";
		$result = $conn->query($sql);
		if (!$result) {
			trigger_error('Invalid query: ' . $conn->error);
		}

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$current = $row["vehicle_id"];
				echo '<div class = "car_info">';
				echo '<br> ID: '. $row["vehicle_id"].  ', Vehicle:' . $row["Name"]. ', Request Date: ' .$row["Request_Date"].' <br>';
				echo '</div><hr>';
				
			}
		} else {
			echo "0 results";
		}
		if ( isset( $_POST['cancel_btn'] ) ) { 
			$delete_req = $_POST['v_id'];
			$sql = "DELETE FROM request WHERE vehicle_id = $delete_req ";
			$result = $conn->query($sql);
			if (!$result) {
			trigger_error('Invalid query: ' . $conn->error);
			}
		}		
?>

<form action="" method="post"> 
Cancel a request? Enter Vehicle ID:
<input type="text" id="v_id" name="v_id">
<button class = "" name = "cancel_btn" > Cancel </button>
</form>

</p>
</div>



<div id="MyInfo" class="tabcontent">
  <h3>MyInfo</h3>
  <p><?php
  $userinfo = "SELECT * FROM users WHERE user_id = 1110";
  $result = $conn->query($userinfo);
  if ($result->num_rows > 0) {
	// output data of each row
	//user_id , first_name , last_name , username , password , address , email
	while($row = $result->fetch_assoc()) {
		echo '<br> Name: '. $row["first_name"]." ". $row["last_name"].'<br>';
		echo '<br> Address: '. $row["address"].'<br>';
		echo '<br> Email: '. $row["email"].'<br>';
	}
} else {
	echo "0 results";
}
  ?>
  <br>
  <button class = "cancel_button"onclick="document.location='Edit_info.php'">Edit Info</button>
</p> 
</div>


<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

function printValue(){
 var value = document.getElementById("getID").value;
 console.log(value);
 

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>




		
		<footer>
			<div>
				
			</div>
			<div style="margin:20px; text-align:center;">
				<img src="pics/logo.png" height="100">&copy
			</div>
		</footer>
	</body>
</html>