<?php
session_start();
header("Content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *");
require("conn.php");

if (isset($_POST["submit"])) {
    include "conn.php";
	
	
	
    //require_once('connect_mysql.php');
	$sql="Delete From booking_orderlocation where U_ID = '".$_SESSION['uids']."'";
    $result = mysqli_query($conn, $sql);

    if ($result) {  
	echo '<script>alert("Successfully cleared!")</script>';
	echo '<script>window.location="BookVenue.php";</script>';
	;
    }
    else {  
    echo '<script>alert("Cancel failed!");history.go(-1);</script>';
    }
}?>