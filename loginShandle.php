<?php
session_start();
    header("Content-type: text/html; charset=utf-8");
	$_SESSION['email'] = $_POST['email']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
   $conn = new mysqli('localhost','root','','projectdb');
    if ($conn->connect_error){
        echo 'fail!';
        exit(0);
    }else{
        if ($email == ''){
            echo '<script>alert("Please input Email!");history.go(-1);</script>';
            exit(0);
        }
        if ($password == ''){
            echo '<script>alert("Please input password!");history.go(-1);</script>';
            exit(0);
        }
        $sql = "SELECT * FROM staff WHERE S_Email  = '$_POST[email]' and S_Password = '$_POST[password]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
            echo '<script>window.location="staffhome.php";</script>';
        } else {
            echo '<script>alert("User email or password is wrong!");history.go(-1);</script>';
        }
    }
	?>