<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="Home.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Font/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="Font/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<style>
		#myBtn {
    display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:skyblue;
  color: white;
  cursor: pointer;
  width:60px;
  height:60px;
  
  border-radius: 50%;
}

@keyframes moveUpDown {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px); /* Adjust the distance as needed */
  }
  100% {
    transform: translateY(0);
  }
}
#myBtn {
  animation: moveUpDown 1s infinite; /* Adjust the duration as needed */
}
	</style>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"animate__animated animate__slideInDown></i></button>

	<div id="wrapper">
            <div id="image">
            
        	<nav>
			<?php 
            if (isset($_SESSION['login']) && $_SESSION['login']) {
            ?>
                <div id="login"><a href="ls/logout.php">Logout</a></div>
            <?php } else { ?>
                <div id="login"><a href="./ls/index.php">Login</a></div>
            <?php } ?>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Home.php#about">About</a></li>
				<li><a href="#gallary">Gallery</a></li>
				<li><a href="Room.php">Room</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="Contact.php">Contact</a></li>
				
				
			</ul>
		</nav>
		<div class="Contain glass">
		<div id="Hello">
            <h1>Welcome to Grand Beach</h1><br>
            </div>
          </div>
		</div>

		<div class="bgInsert">
		<div id ="prompt">Check Booking Avaliablity</div><br>
		<div id="secUl">
		<ul >
			<li>Check In Date:</li>
			<li>Check Out Date:</li>
			<li>Adult:</li>
			<li>Children:</li>
			<li>Rooms:</li>

		</ul>
    	</div>
    	<br><br>
	    <div id="thirdUl">
	    	<ul >

			<li><input type="Date" name="chkinDate" required id="dateIn"></li>
			<li><input type="Date" name="chkinDate" required id="dateOut"></li>
			<li><select name="selectb" id="selectAdult" >
				<option disabled>Adult</option>
			     <option value="1">1</option>
			     <option value="2">2</option>
			     <option value="3">3</option>
			 </select>
		     </li>
			<li><select id="selectChild">
				<option disabled>Child</option>
			     <option value="1">1</option>
			     <option value="2">2</option>
			     <option value="3">3</option>
			 </select></li>
			<li><select id="selectRoom">
				<option disabled>Room</option>
			     <option value="1">1</option>
			     <option value="2">2</option>
			     <option value="3">3</option></select></li>
		  </ul>
		  </div>
		  <div id="book"><a href="./ls/index.php">Book Now</a></div>

	</div>
	<div id="about">
		<h1>About Us</h1>
		
		<div class="hotel">
			<div class="flip-box">
               <div class="flip-box-inner">
                  <div class="flip-box-front">
                      <img src="image/ee.webp" alt="Night">
                  </div>
                  <div class="flip-box-back">
                      <img src="image/about2.jpg" alt="beach">
                  </div>
              </div>
            </div>
		
		<h2>About Hotel</h2>
		<p>Our Grand Beach Hotel is in a superb location with friendly and helpful staff. The hostel offers comfortable, clean rooms and fantastic access to City most famous sights and attractions.All the rooms have en-suite facilities, with its own shower and toilet facilities making it a perfect place to stay. The beds have curtains and panels ensuring that your stay is private and comfortable. </p>
       <br><br>
	    </div>
	</div><br><br><br>
	<div id="gallary">
		<h1>Our Photo Gallery</h1>
		
	<div id="slider">
		<input type="radio" name="slider" id="s1" checked >
		<input type="radio" name="slider" id="s2" >
		<input type="radio" name="slider" id="s3"  >
		<input type="radio" name="slider" id="s4"  >
		<input type="radio" name="slider" id="s5" >
		
		
		<label for="s1" id="slide1">
			<div class="container">
			<img src="image/about5.jpg" alt>
			<div class="overlay1">
				<span>Night View</span>
			</div>
		</div>
		</label>
	   
	   
		<label for="s2" id="slide2">
			<div class="container">
			<img src="image/view2.jpg" alt>
			<div class="overlay2">
				<span>Beach View</span>
			</div>
			</div>
		</label>
		<label for="s3" id="slide3">
			<div class="container">
			<img src="image/room3.jpg" alt>
			<div class="overlay3">
				<span>Fresh Vibe</span>
			</div>
		</div>
		</label>
		<label for="s4" id="slide4">
			<div class="container">
			<img src="image/pink.jpg" alt>
			   <div class="overlay4">
			   	 <span>Our Luxuary Rooms</span>
			   </div>
			  </div>
		</label>
		<label for="s5" id="slide5">
			<div class="container">
			<img src="image/ser3.jpg" alt>
			<div class="overlay5">
				<span>Best Services & Facilities</span>
			</div>
		</div>
		</label>
	 </div>
   </div>
   <br><br>
    <footer class="footer">
		<div class="container_f">
			<div class="row">
				<div class="footer-col1">
					<h4>Hotel Grand Beach</h4><br>
					<h5>We are delighted to have you as our guest and are committed to providing you with a comfortable and memorable stay.We want to ensure that you have a seamless and enjoyable experience with us.</h5>
				</div>
				<div class="footer-col3">
					<h4>Follow Us</h4>
					<ul>
					 <li><a href="https://www.facebook.com/GrandBeachMiami/"><i class="fa-brands fa-facebook" ></i></a></li>
            <li><a href="https://twitter.com/GrandBeachMiami?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/grandsurfside/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/grand-beach-hotel-miami-beach-&-grand-beach-hotel-surfside"><i class="fa-brands fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="footer-col4">
					<h4>Find us</h4>
					<ul>
						<li><a href="https://goo.gl/maps/ANQbo85w6xK2qKto8"><i class="fa-solid fa-location-dot"></i></a>4835 Collins Ave, Miami Beach, FL 33140,USA</li>
						<li><a href="#"><i class="fa-solid fa-phone"></i>+1 305-538-8666</a></li>
						<li><a href="mailto:yoonthiriaung04@gmail.com"><i class="fa-solid fa-envelope"></i>grandbeachmiami@email.com</a></li>
					</ul>
				</div>

				<div class="footer-col2">
					<h4>Quick links</h4>
					<ul>
						<li><a href="Home.php"><i class="fa-solid fa-arrow-right"></i>Home</a></li>
						<li><a href="Room.php"><i class="fa-solid fa-arrow-right"></i>Rooms</a></li>
                        <li><a href="service.php"><i class="fa-solid fa-arrow-right"></i>Services</a></li>
                        <li><a href="Contact.php"><i class="fa-solid fa-arrow-right"></i>Contact</a></li>
                        <li><a href="Contact.php#Acc"><i class="fa-solid fa-arrow-right"></i>FAQ</a></li>
					</ul>
				</div>
		
				
			</div>
		</div>
		
	</footer>

</div>
<script>
	// Get the button
	let mybutton = document.getElementById("myBtn");
	
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};
	
	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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
	function topFunction() {
  // Set the duration for scrolling animation in milliseconds
  const duration = 300; // Adjust as needed

  // Calculate how far to scroll based on the current scroll position
  const scrollStep = -window.scrollY / (duration / 15);
  
  // Define a function to perform the scrolling animation
  const scrollInterval = setInterval(function(){
    if(window.scrollY != 0) {
      window.scrollBy(0, scrollStep);
    } else {
      clearInterval(scrollInterval);
    }
  }, 15); // Adjust the interval for smoother scrolling
}

function topFunction() {


  // Scroll to the top of the document smoothly
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}
	</script>
	
</body>
</html>