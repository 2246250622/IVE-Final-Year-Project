<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  </head>


  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Forgot your password?</h4>
            <p>Enter your information and we will reset your password to random numbers</p>
          </div>
          <form method="post" action="">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus" name="inputEmail">
                <label for="inputEmail">Enter email address</label>
				</div>
				<br>
				  <div class="form-label-group">
				<input type="text" id="inputPhone" class="form-control" placeholder="Enter Phone Number" required="required" autofocus="autofocus" name="inputPhone">
                <label for="inputPhone">Enter phone number</label>
				</div>
				<br>
			  <div class="form-label-group">
				<input type="text" id="inputHKID" class="form-control" placeholder="Enter Phone Number" required="required" autofocus="autofocus" name="inputHKID">
                <label for="inputHKID">Enter HKID</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" id="submit" type="sumbit" name="submit">Reset Password</button>

          </form>
		  <?php
 if (isset($_POST["submit"])) {
    include "conn.php";
  $email = $_POST['inputEmail'];
  $phone = $_POST['inputPhone'];
  $hkid  =  $_POST['inputHKID'];
  
     function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

  $generateRandomString = generateRandomString();
  
  $error = mysqli_error($conn);
   	if ($error =="") {
		$sql1="select * FROM normal_user WHERE U_Email ='$email' AND U_Phone ='$phone' AND U_HKID ='$hkid' ;";
		$l=mysqli_query($conn,$sql1);
		$check=mysqli_num_rows($l);
		
		
		
			if ($check == 0){
		 echo "<script type='text/javascript'>alert('Sorry! The Information is incorrect, Please try again.');</script>";;
			}else{
			$sql2 = "UPDATE normal_user SET U_Password = '$generateRandomString'
              WHERE U_Email = '$email';";
				
			 $l=mysqli_query($conn,$sql2);
		echo "<script type='text/javascript'>alert('Congratulations you password is reseted \\nAnd your new password  is : $generateRandomString \\nPlease remember your password!!! ');</script>";
			$yourURL="index.php";
          echo ("<script>location.href='$yourURL'</script>");
		  	if ($error !=""){
		echo $error;
	}else{
		
	}
		  
			}
 }  
 }
		  
		  ?>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php" >Register an Account</a>
            <a class="d-block small" href="index.php" >Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
