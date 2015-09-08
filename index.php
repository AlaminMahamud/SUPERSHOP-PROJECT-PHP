<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();
session_start();
?>

<html>
	<head>
	<title>saleNogor</title>
	<link href="css/bar/bar.css" rel="stylesheet" type="text/css"/>
	<link href="css/dark/dark.css" rel="stylesheet" type="text/css"/>
	<link href="css/default/default.css" rel="stylesheet" type="text/css"/>
	<link href="css/light/light.css" rel="stylesheet" type="text/css"/>
	<link href="css/nivo-slider.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	
	</head>
	<body>
		<div class="fix main">
			<div class="fix header">
				
					<div class="fix logo">
						<img src="image/logo.png" alt=""/>
					</div> 
					<div class="fix site_title">
						<h1>SaleNogor</h1>
						<h2>The power to BUY, the power to SAVE</h2> 
					</div> 
					<div class="header_right">
                        <?php
                            if(isset($_SESSION['user_name']))
                                echo 'Logged in as <b>'. $_SESSION['user_name'].'</b> | <a href="logout.php"> Log out</a> |
                        <a href="">Cart</a>';
                            else
                            {
                                session_destroy();
                                echo '<a href="login/login_index.php">Log in</a>'.
                                ' | <a href="login\reg\reg_index.php">Register</a>';
                            }
                        ?>
					</div>
				
				<div class="fix singin">
				
				</div> 
			</div> 
			<div class="fix maincontent">
				<div class="fix menu">
					<ul>
						<li><a href="">BALERY</a></li>
						<li><a href="">DAIRY-FROZEN</a></li>
						<li><a href="">FRUITS-VEGETABLES</a></li>
						<li><a href="">GROCRY</a></li>
						<li><a href="">HEALH-BEAUTY</a></li>
						<li><a href="">HOUSE HOLD</a></li>
						<li><a href="">HOUSEWARES</a></li>
						<li><a href="">MEAT-FISH</a></li>
						
					</ul>
				</div>
				<div class=""></div>
			</div> 
			<div class="fix slider">
				<div class="slider-wrapper theme-default">
					<div class="nivoSlider" id="slider">
						<img src="image/slider/slider1.jpg" alt=""/>
						<img src="image/slider/slider5.jpg" alt=""/>
						<img src="image/slider/slider3.jpg" alt=""/>
						<img src="image/slider/slider4.jpg" alt=""/>
					</div>
				</div>
			</div>
			<div class="fix best_sell">
				<h2>BEST SELLERS</h2>
				<h1><a href="product-page.php">VIEW ALL BEST SELLERS</a></h1>
			</div>
			<div class="fix best_sell_item">
                <?php
                    include 'product.php';
                ?>

			</div>
		</div>
			
		<div class="footer">
			<p>SaleNogor&copy;2015. All Rights Reserved</p>
		</div> 
		
		<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		</script>

		
	</body>
</html>