<?php
session_start();
if(isset($_SESSION['username'])){



//conection 
$conn=mysqli_connect('localhost','moamen','moamen123456','moamen') ;
// check connection 
if(!$conn){
	echo ' Connection error '.mysql_connect_error();
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact's vinsent store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class=" navigation-agileits">
			<nav class="navbar navbar-default">
<!--                <a class="navbar-brand" href="index.html"><h1>VINCENT <span>STORE</span></h1></a>-->
                <div class="logo-w3">
			         <a  class="navbar-brand" href="index.php"><h1>VINCENT<span>STORE</span></h1></a>
		        </div>
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
						
						<li><a href="about.php" class="hyper"><span>About</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
                <script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>

        
		<div class="clearfix"></div>
	</div>
</div>
<div class="sub-banner">
</div>
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>Mostafa el-nagar st.,</h5>
				<h5>Shebien el-kom city.</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>+1(401) 1234 567.</h5>
				<h5>+1(804) 4261 150.</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:info@example.com">example@gmail.com</a></h5>
				<h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<!-----------------------php----------------------------------------------------->
			<?php
	             if (isset($_POST['submit'])){
                  $your_name=$_POST['your_name'];
                  $your_email=$_POST['your_email'];
                  $your_subject=$_POST['your_subject'];
                  $your_phone_number=$_POST['your_phone_number'];
                  $your_message=$_POST['your_message'];
                       $sql = " INSERT INTO contact VALUES ( '".$your_name."' , '".$your_email."', '".$your_subject."', '".$your_phone_number."', '".$your_message."')";
                         $result=mysqli_query($conn,$sql);

                           }
                           ?>
			<!----------------------------------------------->
			<form action="#" method="post">
				<input type="text" name="your_name" placeholder="Your name" required=" ">
				<input type="text" name="your_email" placeholder="Your email" required=" ">
				<input type="text" name="your_subject" placeholder="Your subject" required=" ">
				<input type="text" name="your_phone_number" placeholder="Phone number" required=" ">
				<textarea  name="your_message" placeholder="Your_message" required=" "></textarea>
				<input type="submit" name ="submit" value="Send_message">
			</form>
			<!-----------------------php------------------->
		</div>
	</div>
</div>
<div class="map-w3ls">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>
</div>

<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a class="footer-logo" href="index.php"><h3>VINCENT <span>STORE</span></h3></a>
		<ul>
			<li>1234k Avenue, 4th block,</li>
			<li>shebien el-kom City.</li>
			<li><a href="mailto:info@example.com">info@example.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="contact.php">Contact Us</a></li>
				
			</ul>
		</div>
	
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				
				<li><a href="payment.php">Payments</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2016 Fashion Club . All rights reserved | Design by Vincent Team</p>
	</div>
    </div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>
<?php 
     }
else {
	echo "<script> alert ('You should log in first');
	location.href='login.php';
	</script>";
}

