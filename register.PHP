<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark" >
<?php
require("conn.php");
?>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="username" class="form-control" placeholder="First name" required="required" autofocus="autofocus" name="username">
                    <label for="username">Username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dob" class="form-control" placeholder="Date of Birth" required="required" name="dob">
                    <label for="dob">Date of Birth</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name="email">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="hkid" class="form-control" placeholder="HKID" required="required" name="hkid">
                <label for="hkid">HKID</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
				<select name="gender" id="gender" class="form-control" placeholder="Gender" required="required">
					<option value="0">Male</option>
					<option value="1">Female</option>
				</select>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputphone" class="form-control" placeholder="Phone Number" required="required" name="phone">
                    <label for="inputphone">Phone Number</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Password" required="required" name="password">
                    <label for="confirmPassword">Password</label>
                  </div>
                </div>
              </div>
            </div>
			 <div class="form-group">
			  <div class="form-label-group">
			  <input type="text" id="address" class="form-control" placeholder="18 Tsing Wun Road, Tuen Mun, N.T." required="required" name="address">
                    <label for="address">Address</label>
			 </div>
			 </div>
            <input class="btn btn-primary btn-block" type="submit">
          </form>
		  <?php
		  if (isset($_POST["email"])){
	extract($_POST);
	$sql = "SELECT * FROM normal_user WHERE U_Email = '$email' ";
	$ls = mysqli_query($conn, $sql);

	$error = mysqli_error($conn);
	if ($error =="") {
			$total = mysqli_num_rows($ls);
	if ($total > 0){
		echo '<span style="color:red;text-align:center;">This Email is already exist!</span>';
	}else{
		$sql = "INSERT INTO normal_user VALUES(NULL,'$username','$dob','$email','$password','$hkid','$phone','$gender','$address',0)";
	mysqli_query($conn, $sql);
	$error = mysqli_error($conn);
	if ($error !=""){
		echo $error;
	}else{
		echo '<span style="color:red;text-align:center;"><h2>Congratulations! Your account have been successfully created.</h2></span>';
	}
	}
	}
}
		  ?>
          <div class="text-center">
            <a class="d-block small mt-3" href="index.php">Return to Login Page</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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