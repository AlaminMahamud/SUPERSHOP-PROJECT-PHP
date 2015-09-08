<html>
	<head>
	<title>Best Sellers</title>
	<link href="product-page.css" rel="stylesheet" type="text/css"/>
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
				</div>
				<div class="fix best_sell_item">
                    <?php
                    include __DIR__.'/product.php';
                    ?>
                </div>
			</div>

			<div class="footer">
					<p>SaleNogor&copy;2015. All Rights Reserved</p>
				</div>
	</body>
</html>