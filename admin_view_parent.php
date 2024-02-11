<?php
include("dbconnect.php");
session_start();
extract($_POST);

?>

<!DOCTYPE html>
<html>
<head>
<title>Children Vaccination</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Armor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
 
<div class="header-top">
	<div class="container">
		<div class="logo">
		<a href="#"><h1 class="active">Children Vaccination</h1></a>
		</div>
		<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt="">  </span>
					<ul>
						<?php include "menu/adminmenu.php" ?>					
					<div class="clearfix"> </div>
					</ul>
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
				</div>	
<div class="clearfix"></div>				
	</div>
</div>
<!--//header-->
<!--content-->
	<div class="contact">
		<div class="container">
	<div class="contact-top">
				<h1>View Parent  </h1>
				<p>&nbsp;</p>
				<form name="form1" method="post" action="">
                  <table width="782" height="87" border="0" align="center">
                    <tr>
                      <td>Name</td>
                      <td>Contact</td>
                      <td>Address</td>
                      <td>Email</td>
                      <td>Gender</td>
                      <td>Username</td>
                    </tr>
                    <?php
	 $qq="Select * from  parent_details";
	 $result =$conn->query($qq);
	 
	 while($row =$result->fetch_assoc())
	 {
	 ?>
     <tr>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['contact'];?></td>
       <td><?php echo $row['address'];?></td>
	      <td><?php echo $row['email'];?></td>
       <td><?php echo $row['gender'];?></td>
	   <td><?php echo $row['username'];?></td>
       </tr>
	 <?php
	 }
	 ?>
                  </table>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
      </form>
		  </div>
			<div class="contact-form">
			  <div class="clearfix"></div>
		  </div>
			
		</div>
</div>
		<!--footer-->
		<div class="footer">
			<div class="container">
				<div class="footer-top">
					<p class="footer-in"> All Rights Reserved | Design by <a href="#" target="_blank">Admin</a> </p>
					 <ul class="social">
						     
					</ul>
				</div>
			</div>
		</div>
		<!--//footer-->
</body>
</html>