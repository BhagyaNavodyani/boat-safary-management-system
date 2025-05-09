<?php 
    require 'connect.php';

    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        if(isset($_POST['submit'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $sql = "UPDATE contact SET fname='$fname', lname='$lname', email='$email', message='$message' WHERE id=$id";
            if ($con->query($sql) === TRUE) {
                header("Location: dataStoreContactUs.php");
            }
        }

        $sql = "SELECT * FROM contact WHERE id = $id";

        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            ?>

<!DOCTYPE html>
<html>

<head>
	<title>Wildwaters Expeditions</title>
	<link rel="stylesheet" href="/css/contact_us.css">
	<link rel="icon" href="/pic/favicon.ico" />

</head>

<body>

	<body>

        <!-- navbar -->

		<header>
			<div class="i1">
				<img class="logoimg" src="/pic/WE (1).png" alt="logo" />
			</div>
			<div class="menu1">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Trip details</a></li>
					<li><a href="">Registration</a></li>
					<li><a href="">About us </a></li>
					<li><a href="contact_us.html">Contact us</a></li>
					<li><a href="">Blog/news</a></li>
					<li><a href="">FAQs</a></li>
				</ul>
			</div>
			<a href=""><button class="btn1">Log Out</button></a>
		</header>

    <!--contact details & social media links -->
<img class="front_img" src="/pic/frontImg.jpg" alt="front_img">
<div class="div_3">
    <div class="div_1">
            
        <h2 class="topic_1">CONTACTS US</h2>
        <p class="detail_1">Get in touch with us today and let's start planning your next adventure!<br>
             Whether you have questions about our tours, need assistance with booking,<br>
              or simply want to share your travel aspirations, our team is here to help</p>
        <br>
        <h2 class="topic_1"> Contact Information:  </h2>
        <p class="detail_1">Phone: +1 (555) 123-4567  <br>
            Email: info@example.com <br><br>
            Address: 123 Main Street, City, Country, ZIP Code
    
    </p>

        <img class="con_side_img" src="/pic/contactUsSideImg.jpg" alt="contact_us_side_img">
    </div>

<!-- form -->

<div class="div_2">
    <form class="form_1" method="post" action="#">
       
        <label for="fname" class="fname" >First Name :</label>
        <input type="text" id="fname" name="fname" value="<?php echo $row['fname'];?>">
 
        <label for="lname" class="lname" >Last Name :</label>
        <input type="text" id="lname" name="lname" value="<?php echo $row['lname'];?>">
 
        <label for="email" class="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email'];?>">
 
        <p class="message"><label for="message">Message :</label></p>
        <textarea id="message" name="message"><?php echo $row['message'];?></textarea><?php }}}?>
 
        <input onclick="confirm('Are you sure! You want to submit the form..')" id="submitButton" type="submit" value="submit" name="submit">
   
<hr>
<a href="https://www.facebook.com/" target="_blank"><p class="fb"><img class="logo_img" src="/pic/facebook.jpg" alt="Fb img" > Sign in with Facebook</p></a>

<a href="https://www.google.com/" target="_blank"><p class="google" ><img class="logo_img" src="/pic/google icon.jpeg" alt="google img"> Sign in with Google</p></a>

<a href="https://twitter.com/?lang=en" target="_blank"><p class="twiter" ><img class="logo_img" src="/pic/Twit.jpg" alt="twitter img"> Sign in with Twitter</p></a>


    </form>
</div>

</div>

<footer>
   <a href="#"><i class="fa fa-facebook-official"></i></a>
   <a href="#"><i class="fa fa-pinterest-p"></i></a>
   <a href="#"><i class="fa fa-twitter"></i></a>
   <a href="#"><i class="fa fa-flickr"></i></a>
   <a href="#"><i class="fa fa-linkedin"></i></a>
   <p class="w3-medium">
      stay connected with us
   </p>
</footer>
<link rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</body>
</html>