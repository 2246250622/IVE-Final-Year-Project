<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Page</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	 <link rel="stylesheet" href="./css/styles/styles.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/styles/styles.css">
	<link rel="stylesheet" href="./css/styles/chatbox.css">
	
	<script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
	<script src="./js/chatbox.js"></script>
	
	<style>
	
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
        <li class="nav-item active">
          <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		<li class="nav-item ">
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
<span><marquee direction="right" behavior="alternate" style=" 3px SOLID" >
Welcome to COVID19 Online System!!!
</marquee></span>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="home.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">COVID-19 in whole world</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="https://covid19.who.int/">
                  <span class="float-left">View details from World Health Organization</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">COVID-19 in Hong Kong</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="https://chp-dashboard.geodata.gov.hk/covid-19/zh.html">
                  <span class="float-left">View details from gov.hk</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">What is COVID-19(WIKI)</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="https://zh-yue.wikipedia.org/wiki/%E6%AD%A6%E6%BC%A2%E8%82%BA%E7%82%8E%E9%A6%99%E6%B8%AF%E7%96%AB%E6%83%85">
                  <span class="float-left">View details from WIKI</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">Booking Now!!!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="MyBooking.php">
                  <span class="float-left">Lets Go!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Recent COVID-19 statistics</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated <u>Yesterday</u> at 11:34 PM</div>
          </div>
		 <iframe width=100% height="600" src="https://www.youtube.com/embed/56ewV3O4Fzs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        

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
			</form>
          </div>
        </div>
      </div>
    </div>
	
	
	     <button class="btn chatBtn chatToggle" id="chatToggle">Online Chat<i class="far fa-comment-alt" style="margin-left: 1rem"></i></button>
    <div class="chatbox">
      <div class="chatbox-title">
        <h4><i class="fas fa-robot" style="margin-right: 0.5rem"></i>Online Inquiry</h4>
      </div>
      <div class="chat-container">
        <div class="reply-content">
          <span class="reply-icon" style="margin-right:0.5rem"><i class="fas fa-robot"></i></span>
          <p>You can try using self-inquiry function to answer your doubt.
            If still has any question, you can leave a message to us.
            <br/><span class="reply-time">10:55PM</span></p>
        </div>
        
      </div>

      <div class="answerbtn-group" >
        <button id="ctacAsk" class="btn chatBtn">create account</button>
        <button id="searchAsk" class="btn chatBtn">Covid-19 in HK</button>
        <button id="mkappAsk" class="btn chatBtn">make appointment</button>
        <button id="chatBtn" class="btn chatBtn">online chat</button>
      </div>
    </div>



    <!-- load data -->
    <script>

      $(document).ready(function() {
        var date = (document.getElementById(
          "date"
        ).innerHTML = new Date().getFullYear());

        $(".chatbox").hide();
        $(document).on("click", "#ctacAsk", function(){
          appendAnswer(1);
        });
        $(document).on("click", "#searchAsk", function(){
          appendAnswer(2);
        });
        $(document).on("click", "#mkappAsk", function(){
          appendAnswer(3);
        });
        $(document).on("click", "#chatBtn", function(){
          appendAnswer(4);
        })
        $(document).on("click", "#sendMsg", function(){
          console.log("hello");
          sendMsg();
        });
        $(document).on("click", "#out", function(){
          restore();
        });
        $("#chatToggle").click(function(){
          if($(".chatbox").is(":visible")){
            $(".chatbox").fadeOut(200); 
          } else {
            $(".chatbox").fadeIn(200);
          }
        });
        $("#abc").click(function(){
          window.location.href = "./property-search.html";
        });

        
      });
    </script>
    <!-- end of load data -->
    <!-- navbar js -->


	
	
	
	
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

<span id="date" hidden> </span>
    <script src="./js/navbar.js"></script>
  </body>

</html>
