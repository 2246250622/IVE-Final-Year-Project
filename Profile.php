<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Normal User Profile</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<style>
	#timer{
	color: red;
	}
	</style>
	
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="home.php">COVID-19 Online System</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#" data-toggle="modal" data-target="#DeleteModal">Delete Account</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		<li class="nav-item active">
          <a class="nav-link" href="Profile.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">User Only:</h6>
            <a class="dropdown-item" href="BookDate.php">Book Date</a>
            <a class="dropdown-item" href="CancelBookDate.php">Cancel Book Date</a>
            <a class="dropdown-item" href="BookVenue.php">Book Venue</a> 
            <a class="dropdown-item" href="CancelBookVenue.php">Cancel Book Venue</a> 
          </div>
        </li>
		     <li class="nav-item">
          <a class="nav-link" href="MyBooking.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Booking</span></a>
        </li>
		    <li class="nav-item">
          <a class="nav-link" href="mypoint.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Point</span></a>
        </li>
			 <li class="nav-item">
          <a class="nav-link" href="Policy.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Comment Area</span></a>
        </li>
		
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="home.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Profile</li>	
          </ol>
		
          <!-- Page Content -->
         <div class="row">                
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <form class="form-horizontal form-material" method="post" action="profileNhelper.php">
<?php
require("conn.php");

 $sql="select * from Normal_User where U_Email = '".$_SESSION['email']."'";
$result=mysqli_query($conn, $sql);
$error = mysqli_error($conn);

if ($error !=""){
	echo $error;
}else{ 

while($row= mysqli_fetch_array($result))

	
{
	


$check = $row['U_Gender'];

if ($check == 0){
	$sex = "Male";
}else if ($check == 1) {
	$sex = "Female";
}

?>
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text"  class="form-control form-control-line" name="fname" value="<?php echo $row['U_Name']; ?>" required> </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-12">HK ID</label>
                                <div class="col-md-12">
                                    <input type="text"  class="form-control form-control-line" name="hkid"  value="<?php echo $row['U_HKID']; ?>" readonly="true"> </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" class="form-control form-control-line" name="email" id="example-email" readonly="true" value="<?php echo $row['U_Email']; ?>"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password"  class="form-control form-control-line" name="password" value="<?php echo $row['U_Password']; ?>" required> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="12345678" class="form-control form-control-line" name="PhoneNo" value="<?php echo $row['U_Phone']; ?>" required> </div>
                            </div>       
							<div class="form-group">
							<label class="col-md-12">Gender</label>
							 <div class="col-md-12">
								 <select name="gender" id="gender" class="form-control" placeholder="Gender" required="required"  >
						   <option value="<?php echo $check; ?> " checked> <?php echo $sex; ?> (Your Options) </option>
							<option value="0">Male</option>
							<option value="1">Female</option>
							</select>
							</div>
                            </div>
							<div class="form-group">
							<label class="col-md-12">Address</label>
							 <div class="col-md-12">
                                    <input type="text" rows="4" cols="50" placeholder="18 Tsing Wun Road, Tuen Mun, N.T." class="form-control form-control-line" name="address" value="<?php echo $row['U_Address']; ?>" required> </div>
							</div>
		
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="sumbit" name="submit">Update Profile</button>
                                </div>
                            </div>
							
                        </form>
						
						<?php
}
?>
						<?php
}
?>


                    </div>
                </div>
            </div>

        </div>
					<div style="display: flex; justify-content: flex-end" id="timer"></div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © COVID-19 Online System 2021</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

		<!-- Delete Modal-->
	<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete the account??</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Delete" below if you confirm delete account and users’ order records.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
           <form class="form-horizontal form-material" method="post" action="delete.php">
            <button class="btn btn-primary"  name="submit" type="submit" >Delete</button>
			</form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
<script src="timescript.js"></script>