<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
<link href="CSS/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inscription and login forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Copse|Roboto' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<!--/start-main-->
<div class="main">
	<div class="wrap">
	<!--/start-topo-one-->
	<div class="top-one">
	<!--/start-login-->
	<div class="login-one">
		<div class="create-account">
			<div class="login-head">
					<h2>Create Account</h2>
					<span class="line">
						<span class="sub-line"></span>
					</span>

			</div>
				<form>
					<p>First Name <lable> *</lable></p>
					<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
					<p>Last Name <lable> *</lable></p>
					<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
					<p>Email Address <lable> *</lable></p>
					<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
					<p>Password <lable> *</lable></p>
					<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
					
				<div class="sign-up">
					<input type="reset" value="Clear">
					<input type="submit" onclick="myFunction()" value="Register" >

					<!-- pop-up-box -->  
				<link href="CSS/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
				<script src="JS/jquery.magnific-popup.js" type="text/javascript"></script>
			<!--//pop-up-box -->
				<div id="small-dialog2" class="mfp-hide">
				<div class="signup">
					<h3>Signup</h3>
					<h4><a href="#">let's get started</a></h4>
					<p>Email</p>
					<input type="text" class="email" placeholder="Email adress" required=""/>
					<p>Password</p>
					<input type="password" placeholder="Password" required=""/>
					<div class="p-container">
					<label class="checkbox two"><input type="checkbox" name="checkbox" checked><i></i>Keep me logged in</label>
				</div>
					<input type="submit"  value="LOG IN"/>
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
		</div>
		</form>
		<div class="clear"> </div>
		<h5>Do you have an account yet ? <a  class="signup play-icon popup-with-zoom-anim" href="#small-dialog2">Login</a></h5>
	</div>
	</div>

		</div>
	</div>
</div>
	<!--//End-login-form-->
	<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>Copyright &copy; 2015  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!--//end-copyright-->
</body>
</html>