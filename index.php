<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Supershop</title>
</head>
<body>

<a href="login.php">login</a>
<a href="register.php">register</a>

<div id="prdoucts">


    <?php
    echo "I am Here<br/>";
    $db->populate_the_product();
    ?>


</div>

</body>
</html>