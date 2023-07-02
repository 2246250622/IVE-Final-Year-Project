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

    <title>Confirm Lists</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
   <style>
   
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
   </style>
   	<script>
function confirmPoint()
{
	var bookid = document.getElementById('bookid').value;
	var bstatus = document.getElementById('bstatus').value;
   if(confirm("Are you sure ?\n\nBooking ID is " + bookid + "\nBooking Status is " + bstatus ))

     return true;
  
  return false;
}
	</script>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="staffhome.php">COVID-19 Online System</a>

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
          <a class="nav-link" href="staffhome.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="SProfile.php">
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
            <h6 class="dropdown-header">Staff Only:</h6>
            <a class="dropdown-item" href="BookingLists.php">Booking Lists</a>
			<a class="dropdown-item" href="ConfirmLists.php">ConfirmLists Lists</a>
          </div>
        </li>
		    <li class="nav-item">
          <a class="nav-link" href="suserlist.php">
            <i class="fas fa-fw fa-table"></i>
            <span>User List</span></a>
        </li>
		  <li class="nav-item "  >
          <a class="nav-link" href="Scomment.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Comment Area</span></a>
        </li>
		  <li class="nav-item  "  >
          <a class="nav-link" href="gift.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Gift</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="staffhome.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Confirm Lists</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Booking Records</div>
            <div class="card-body">
              <div class="table-responsive">
			  
<?php
require("conn.php");
$sql = "select * from booking_order" ;
$ls = mysqli_query($conn, $sql);
$error = mysqli_error($conn);
if ( $error != ""){
	echo $error;
}else{
	
?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Booking ID</th>
                      <th>User ID</th>
                      <th>Booking Date</th>
                      <th>Booking Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Booking ID</th>
                      <th>User ID</th>
                      <th>Booking Date</th>
                      <th>Booking Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
					<?php

while ($row = mysqli_fetch_array($ls)){
	$abc = $row["U_ID"];
	echo"<tr>";
	echo"<td>{$row["Booking_ID"]}</td>";
	echo"<td>{$row["U_ID"]}</td>";
	echo"<td>{$row["Booking_Date"]}</td>";
	echo"<td>{$row["Booking_Status"]}</td>";
	echo "</tr>";
}
	
?>			
                  </tbody>
                </table>

              </div>
            </div>
            <div class="card-footer small text-muted">(Live update)</div>
          </div>
        </div>
        <!-- /.container-fluid -->
		<!--Part2-->
				</hr>
		 <div class="row">                
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <form class="form-horizontal form-material" method="post" action="" onsubmit="return confirmPoint()">
                      <div class="form-group">
                                <label class="col-md-12">Booking ID</label>
                                <div class="col-md-12">	
							  <input type="text"  class="form-control form-control-line" id="bookid" name="bookid" value=""> </div>
								</div>
                            </div>				
                            <div class="form-group">
                               	<label class="col-md-12">Booking Status</label>
							 <div class="col-md-12">
								 <select name="bstatus" id="bstatus" class="form-control"  required="required"  >
							<option value="In Progress" checked>In Progress</option>
							<option value="Completed">Completed</option>
							</select>
							</div>
                            </div>         				
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="sumbit" name="submit">Update Status</button>
                                </div>
                            </div>
                        </form>
						
						<?php
}
?>

<?php
if (isset($_POST["submit"])) {
    include "conn.php";
    //require_once('connect_mysql.php');

    $bookid = $_POST['bookid'];
    $bstatus = $_POST['bstatus']; 
	$testhelper = 'In Progress';
	$givepoint = 1000;
	$error = mysqli_error($conn);
	   
	   	if ($error =="") {
		$sql55="select * FROM booking_order WHERE Booking_ID ='$bookid';";
		$l=mysqli_query($conn,$sql55);
		$check=mysqli_num_rows($l);
			
			if ($check == 0){
				echo "<script type='text/javascript'>alert('The Book ID Cannot Find!');</script>";
		}else{		
				$sql2 = "select * FROM booking_order WHERE Booking_ID ='$bookid' AND Booking_Status ='$testhelper';";
				$a=mysqli_query($conn,$sql2);
				$helper=mysqli_num_rows($a);
			
				if ($helper == 0){
				echo "<script type='text/javascript'>alert('The Booking Order is Completed! Please try again!');</script>";
			}else{
				
		    $sql3 = "select U_ID FROM booking_order WHERE Booking_ID = '$bookid';";
		   $lx=mysqli_query($conn,$sql3);
		   
		   while($rx=mysqli_fetch_array($lx)){
			   $uid=$rx['U_ID'];
		   }
		   
		   
	        $sql = "UPDATE booking_order SET Booking_Status = '$bstatus'
            WHERE U_ID = '$uid';";
			$l=mysqli_query($conn,$sql);
			
			
			$error = mysqli_error($conn);
			echo "<script type='text/javascript'>alert('Update booking status successfully');</script>";
			if ($error !=""){
				echo $error;
			}else{
				$sql4 = "select U_Point FROM normal_user WHERE U_ID = '$uid';";
				  $ab=mysqli_query($conn,$sql4);
				  
				  while($ed=mysqli_fetch_array($ab)){
			     $upoint=$ed['U_Point'];
		   }
		    $result_point = $upoint + $givepoint;
			
				  $sql5 = "UPDATE normal_user SET U_Point = '$result_point'
                  WHERE U_ID = '$uid';";
				  
				  $l=mysqli_query($conn,$sql5);
				
				
			}
			
		}
		}
		
}
}
?>



		 
                    </div>
                </div>
            </div>

        </div>
		<!--/Part2-->

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
            <a class="btn btn-primary" href="login.php">Delete</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>