<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();

if(isset($_POST['submit']))
{
    $full_name = $_POST['myname'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $date= $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if($password == $cpassword)
    {
       $bool =  $db->registration_user($full_name, $user_name, $password, $email, $date, $address, $phone);
    }
}
else
{
    header('Location: login/reg/reg_index.php');
}

    if(isset($bool))
    {
        if($bool)
        {
            echo "User Registered<br/>";
            echo  $full_name .'<br/>'. $user_name.'<br/>'.$password.'<br/>'.$email.'<br/>'.$date.'<br/>'.$address.'<br/>'.$phone;
            session_start();
            $_SESSION['user_name'] = $user_name;
            header('Location: index.php');
        }
        else
        {
            echo "Already reg";
            echo  $full_name .'<br/>'. $user_name.'<br/>'.$password.'<br/>'.$email.'<br/>'.$date.'<br/>'.$address.'<br/>'.$phone;
                    }
    }

?>