<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($btn))
{$name=$_REQUEST['username'];
$password=$_REQUEST['password'];
$_SESSION['un']=$username;
$qry="select * from admin where username='$name' && password='$password'";
$result=mysqli_query($conn,$qry);
$var= mysqli_num_rows($result);
if($var)
{
?>
<script language="javascript" type="text/javascript">
alert("Login Sucessfully");
window.location.href="admin_home.php";
</script>
<?php
}
else
{
?>
<script language="javascript" type="text/javascript">
alert("Username/Password Incorrect");
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
		<a href="#"><h1 class="active">Children Vaccination Information Portal</h1></a>
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
				<h1>Admin Login</h1>
				<form name="form1" method="post" action="">
				  <table width="100%" border="0">
                    <tr>
                      <td>&nbsp;</td>
                      <td><p>&nbsp;</p>
                        <table width="344" height="153" border="0" align="center">
                        <tr>
                          <td>User Name </td>
                          <td><label>
                            <input name="username" type="text" id="username" required="">
                          </label></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><label>
                          <input name="password" type="password" id="password" required="">
                          </label></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input name="btn" type="submit" id="btn" value="Submit">
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