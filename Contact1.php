
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="Contact.css" />
    <link rel="stylesheet" type="text/css" href="Font/css/fontawesome.min.css">
    <link rel="stylesheet" href="Font/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
     <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="js/bootstrap.bundle.min.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
     <link rel="stylesheet" href="css/bootstrap.min.css">
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
    <div id="yoon">
    <nav>
      <div id="login" ><a href="Contact.php">Logout</a></div>
      <ul>
        <li><a href="Home1.html">Home</a></li>
        <li><a href="Home1.html#about">About</a></li>
        <li><a href="Home1.html#gallary">Gallery</a></li>
        <li><a href="Room1.html">Room</a></li>
        <li><a href="service1.html">Services</a></li>
        <li><a href="Contact1.php">Contact</a></li>
        
        
      </ul>
    </nav>

    <div class="container">
      <div class="con"><h2>If you require any further information, let us know</h2><br></div>
      </ul>
    
      <div class="form">
        <div class="contact-info">
          <h3 class="title"> Get in touch</h3>
          <p class="text">
            Should you wanna ask  information with us, please do not hesitate to contact us.We will get back to you within 24 hours.
          </p>

          <div class="info">
            <div class="information">
              
              <p><a href="https://goo.gl/maps/ANQbo85w6xK2qKto8"><i class="fa-solid fa-location-dot"></i></a><p1>4835 Collins Ave, Miami Beach, FL 33140,USA</p1></p>
            </div>
            <div class="information">
              <p><i class="fa-solid fa-phone"></i><p1>+1 305-538-8666</p1></p>
            </div>
            <div class="information">
              
              <p><a href="mailto:yoonthiriaung04@gmail.com"><i class="fa-solid fa-envelope"></i></a><p1>grandbeachmiami@email.com</p1></p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/GrandBeachMiami/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/GrandBeachMiami?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/grandsurfside/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/company/grand-beach-hotel-miami-beach-&-grand-beach-hotel-surfside">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form  autocomplete="off" onsubmit="showAlert()" method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" required name="name" class="input" placeholder="User Name" />
             
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input"  placeholder="Email" required>
              
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="Phone" required>
              
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message" required></textarea>
              
            </div>
            <div class="input-container textarea">
              <input name="roomNo" class="input" placeholder="Room No." required></input>
              
            </div>

            
           <input type="submit" value="Send" id="sendItem" name="send">
           <!-- <script type="text/javascript">
             function showAlert(){
              alert("Thanks you for contact with us.We will reply you within 24 hours.");

             }
           </script> -->
        
          </form>
        </div>
      </div>
    </div>
    <div class="contain">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d326.5008191142423!2d-80.12153039854161!3d25.824417275326883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b3156fe24ec1%3A0x5fa710ae85a4ac4c!2sGrand%20Beach%20Hotel!5e0!3m2!1sen!2smm!4v1692718495226!5m2!1sen!2smm" width="70%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
  <br><br>
    
    <div id="Acc">
      <h3>Frequently Asked Questions to Us</h3>
    <ul id="accordion">
        <li>
            <label for="first">Does Grand Beach Hote have a pool?<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="first" checked>
            <div class="content"><p>Yes, this hotel has a pool. Find out the details about the pool and other facilities on this page.</p>
            </div>
        </li>
        <li>
            <label for="second">Does Grand Beach Hotel have a hot tub for its guests?<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="second">
            <div class="content"><p>Yes, there is a hot tub. You can find out more about this and the other facilities at Grand Beach Hotel on this page.</p>
            </div>
        </li>
        <li>
            <label for="third">How close to the beach is Grand Beach Hotel?<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="third">
            <div class="content"><p>The nearest beach is just 200 m from Grand Beach Hotel. All distances are measured in straight lines. Actual travel distances may vary.</p>
            </div>
        </li>
        <li>
            <label for="fourth">What are the check-in and check-out times at Grand Beach Hotel<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fourth">
            <div class="content"><p>Check-in at Grand Beach Hotel is from 16:00, and check-out is until 11:00.</p>
            </div>
        </li>
        <li>
            <label for="fifth">How much does it cost to stay at Grand Beach Hotel?<span>&#x3e;</span></label>
            <input type="radio" name="accordion" id="fifth">
            <div class="content"><p>The prices at Grand Beach Hotel may vary depending on your stay (e.g. dates you select, hotel's policy etc.). See the prices by entering your dates.</p>
            </div>
        </li>

    </ul>
    </div><br><br>
   <section>
        <div class="containerY">
            <h1 class="section-header">Client Review <span></span></h1>
            <div class="testimonials">
                
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="single-item">
                          <div class="rowR">
                              <div class="col-md-5">
                                  <div class="profile">
                                      <div class="img-area">
                                          <img src="image/c7.jfif" alt="">
                                      </div>
                                      <div class="bio">
                                          <h2>Dave Wood<h2>
                                          <h4>Electronic Company CEO</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="contentA">
                                      <p><span><i class="fa fa-quote-left"></i></span>My stay at the Grand Beach Hotel was nothing short of magnificent. The hotel exudes luxury in every aspect, from the elegant decor to the impeccable service. The rooms are spacious and well-appointed, offering stunning ocean views that create a sense of serenity. Dining at the hotel's restaurants was a culinary journey, and the rooftop pool area provided a perfect retreat with breathtaking vistas. The Grand Beach Hotel is a haven of opulence, and I can't wait to return for another indulgent experience.</p>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="single-item">
                          <div class="rowR">
                              <div class="col-md-5">
                                  <div class="profile">
                                      <div class="img-area">
                                          <img src="image/c8.jfif" alt="">
                                      </div>
                                      <div class="bio">
                                          <h2>Martin Guptill</h2>
                                          <h4>Designer</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="contentA">
                                      <p><span><i class="fa fa-quote-left"></i></span>I had the pleasure of staying at the Grand Beach Hotel, and it was truly a lavish experience. The hotel's grandeur is evident from the moment you step inside, with its exquisite decor and impeccable service. The rooms are spacious and elegantly furnished, providing a perfect retreat with breathtaking views of the beach. Dining options are exceptional, and the rooftop pool area is a serene escape. The Grand Beach Hotel offers a luxurious and unforgettable stay that I would highly recommend to anyone seeking an indulgent getaway.</p>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="single-item">
                          <div class="rowR">
                              <div class="col-md-5">
                                  <div class="profile">
                                      <div class="img-area">
                                          <img src="D:\HTML\HTML_Pj\image\c9.jfif" alt="">
                                      </div>
                                      <div class="bio">
                                          <h2>Stephen Jones</h2>
                                          <h4>AutoMobile Company CEO</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="contentA">
                                      <p><span><i class="fa fa-quote-left"></i></span>The Grand Beach Hotel is an epitome of luxury and elegance. From the moment you enter, you are greeted with opulent surroundings and a warm, attentive staff. The rooms are spacious and beautifully appointed, offering stunning views of the beach and the ocean. Dining at the hotel's fine restaurants is a culinary delight, and the rooftop pool area is a serene oasis for relaxation. Every detail is meticulously attended to, ensuring a truly luxurious and memorable stay at the Grand Beach Hotel.</p>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                
            </div>
        </div>
      </h2>
    </section>
    </div>
     <footer class="footer">
    <div class="container_f">
      <div class="rowF">
        <div class="footer-col1">
          <h4 id="h41">Hotel Grand Beach</h4><br>
          <h5 id="h51">We are delighted to have you as our guest and are committed to providing you with a comfortable and memorable stay. As a first-time guest, we want to ensure that you have a seamless and enjoyable experience with us.</h5>
        </div>
        <div class="footer-col3">
          <h4 id="h43">Follow Us</h4>
          <ul>
            <li><a href="https://www.facebook.com/GrandBeachMiami/"><i class="fa-brands fa-facebook" ></i></a></li>
            <li><a href="https://twitter.com/GrandBeachMiami?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/grandsurfside/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/grand-beach-hotel-miami-beach-&-grand-beach-hotel-surfside"><i class="fa-brands fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="footer-col4">
          <h4 id="h44">Find us</h4>
          <ul>
            <li><a href="https://goo.gl/maps/ANQbo85w6xK2qKto8"><i class="fa-solid fa-location-dot"></i></a>4835 Collins Ave, Miami Beach, FL 33140,USA</li>
            <li><a href="#"><i class="fa-solid fa-phone"></i>+1 305-538-8666</a></li>
            <li><a href="mailto:yoonthiriaung04@gmail.com"><i class="fa-solid fa-envelope"></i>grandbeachmiami@email.com</a></li>
          </ul>
        </div>

        <div class="footer-col2">
          <h4 id="h42">Qucik links</h4>
          <ul>
            <li><a href="Home1.html"><i class="fa-solid fa-arrow-right"></i>Home</a></li>
             <li><a href="Room1.html"><i class="fa-solid fa-arrow-right"></i>Rooms</a></li>
                        <li><a href="service1.html"><i class="fa-solid fa-arrow-right"></i>Services</a></li>
                        <li><a href="Contact1.php"><i class="fa-solid fa-arrow-right"></i>Contact</a></li>
                        <li><a href="Contact1.php#Acc"><i class="fa-solid fa-arrow-right"></i>FAQ</a></li>
          </ul>
        </div>
    
        
      </div>
    </div>
    
  </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
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

<?php
	$connection = mysqli_connect("localhost","root", "");
	$db = mysqli_select_db($connection,'hotel_management_db');

	if(isset($_POST['send']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$roomNo = $_POST['roomNo'];


		$query = "INSERT INTO `user_msg` (`name`, `email`, `phone`, `message`, `roomNo`) VALUES ('$name', '$email', '$phone', '$message', 'roomNo')";

		$query_run = mysqli_query($connection ,$query);
		if($query_run){
			header("location:book2.php");
			exit();
		}
		else{
			echo " not success";

		}
	}
?>