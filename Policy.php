<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Comment Area Policy</title>
  
  
  
      <link rel="stylesheet" href="css/commenthelper.css">
		
		
  
</head>

<body>
  <div class="flex">
  <div class="modalcontainer">
    <div class="flex">
      <div class="modal">
        <div class="content">
        <h2>Comment Area Policy</h2> 
		<p>1. No Spam / Advertising / Self-promote in the forums</p>
		<p>2. Do not post “offensive” posts, links or images and prohibit divulging other people's information</p>
		<p>3. Remain respectful of other members at all times</p>
		<p>If you violate the above rules, Your account will be banned permanently and your posts will be deleted.</p>
          </div>
        <div class="buttons">
          <a href="javascript:history.back()">Decline</a>
          <a href="comment.php">Accept</a>
        </div>
      </div>
    </div>
  </div>
  <a href="#0" class="modalbttn">Comment Area Policy</a>
  
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
 

    <script>
	$(".modalbttn").ready(function() {
  $(".modalcontainer").fadeIn("slow");
  $(".modal").fadeIn("slow");
  
});

	$(".modalbttn").click(function() {
  $(".modalcontainer").fadeIn("slow");
  $(".modal").fadeIn("slow");
});


$(".close").click(function() {
  $(".modalcontainer").fadeOut("slow");
  $(".modal").fadeOut("slow");
});

$(".buttons").click(function() {
  $(".modalcontainer").fadeOut("slow");
  $(".modal").fadeOut("slow");
});
</script>

</body>
</html>