<?php
/**
 * Created by PhpStorm.
 * User: Md. Alamin Mahamud
 * Date: 08/09/2015
 * Time: 07:53 PM
 */
session_start();
unset($_SESSION['user_name']);
session_destroy();
header('Location: index.php');

?>