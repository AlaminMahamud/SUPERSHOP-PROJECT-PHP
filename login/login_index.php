<html>
<head>
    <title>Login-SaleNogor</title>
    <link href="login_style.css" rel="stylesheet" type="text/css"/>
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
                <li><a href="">BAKERY</a></li>
                <li><a href="">DAIRY-FROZEN</a></li>
                <li><a href="">FRUITS-VEGETABLES</a></li>
                <li><a href="">GROCRY</a></li>
                <li><a href="">HEALH-BEAUTY</a></li>
                <li><a href="">HOUSE HOLD</a></li>
                <li><a href="">HOUSEWARES</a></li>
                <li><a href="">MEAT-FISH</a></li>
            </ul>
        </div>
        <div class="fix login">
            <h1>ACCOUNT LOGIN</h1>

            <div class ="fix container">
                <div class ="fix customer_reg">
                    <div class="fix loginContent">
                        <div class="fix heading">
                            <div class="fix heading-wrap">
                                <h2>New to SaleNogor? </h2>
                                <b>Register Now</b>
                            </div>
                        </div>
                        <div class="fix form-group">
                            <h3>Why register? </h3>
                            <p>
                                - Wide selection of products
                                <br>
                                - Quality and service you'll love
                                <br>
                                - On time delivery guarantee
                                <br>
                                - Shop on the go from Any devices
                            </p>
                        </div>
                        <div class ="fix container_button">
                            <a href="reg/reg_index.html"><input type="submit" value="SING UP NOW!"/></a>
                        </div>
                    </div>

                    <div class ="fix container_info">
                        <div class="fix heading-wrap">
                            <h1>Already registered?</h1>
                            <b>I am a loyal customer</b>
                        </div>
                        <form action="../login.php" method="POST">
                            <p>User Name<br/><input placeholder="your username" type="text" name="uname"/></p>
                            <p>Password<br/><input placeholder="password" name="password" type="password"/></p>
                            <div class ="fix container_button">
                                <input type="submit" name="submit" value="Submit"/>
                                <input type="reset" value="Cancel"/>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class ="fix container">

                <div class="fix loginContent">
                    <div class="fix heading">
                        <div class="fix heading-wrap">
                            <br>
                            <br>
                            <h2>Only Owner Can Login!!!</h2>
                            <b>It's an administrative Panel </b>
                        </div>
                    </div>
                </div>
                <div class ="fix container_info">

                    <div class="fix heading-wrap">
                        <h1>Login as An Administrator</h1>
                    </div>

                    <form action="../login.php">
                        <p>Password<br/><input placeholder="Password" name="adminPass" type="password"/></p>
                        <div class ="fix container_button">
                            <input type="submit" value="Submit"/>
                            <input type="reset" value="Cancel"/>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
</div>
<div class="footer">
    <p>SaleNogor&copy;2014. All Rights Reserved</p>
</div>
</body>
</html>