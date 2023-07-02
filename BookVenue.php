<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Book Venue</title>

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
	position: absolute;
    top: 100%;
    right: 0%;
	}
	</style>
	
   <script type="text/javascript" 
   src="jslib/jquery-1.11.1.js"></script>
   <script type="text/javascript" language="javascript"></script>
   
<script>
$(document).ready(function(){
	$("#show2").hide();
	$("#show3").hide();
	$("#show4").hide();
	$("#show5").hide();
	$("#show6").hide();
	$("#show7").hide();
	$("#show8").hide();
	
	
	
    $('#area').on('change', function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script>


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
		<li class="nav-item">
          <a class="nav-link" href="Profile.php">
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
			 <li class="nav-item">
          <a class="nav-link" href="Policy.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Comment Area</span></a>
        </li>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="home.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Book Venue</li>
          </ol>

          <!-- Page Content -->

         <div class="row">                
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <form class="form-horizontal form-material" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
<?php
require("conn.php");

$sql="select * from Normal_User where U_Email = '".$_SESSION['email']."'";


$result=mysqli_query($conn, $sql);
$error = mysqli_error($conn);

if ($error !=""){

}else{ 

while($row= mysqli_fetch_array($result))

$iud=$row['U_ID'];
$_SESSION['uids']=$iud;

}
	


?>
<?php
$sql333="select * from booking_order where U_ID = '$iud'";
	$result=mysqli_query($conn, $sql333);
	$abc = mysqli_error($conn);
	
	if ($error !=""){
	echo $error;
}else{ 

while($rows= mysqli_fetch_array($result))
	$bids = $rows['Booking_ID'];
}
?>
                            <div class="form-group">
                                <label class="col-md-12">Booking ID</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="bids" value="<?php echo $bids; ?>" readonly="true"> </div>
                            </div>
						   <div class="form-group">
						      <label class="col-md-12">Location</label>
						   <div class="col-md-12">
							<select name="area" id="area" class="form-control" required="required"  >
							<option value="1">1 - Quarry Bay Community Hall in Eastern District</option>
							<option value="2">2 - Leighton Hill Community Hall in Wan Chai</option>
							<option value="3">3 - Shek Tong Tsui Sports Centre in Central and Western</option>
							<option value="4">4 - Henry G Leong Yaumatei Community Centre</option>
							<option value="5">5 - Yau Tong Community Hall</option>
							<option value="6">6 - Pak Tin Community Hall in Sham Shui Po</option>
							<option value="7">7 - Lek Yuen Community Hall in Sha Tin</option>
							<option value="8">8 - Hang Hau Community Hall</option>
							</select>
							</div>
							</div>	

<div id="show1" class="myDiv">
	 Quarry Bay Community Hall in Eastern District：
<div class="mapouter"> <div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=Quarry%20Bay%20Community%20Hall%20in%20Eastern%20District&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>
<div id="show2" class="myDiv">
	Leighton Hill Community Hall in Wan Chai：
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=Leighton%20Hill%20Community%20Hall%20in%20Wan%20Chai&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>
<div id="show3" class="myDiv">
	Shek Tong Tsui Sports Centre in Central and Western：
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=%20Shek%20Tong%20Tsui%20Sports%20Centre%20in%20Central%20and%20Western&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>
<div id="show4" class="myDiv">
Henry G Leong Yaumatei Community Centre：
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=%20Henry%20G%20Leong%20Yaumatei%20Community%20Centre&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>
<div id="show5" class="myDiv">
Yau Tong Community Hall：
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=Yau%20Tong%20Community%20Hall&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>
<div id="show6" class="myDiv">
Pak Tin Community Hall in Sham Shui Po：
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=pak%20Tin%20Community%20Hall%20in%20Sham%20Shui%20Po&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>
<div id="show7" class="myDiv">
Lek Yuen Community Hall in Sha Tin：
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=Lek%20Yuen%20Community%20Hall%20in%20Sha%20Tin&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>
<div id="show8" class="myDiv">
Hang Hau Community Hall：
<div class="mapouter"><div class="gmap_canvas"><iframe width="1200" height="543" id="gmap_canvas" src="https://maps.google.com/maps?q=Hang%20Hau%20Community%20Hall&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></style></div></div>
</div>

							
                            <div class="form-group">
                                <div class="col-sm-12">
								<br>
                                    <button class="btn btn-success" type="sumbit" name="submit">Create Venue</button>
                                </div>
                            </div>
                        </form>
					<?php
					if (isset($_POST["submit"])) {
						
	$bid = $_POST['bids'];
    $area = $_POST['area']; 
	
					$sql3="SELECT * FROM booking_orderlocation WHERE Booking_ID ='".$bid."'";

			$l=mysqli_query($conn,$sql3);
	$error = mysqli_error($conn);

	
	if ($error =="") {
			$check=mysqli_num_rows($l);
	if ($check > 0){
		echo '<span style="color:red;text-align:center;">You have already selected a location!</span>';
	}else{
		$sqls = "INSERT INTO booking_orderlocation VALUES(null,'$iud','$bid','$area')";
		mysqli_query($conn, $sqls);
		$error = mysqli_error($conn);
		if ($error !=""){
		echo $error;
	}else{
		echo '<span style="color:red;text-align:center;"><h2>Congratulations! Your choice location have been booked successfully.</h2></span>';
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
              <span>Copyright © COVID-19 Online System 2021</span>
            </div>
          </div>
        </footer>

      </div>
	  	<div style="display: flex; justify-content: flex-end" id="timer"></div>
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
