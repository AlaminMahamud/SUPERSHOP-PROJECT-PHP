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

    function login_user()
    {

    }

    function registration_user()
    {

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
        while ($product=mysqli_fetch_array($product_row_count,MYSQL_ASSOC))
            echo $product["name"]."<br/>";



    }

    function email_customer()
    {

    }

    function email_supplier()
    {

    }
} 