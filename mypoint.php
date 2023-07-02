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

    <title>My Point</title>

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
	<script>
function confirmPoint()
{
   if(confirm("Are you sure ?"))
     return true;
  
  return false;
}
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
            <a class="dropdown-item" href="#">Settings</a>
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
		       <li class="nav-item active">
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
            <li class="breadcrumb-item active">My Point</li>
          </ol>
		  

         
			  
<?php
require("conn.php");

$sql="select * from Normal_User where U_Email = '".$_SESSION['email']."'";


$result=mysqli_query($conn, $sql);
$error = mysqli_error($conn);

if ($error !=""){

}else{ 

while($row= mysqli_fetch_array($result))

$iud=$row['U_ID'];

$email = $_SESSION['email'];


}

?>
<?php
$sql333="select U_Point from normal_user where U_ID = '$iud'";
	$result=mysqli_query($conn, $sql333);
	$abc = mysqli_error($conn);
	
	if ($error !=""){
	echo $error;
}else{ 
}
?>
                <table class="table table-bordered"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>My Point</th>

                    </tr>
                  </thead>
                 
                  <tbody>
					<?php

while ($rows = mysqli_fetch_assoc($result)){
	$bids = $rows['U_Point'];
	echo"<tr>";
	echo"<td><center><B style=font-size:45px>{$rows["U_Point"]}</B></center></td>";

	echo "</tr>";

}
	
?>			
                  </tbody>


              </div>
            </div>

          </div>
        </div>
		                </table>
						
		 
<table border="3">
  <tr>
    <th><center>PlantedWoodPaperRuledNote - 5pc Pack <B style="color:Red;">(5000Point)</B></center></th>
    <th><center>Polycarbonate Ball Pen - Blue <B style="color:Red;">(2000Point)</B></center></th>
    <th><center>WhitePorcelain Mug Cup <B style="color:Red;">(1000Point)</B></center></th>

  </tr>
  <tr>
    <td><img width="100%" height="550" src="img/PlantedWoodPaperRuledNote (5pc Pack).jpg" alt="Girl in a jacket"></td>
    <td><img width="100%" height="550" src="img/Polycarbonate Ball Pen (Blue).jpg" alt="Girl in a jacket"></td>
    <td><img width="100%" height="550" src="img/WhitePorcelain Mug Cup.jpg" alt="Girl in a jacket"></td>

  </tr>
  <tr>
	<form class="form-horizontal form-material" method="post" onsubmit="return confirmPoint()"  >
	 <td><center><button class="btn btn-success"  value="5000" type="sumbit" name="gift"  id='gift' tabindex="2">Redeem gifts</button></center></td>
	<td><center><button class="btn btn-success"  value="2000" type="sumbit" name="gift"  id='gift' tabindex="2">Redeem gifts</button></center></td>
	<td><center><button class="btn btn-success"  value="1000" type="sumbit" name="gift"  id='gift' tabindex="2">Redeem gifts</button></center></td>
	</form>
  </tr>
</table>



</script>

<?php



  if (isset($_POST["gift"]))
   {
	
	   $point = $_POST["gift"];
	   
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
	      if ($bids < $point) {
		echo "<script type='text/javascript'>alert('No enough point');</script>";
}else{
	
	 $check = $bids  -  $point;
	 
	 $sqls = "UPDATE normal_user SET U_Point= '$check' WHERE U_Email = '$email'";
	 mysqli_query($conn, $sqls);
	 
	  $giftname = '';
	   $a = 1000;
	   $b = 2000;
	   $c = 5000;
	   
	 if ($point == $a){
	 $giftname = 'Cup';}
	 if ($point == $b){
	 $giftname = 'Pen';}
	 if ($point == $c){
	 $giftname = 'NoteBook';}
echo $giftname;
	

	$sql4="INSERT INTO gift VALUES( '$email', '$generateRandomString' ,'$giftname',$iud)";
		mysqli_query($conn,$sql4);
		
	 $error = mysqli_error($conn);
	echo "<script type='text/javascript'>alert('Congratulations you take off a gift \\nAnd your gift code is : $generateRandomString \\nPlease capscreen and contact administrators to get the gift!!! ');</script>";
		$yourURL="mypoint.php";
          echo ("<script>location.href='$yourURL'</script>");
		if ($error !=""){
		echo $error;
	}else{
		
	}
	}
	}
   }
   
   

?>

		<div style="display: flex; justify-content: flex-end" id="timer"></div>
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
<script src="timescript.js"></script>