<html>
	<head>
	<title>Registration-SaleNogor</title>
	<link href="reg_style.css" rel="stylesheet" type="text/css"/>
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
				
				<div class="fix reg_content">
					<div class="fix reg_header">
						<h1>Register Account</h1>
						<p>Create an account with us to receive newsletter & promotion information</p>
					</div>
					<div class="fix reg_info">
                        <form action="../../register.php" method="POST">

                            <p>Name:<br/><input placeholder="your full name" type="text" name="myname"/></p>
                            <p>User Name:<br/><input placeholder="your user name" type="text" name="username"/></p>
                            <p>E-Mail:<br/><input placeholder="someone@example.com" type="email" name="email"/></p>
                            <p>Phone:<br/><input placeholder="your mobile no" type="text" name="phone"/></p>
                            <p>Date of Birth:<br/><input placeholder="yyyy-mm-dd" type="text" name="dob"/></p>
                            <p>Address:<br/><input placeholder="Address" type="text" name="address"/></p>
                            <p>Password:<br/><input placeholder="Password" type="password" name="password"/></p>
                            <p>Confirm Password:<br/><input placeholder="Confirm Password" type="password" name="cpassword"/></p>

                            <div class ="fix container_button">
                                <input type="submit" value="Submit" name="submit"/>
                                <input type="reset" value="Cancel"/>
                            </div>
                        </form>
					</div>
				</div>
				
				
			</div>
			<div class="footer">
					<p>SaleNogor&copy;2014. All Rights Reserved</p>
			</div> 
	</body>
</html>