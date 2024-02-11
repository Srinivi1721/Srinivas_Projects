<?php
include("dbconnect.php");
session_start();
extract($_POST);
$username=$_SESSION['un'];

$qq="Select * from baby_details where month='$date'";
	 $result =$conn->query($qq);
	 
	 while($row =$result->fetch_assoc())
	 {
	 }
$date = new DateTime('now');
$date->modify('+1 month'); // or you can use '-90 day' for deduct
$date = $date->format('m');

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
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
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
						<?php include "menu/parentmenu.php" ?>					
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
				<h1>Next Vaccination</h1>
				<p>&nbsp;   </p>
				<form name="form1" method="post" action="">
                  <table width="642" height="138" border="0" align="center">
                    <tr>
                      <td width="178"><div align="center" class="style1">Vaccination Name </div></td>
                      <td width="108"><div align="center" class="style1">Durage</div></td>
                      <td width="150"><div align="center" class="style1">Month</div></td>
                    </tr>
                    <?php
$qq="Select * from admin_add_vaccination where month='$date'";
	 $result =$conn->query($qq);
	 
	 while($row =$result->fetch_assoc())
	 {
	 ?>
     <tr>
       <td><div align="center"><?php echo $row['vaccination_name'];?></div></td>
       <td><div align="center"><?php echo $row['durage'];?></div></td>
       <td><div align="center"><?php echo $row['month'];?></div></td>
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