<?php 
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Book Bay | The Online Book Store</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book Bay Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webnovels for Nokia, Samsung, LG, SonyErricsson, Motorola web novel" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
		
				<div class="col-sm-4 logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		
			<div class="col-sm-4 col-sm-offset-4 header-left">		
					<p class="log"><a href="account.php"  >Login</a>
						<span>or</span><a  href="account.php"  >Signup</a></p>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>+91 9176 156512</span>
				</div>
		 <div class="col-sm-8 h_menu4">
				<ul class="memenu skyblue">
					  <li class=" grid"><a  href="index.php">Home</a></li>	
				      <li><a  href="novels.php">Novels & Fictions</a></li>
				    <li class="grid"><a  href="college.php">College </a></li>
				<li><a  href="school.php">School</a></li>				
				<li><a class="color6" href="other.php">Other</a></li>
			  </ul> 
			</div>
				<div class="col-sm-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
					  <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>	Shopping</p>
					</div>								
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--//header-->
<div class="account">
	<div class="container">
		<h1>Account</h1>
		<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form action="account.php" method="Post">

					<span>Email Address</span>
					<input type="email" name="email" class="form-control" style="width:250px;" required> 
				
					<span>Password</span>
					<input type="password" name="pass" class="form-control" style="width:250px;" required> 
					<div class="word-in">
				  		<a class="forgot" href="#">Forgot Your Password?</a>
				 		 <input type="submit" value="Login">
				  	</div>
			    </form>
			   </div>	
			    <div class="col-md-6 login-left">
			  	 <h4>NEW CUSTOMERS</h4>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
	</div>
</div>

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-8 top-footer">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124500.97710844736!2d80.15431955698676!3d12.800857150597004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5250847d3353d7%3A0x6a585af1f362dadb!2sHindustan+Institute+of+Technology+%26+Science!5e0!3m2!1sen!2sin!4v1476586283505" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			</div>
			<div class="col-md-4 top-footer1">
				<h2>Newsletter</h2>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<?php include "footer.php" ?>
</div>

<!--//footer-->
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookbay";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!empty($_POST))
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
// Create connection

// Check connection
if ($conn->connect_error) {
    echo "OOPS!, We have a problem with database server";
} 

$sql = "SELECT id from register where email = 'harimanju@live.com' AND password ='Master#123x'";
if ($conn->query($sql) >= TRUE) {
   header("Location:index.php");
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

ob_end_flush();
?>