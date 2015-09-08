<?php
/**
 * Created by PhpStorm.
 * User: Alamin Mahamud
 * Date: 9/8/2015
 * Time: 9:49 AM
 */

define("TABLE_PRODUCT", 'product');

class DB_Functions {

    private $db,$con;

    // Constructor
    function __construct(){
        require_once 'DB_Connect.php';
        // Connecting TO Database
        $this->db = new DB_Connect();
        $this->con = $this->db->connect();
    }
    // Destructor
    function __destruct(){
    }

    function login_user($uname, $password)
    {
        if(($this->check_user($uname)))
        {
            $sql = "SELECT * FROM user WHERE (user_name, user_password) IN (('{$uname}','{$password}')) ";
            if ($result=mysqli_query($this->con,$sql))
            {
                $rowcount=mysqli_num_rows($result);

                if($rowcount > 0){
                    return true;
                }else{
                    // user not Exist
                    return false;
                }
            }else {
                echo "everything went wrong!";
            }
        }
        // else redirect him to the login page
    }

    function registration_user($full_name, $user_name, $password, $email, $date, $address, $phone)
    {
        if(!($this->check_user($user_name)))
        {
            $sql = "INSERT INTO user (address, birthday, email, mobile, name, user_name, user_password,purchase_amount)
                    VALUES ('{$address}','{$date}','{$email}','{$phone}','{$full_name}','{$user_name}','{$password}',0)";
            if ($result=mysqli_query($this->con,$sql))
            {
                return true;
            }else {
                echo "everything went wrong!";
            }
        }
    }

    function buy_product()
    {

    }

    function update_product_quantity()
    {

    }

    function view_product()
    {

    }

    function get_all_products()
    {
        $sql = "SELECT * FROM ".TABLE_PRODUCT;

        if ($result=mysqli_query($this->con,$sql))
        {
            $rowcount=mysqli_num_rows($result);

            if($rowcount > 0){
                return $result;
            }else{
                // user not Exist
                return false;
            }
        }else
        {
            echo "everything went wrong!";
        }
    }

    function populate_the_product()
    {
        $product_row_count = $this->get_all_products();
        while ($product=mysqli_fetch_array($product_row_count,MYSQL_ASSOC)) {
            echo '<div class="product">
					<div class="image">
						<a href="">
							<img alt="POTATO SEASONAL (NEW) BULK" title="POTATO SEASONAL (NEW) BULK" src="image\Product\POTATO SEASONAL (NEW) BULK.jpg">
						</a>
					</div>
					<div class="description">
						<h4>
							<a href="">' . $product["name"] . '</a>
						</h4>
						<p class="size">Our Price/1.00 Kilogram</p>
					</div>
					<div class="price"> ' . $product["sell_price"] . ' </div>
					<div class="action-control">
						<a href="">
							<img alt="add2cart" title="add2cart" src="image\Product\add2cart.PNG">
						</a>
					</div>
				</div>';
        }

    }

    function email_customer()
    {

    }

    function email_supplier()
    {

    }

    private function check_user($uname)
    {
        $sql = "SELECT 'user_name' FROM `user` WHERE user_name = '{$uname}' ";
        if ($result=mysqli_query($this->con,$sql))
        {
            $rowcount=mysqli_num_rows($result);

            if($rowcount > 0){
                return true;
            }else{
                // user not Exist
                return false;
            }
        }else {
            echo "everything went wrong!";
        }
    }
} 