<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Staff</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="adminshome.php">COVID-19 Online System</a>

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
          <a class="nav-link" href="adminshome.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link" href="AProfile.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Admin Only:</h6>
            <a class="dropdown-item" href="createstaff.php">Create Staff</a>
           <a class="dropdown-item" href="abookrecords.php">Booking Records</a> 
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="stafflist.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Staff List</span></a>
        </li>
			 <li class="nav-item">
          <a class="nav-link" href="auserlist.php">
            <i class="fas fa-fw fa-table"></i>
            <span>User List</span></a>
        </li>
		 <li class="nav-item ">
          <a class="nav-link" href="salary.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Salary List</span></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="Acomment.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Comment Area</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="adminshome.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create Staff</li>
          </ol>

          <!-- Page Content -->

         <div class="row">                
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <form class="form-horizontal form-material" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
<?php
require("conn.php");


?>
                            <div class="form-group">
                                <label class="col-md-12">Staff Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Chan Tai Man" class="form-control form-control-line" name="fname" required="required"> </div>
                            </div>				
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Staff Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="xxx@gmail.com" class="form-control form-control-line" name="email" id="example-email"  required="required"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Staff Password</label>
                                <div class="col-md-12">
                                    <input type="password" placeholder="******" class="form-control form-control-line" name="password" required="required"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Staff Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="12345678" class="form-control form-control-line" name="PhoneNo" required="required"> </div>
                            </div>       
						
		
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="sumbit" name="submit">Create Staff</button>
                                </div>
                            </div>
                        </form>
						 <?php
		  if (isset($_POST["email"])){
	extract($_POST);
	$sql = "SELECT * FROM staff WHERE S_Email = '$email' ";
	$ls = mysqli_query($conn, $sql);

	$error = mysqli_error($conn);
	if ($error =="") {
			$total = mysqli_num_rows($ls);
	if ($total > 0){
		echo '<span style="color:red;text-align:center;">This Email is already exist!</span>';
	}else{
		$sql = "INSERT INTO staff VALUES(NULL,'$fname','$email','$password','$PhoneNo', '')";
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
		 
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © COVID-19 Online system 2021</span>
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
			</form>>
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