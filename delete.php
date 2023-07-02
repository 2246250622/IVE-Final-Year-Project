<?php
session_start();
header("Content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *");
require("conn.php");

if (isset($_POST["submit"])) {
    include "conn.php";
    //require_once('connect_mysql.php');
	$sql="Delete From normal_user where U_Email = '".$_SESSION['email']."'";
    $result = mysqli_query($conn, $sql);

    if ($result) {  
	echo '<script>alert("Delete successful!")</script>';
	echo '<script>window.location="index.php";</script>';
	;
    }
    else {  
    echo '<script>alert("Delete failed!");history.go(-1);</script>';
    }
}?>