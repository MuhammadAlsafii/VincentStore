
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login's Vincent store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vincent Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
		<!--	<nav class="navbar navbar-default"> -->
<!--                <a class="navbar-brand" href="index.html"><h1>VINCENT <span>STORE</span></h1></a>-->
                <div class="logo-w3">
			         <a  class="navbar-brand" href="index.php"><h1>VINCENT<span>STORE</span></h1></a>
		        </div>
		<!--		<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
						
									
						<li><a href="about.php" class="hyper"><span>Category</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
						<li class="user"><a href="login.php" style="width: 100px;height: 50px;"><img src="images/user-circle-solid.svg" style="width: 20px; height: 20px;border-radius: 100px;margin-right: 5px;"><div style="display: inline-block;margin-top: -10px;margin-left: 5px;"><p>Login</p></div></a></li>	
					</ul>
				</div>
		<!--	</nav> -->
		</div>
         <!--       <script>
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
				</script>  -->

		 <div class="clearfix"></div>
	</div>
</div>
	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					
					<h3>Login</h3>
					<form action="login.php" method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" name="name" required="" placeholder="Email">
							<div class="clearfix"></div>
						    </div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="pass" required="" placeholder="Password">
							<div class="clearfix"></div>
						</div>
						<input type="submit"  name = "submit" value="Login">
					</form>
					
				</div>
				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
	
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a class="footer-logo" href="index.php"><h3>VINCENT <span>STORE</span></h3></a>
		<ul>
			<li>Mostafa el-nagar st.,</li>
			<li>Shebien el-kom City.</li>
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
		<p class="copy-right">© 2019 Vincnet Store . All rights reserved | Design by Vincent Team.</p>
	</div>
</div>
	<!-- cart-js -->
<!--	<script src="js/minicart.js"></script>
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
    </script>  -->
	<!-- //cart-js -->  
</body>
</html>
<!-------------------------------------------php------------------------------------>
			
	                 <!------------------------------------------php--------------------------------------->
	                <?php
                        if (isset($_POST['submit'])){
	                   	$conn=mysqli_connect('localhost','moamen','moamen123456','moamen') ;
                       if(!$conn){
                     	echo ' Connection error '.mysql_connect_error();
                       }
                                              $username=$_POST['name'];
                                              $password=$_POST['pass'];
                                              $sql = " SELECT * FROM  user ";
                                             if(!$result=mysqli_query($conn,$sql)){
                                            echo "error";
                                             } else{
                                             	while ( $row=$result->fetch_array() ) {
                                             	if($row[1]==$username and $row[3]==$password){
                                                 $_SESSION['username']=$username;
                                                 echo "<script > location.href='index.php'</script>";
                         	                  }
                                            }
                                             echo "<script> alert ('Password or Username is not correct ');
	                             location.href='login.php';
	                           </script>";
                                             }
                                         }
?>