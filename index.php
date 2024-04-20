<?php
session_start();
if(isset($_SESSION['username'])){
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vincent Store</title>
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
<!--
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><h1>HANDMADE<span></span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>+18045403380</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
-->
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
						
						<li><a href="#Category" class="hyper"><span>Category</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
						<li class="user"><a href="#" style="width: 150px;height: 50px;"><img src="images/user-circle-solid.svg" style="width: 20px; height: 20px;border-radius: 100px;margin-right: 5px;"><div style="display: inline-block;margin-top: -10px;margin-left: 5px;"><p><?php echo htmlspecialchars($_SESSION['username'])?></p></div></a></li>


						<li class="user"><div style="display: inline-block;margin-top: 13px;margin-left: 5px;"><a href="log.php" >Log out</a></div></li>


					</ul>
				</div>
			</nav>
		</div>
    
		<div class="clearfix"></div>
	</div>
</div>
<div class="banner-agile">
    <div class="overlay-bg"></div>
	<div class="container">
		<div class="front-view">
            <h2>WELCOME TO</h2>
            <h3>VINCENT <span>STORE</span></h3>
            <p>What you look for you will find. </p>
          
        </div>
	</div>
</div>
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<div class="bb-left-agileits-w3layouts-inner">
					
			</div>
		</div>
		<div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
			<div class="bb-middle-top">
				
			</div>
			<div class="bb-middle-bottom">
				
			</div>
		</div>
		<div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
			<div class="bb-right-top">
				
			</div>
			<div class="bb-right-bottom">
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="top-products" id="Category">
	<div class="container">
		<h3 > Category </h3>
		<div >
			<button onclick="myfunction()" name="bt3">Upload file</button>
			<script>
				function myfunction(){
					var x=document.createElement("INPUT");
					x.setAttribute("type","file");
					document.body.appendChild(x);
				}
			</script>
		</div>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Paint</span></li>
					<li class="resp-tab-item"><span>Bracelet</span></li>
					<li class="resp-tab-item"><span>handicrafts</span></li>	
<!--					<li class="resp-tab-item"><span>Cosmetics</span></li>						-->
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php">
                                <div class="product-img">
								<img src="images/paints1.jpeg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Natural" /> 
									<input type="hidden" name="amount" value="220.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Natural</h4>
							<h5>$220.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.php"><div class="product-img">
								<img src="images/paints2.jpeg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Formal shirt" /> 
									<input type="hidden" name="amount" value="190.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>butterfly</h4>
							<h5>$190.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.php"><div class="product-img">
								<img src="images/paints3.jpeg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Blazer" /> 
									<input type="hidden" name="amount" value="160.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>flowers</h4>
							<h5>$160.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/paints4.jpeg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual shoes" /> 
									<input type="hidden" name="amount" value="250.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>girl</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="clearfix"></div>
						<div class="top-products-set2">
						<div class="col-md-3 top-product-grids tp5">
							<a href="single.php"><div class="product-img">
								<img src="images/im1%20(3).jpg" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Inner wear" /> 
									<input type="hidden" name="amount" value="50.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>independentwomen</h4>
							<h5>$50.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp6">
							<a href="single.php"><div class="product-img">
								<img src="images/im1%20(1).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Shoes" /> 
									<input type="hidden" name="amount" value="150.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>bubble girl</h4>
							<h5>$150.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp7">
							<a href="single.php"><div class="product-img">
								<img src="images/im1%20(2).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Formal shirt" /> 
									<input type="hidden" name="amount" value="100.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>lonely</h4>
							<h5>$100.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/im1%20(4).jpg" alt=""/>
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Watch" /> 
									<input type="hidden" name="amount" value="200.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Rural life</h4>
							<h5>$200.00</h5>						
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php"><div class="product-img">
								<img src="images/imag.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="220.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$220.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.php"><div class="product-img">
								<img src="images/im5%20(1).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="190.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$190.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.php"><div class="product-img">
								<img src="images/im5%20(2).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="160.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$160.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/im5%20(3).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="250.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="clearfix"></div>
						<div class="top-products-set2">
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/im5%20(4).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="250.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/im5%20(5).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="250.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/im5%20(6).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="350.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$350.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/im5%20(7).jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
									<input type="hidden" name="amount" value="200.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>barcelet</h4>
							<h5>$200.00</h5>						
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php"><div class="product-img">
								<img src="images/im10.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="90.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>carpet</h4>
							<h5>$90.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.php"><div class="product-img">
								<img src="images/im6.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>basket</h4>
							<h5>$60.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.php"><div class="product-img">
								<img src="images/im7.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="120.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>vase</h4>
							<h5>$120.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/im8.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="70.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Handbag</h4>
							<h5>$70.00</h5>						
						</div>
						<div class="clearfix"></div>	
						<div class="top-products-set2">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php"><div class="product-img">
								<img src="images/im9.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="290.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>lamp</h4>
							<h5>$290.00</h5>
						</div>	
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php"><div class="product-img">
								<img src="images/ima.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="50.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>dish</h4>
							<h5>$50.00</h5>
						</div>	
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php"><div class="product-img">
								<img src="images/ima1.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="70.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>antique</h4>
							<h5>$70.00</h5>
						</div>	
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php"><div class="product-img">
								<img src="images/ima2.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Handbag" /> 
									<input type="hidden" name="amount" value="190.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>hats</h4>
							<h5>$190.00</h5>
						</div>						
						<div class="clearfix"></div>
						</div>						
					</div>		
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.php"><div class="product-img">
								<img src="images/tp13.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Eye makeup" /> 
									<input type="hidden" name="amount" value="90.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye makeup</h4>
							<h5>$90.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.php"><div class="product-img">
								<img src="images/tp14.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Gold makeup" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Gold makeup</h4>
							<h5>$60.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.php"><div class="product-img">
								<img src="images/tp15.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Tya Makeup kit" /> 
									<input type="hidden" name="amount" value="120.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Tya Makeup kit</h4>
							<h5>$120.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/tp16.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Vega Brushes" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Vega Brushes</h4>
							<h5>$60.00</h5>						
						</div>
						<div class="clearfix"></div>	
						<div class="top-products-set2">
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/cp5.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Vega Brushes" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Lipstick</h4>
							<h5>$60.00</h5>						
						</div>	
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/cp4.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Vega Brushes" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye liner</h4>
							<h5>$60.00</h5>						
						</div>	
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/cp7.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Eye shades" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye shades</h4>
							<h5>$60.00</h5>						
						</div>	
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.php"><div class="product-img">
								<img src="images/cp8.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Eye shades" /> 
									<input type="hidden" name="amount" value="160.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye shades</h4>
							<h5>$160.00</h5>						
						</div>						
						<div class="clearfix"></div>
						</div>
					</div>						
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Our Services</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24/7 online free support</h4>
					<p> We are avialable any time and,usually, every day.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Free shipping</h4>
					<p>As a prime member enjoy fast, free delivery on over 100 item Also ,gain early acess to deals,prime execlusive brands, video and music streaming .</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
				
				</div>
				<div class="col-md-10 ftext">
					<h4>100% money back</h4>
					<p>if you cancelled the order in the specified days you will take 100% of your money ssssssssss</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
			
		</div>
		<div class="clearfix"></div>
	</div>
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 



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
                <li><a href="payment.php">Payment</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2019 Vincent Store . All rights reserved | Design by Vincent Team.</p>
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

?>