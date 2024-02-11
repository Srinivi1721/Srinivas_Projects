<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['register']))
{
                                              
$sql="SELECT id FROM parent_details order by id ASC";
$sid=0;
 $result=$conn->query($sql);
 while($row=$result->fetch_assoc())
 {
    $sid=$row['id']; 
   }
      $sid=$sid+1;
    $qrysl="insert into parent_details values('$sid','$name','$contact','$email','$address','$gender','$username','$password')";
   if($conn->query ($qrysl) === TRUE) 
    {
   ?>
   <script language="javascript" type="text/javascript">
   alert("Registration Successfully");
 window.location.href="user.php";
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
						<?php include "menu/indexmenu.php" ?>			
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
				<h1>Parent Regsiter </h1>
				<p>&nbsp;</p>
				<form name="form1" method="post" action="">
                  
                      <table width="300" height="350" border="0" align="center">
                        <tr>
                          <td width="76" height="33"><span class="style1">Name</span></td>
                          <td width="135"><input name="name" type="text" id="name" required="" /></td>
                        </tr>
                        <tr>
                          <td><span class="style1">Contact</span></td>
                         <td><input type="tel" minlength="10" maxlength="10" id="contact" name="contact" title="10 digit mobile number" required="">

<script>
$('#mob_frm').submit(function(e) {
            e.preventDefault();
            if(!$('#contact').val().match('[0-9]{10}'))  {
                alert("Please put 10 digit mobile number");
                return;
            }  

        });</script></td>
                        </tr>
                        <tr>
                          <td><span class="style1">Email</span></td>
                          <td><input name="email" type="text" id="email" required="" /></td>
                        </tr>
                        <tr>
                          <td><span class="style1">Address</span></td>
                          <td><input name="address" type="text" id="address" required="" /></td>
                        </tr>
                        <tr>
                          <td><span class="style1">Gender</span></td>
                          <td>
                            <span class="style1">
                            <input name="gender" type="radio" value="male">
                            Male
                            <input name="gender" type="radio" value="female">                            
                            Female</span> </td>
                        </tr>
                        <tr>
                          <td height="27"><span class="style1">User Name </span></td>
                          <td><input name="username" type="text" id="username" required=""/></td>
                        </tr>
                        <tr>
                          <td><span class="style1">Password</span></td>
                          <td><input name="password" type="text" id="password" required=""/></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>
                          <input name="register" type="submit" id="register" value="Register" required="">                         </td>
                        </tr>
                      </table>
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