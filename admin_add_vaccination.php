<?php
include("dbconnect.php");
session_start();
extract($_POST);

if(isset($_POST['btn']))
{
$sql="SELECT id FROM admin_add_vaccination order by id ASC";
$sid=0;
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    $sid=$row['id']; 
   }
      $sid=$sid+1;
   echo	 $qrysl="insert into admin_add_vaccination values('$sid','$vaccination_name','$durage','$month')";
   if($conn->query ($qrysl) === TRUE) 
    {
   ?>
   <script language="javascript" type="text/javascript">
   alert("Register Sucessfully");
 window.location.href="admin_add_vaccination.php";
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
				<h1>Add Vaccinaiton </h1>
				<form name="form1" method="post" action="">
				  <table width="100%" border="0">
                    <tr>
                      <td>&nbsp;</td>
                      <td><p>&nbsp;</p>
                        <table width="344" height="153" border="0" align="center">
                        <tr>
                          <td>Vaccine Name </td>
                          <td><label>
                            <input name="vaccination_name" type="text" id="vaccination_name" required="">
                          </label></td>
                        </tr>
                        <tr>
                          <td>Vaccine Durage </td>
                          <td><label>
                            <input name="durage" type="text" id="durage" required="">
                          </label></td>
                        </tr>
                        <tr>
                          <td>Month Of Vaccine </td>
                          <td><label>
                            <select name="month" id="month">
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </label></td>
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