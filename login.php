<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();

if(isset($_POST['submit']))
{
    $uname= $_POST['uname'];
    $pass = $_POST['password'];
}

$db-> login_user($uname, $pass);
?>