<?php

header("Content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin: *");

session_start();

if (isset($_POST["submit"])) {
    include "conn.php";
    //require_once('connect_mysql.php');

    $fname = $_POST['fname'];
    $hkid = $_POST['hkid']; 
    $email = $_POST['email'];   
	$password = $_POST['password'];   
	$PhoneNo = $_POST['PhoneNo'];   
	$gender = $_POST['gender'];
	$address = $_POST['address'];
    

    $sql = "UPDATE normal_user SET U_Name = '$fname', U_HKID = '$hkid', U_Password = '$password', U_Phone = '$PhoneNo',  U_Gender = '$gender', U_Address = '$address'
            WHERE U_Email = '$_POST[email]';";
    $result = mysqli_query($conn, $sql);

    if ($result) {  
	echo '<script>alert("Update successful!");history.go(-1);</script>';
	echo '<script>window.location="Profile.php";</script>';
	;
    }
    else {  
    echo '<script>alert("Update fail!");history.go(-1);</script>';
    }
}?>