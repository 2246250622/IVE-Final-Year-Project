<?php

header("Content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *");

session_start();

if (isset($_POST["submit"])) {
    include "conn.php";
    //require_once('connect_mysql.php');

    $fname = $_POST['fname']; 
    $email = $_POST['email'];   
	$password = $_POST['password'];   
	$PhoneNo = $_POST['PhoneNo'];   
    

    $sql = "UPDATE admins SET A_Name = '$fname', A_Password = '$password', A_Phone = '$PhoneNo' WHERE A_Email = '$_POST[email]';";
    $result = mysqli_query($conn, $sql);

    if ($result) {  
	echo '<script>alert("Update successful!");history.go(-1);</script>';
	echo '<script>window.location="AProfile.php";</script>';
	;
    }
    else {  
    echo '<script>alert("Update fail!");history.go(-1);</script>';
    }
}?>