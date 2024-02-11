<?php
include("dbconnect.php");
session_start();
extract($_POST);
$month1=date("m");
$username=$_SESSION['un'];
if(isset($_POST['btn']))
{
$sql="SELECT id FROM baby_details order by id ASC";
$sid=0;
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    $sid=$row['id']; 
   }
      $sid=$sid+1;
    $qrysl="insert into baby_details values('$sid','$baby_name','$gender','$date','$vaccine_name','$month1','$username')";
   if($conn->query ($qrysl) === TRUE) 
    {
   ?>
   <script language="javascript" type="text/javascript">
   alert("Register Sucessfully");
 window.location.href="parent_baby.php";
   </script>
   <?php
   }
   else
   {
   ?>
    <script language="javascript" type="text/javascript">
   alert("Failed");
   </script>
   <?php
   } 
   $conn->close();
   }
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
				<h1>Add Baby Details </h1>
				<form name="form1" method="post" action="">
				  <table width="100%" border="0">
                    <tr>
                      <td>&nbsp;</td>
                      <td><p>&nbsp;</p>
                        <table width="299" height="186" border="0" align="center">
                        <tr>
                          <td>Baby Name </td>
                          <td> 
                            <input name="baby_name" type="text" id="baby_name" required="">
                          </td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td> 
                            <input name="gender" type="text" id="gender" required="">
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Vaccine </td>
                          <td><input name="date" type="date" id="date" required=""></td>
                        </tr>
                        <tr>
                          <td>Vaccine Name </td>
                          <td> 
                          <input name="vaccine_name" type="text" id="vaccine_name" required="">
					  </td>
                        </tr>
                        <tr>
                          <td colspan="2"><label>
                            <div align="center">
                              <input name="btn" type="submit" id="btn" value="Add">
                            </div>
                          </label></td>
                          </tr>
                      </table></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
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