<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();

if(isset($_POST['submit']))
{
    $uname= $_POST['uname'];
    $pass = $_POST['password'];
}

$bool = $db-> login_user($uname, $pass);

if($bool)
{
    echo "login successful";
    session_start();
    $_SESSION['user_name'] = $uname;
    header('Location: index.php');
}
else
{
    echo "login failed";
    header('Location: login/login_index.php');

}

?>