<?php
/**
 * Created by PhpStorm.
 * User: Alamin Mahamud
 * Date: 9/8/2015
 * Time: 10:41 PM
 */

define ("PATH", "include/config.php");


class DB_Connect{


    // Constructor
    function __construct(){

    }

    // Destructor
    function __destruct(){
    }

    // Connecting TO Database
    public function connect(){
        require_once PATH;

        // connecting to mysql
        $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        echo "Connected Successfully";

        // returns database handler
        return $con;
    }

    // Closing Database Connection
    public function close($con){
        mysqli_close($con);
    }
}

?>
