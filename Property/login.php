<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Enter Username");  
  return false;  
}else if(password.length<1){  
  alert("Enter Password");  
  return false;  
  }else{
  	alert("Login Successfully"); 
  	return true;
  }  
}  
</script>
<body class="body">
	<div class="main">
		<div class="row1">
				<div class="r1logo">
					<img src="images/logo.png" width="60" height="70">
				</div>
				<div class="r1text">-ACRES</div>
				<div class="r1menu"><a href="index.php" class="a">Home</a></div>
				<div class="r1menu"><a href="about.php" class="a">About Us</a></div>
				<div class="r1menu"><a href="property.php" class="a">Property</a></div>
				<div class="r1menu"><a href="agents.php" class="a">Agents</a></div>
				<div class="r1menu"><a href="login.php" class="a"></a> LOGIN</div>
		</div>
			<div class="clear"></div>
			<div class="row2">
			<form class="form" name="myform" method="post" action="abc.jsp" onsubmit="return validateform()" >  
				<h4 align="center">Login</h4>
				Username: <input type="text" name="name"><br/>  
				Password: <input type="password" name="password"><br/>   
				<input type="submit" name="Savedata" value="Save" class="fbtn">
				</form>
					
				
			</div>
			<div class="footer">
				<div class="footerc1">
					<h2>Menu</h2>
					<h5><a href="index.php" class="ab">Home</a></h5>
					<h5><a href="about.php" class="ab">About Us</a></h5>
					<h5><a href="property.php" class="ab">Property</a></h5>
					<h5><a href="agents.php" class="ab">Agents</a></h5>
					<h5>LOGIN|SIGNUP</h5>
				</div>
				<div class="footerc2">
					<h2>Contact Us</h2>
					<h5> +1234567890</h5>
					<h5>kacres.Com</h5>
					<h5> mail@kacres.Com</h5>
					<h5> 60 B K-Acres, Del Jodhpur, 21548, US</h5>
				</div>

				<div class="footerc3">
					<h2>Blog Post</h2>
					<div class="footimg">
						<img src="images/Index_03.jpg">
					</div>

					<h5 class="foot"> K-ACRES Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut. <br/>1 Day Ago</h5>
					<div class="footimg">
						<img src="images/Index_06.jpg">
					</div>
					<h5 class="foot">Ut Enim Ad Minim Veniam, Quis Nostrud Exercitationadipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut. <br/>247 Years Ago</h5>
				</div>

				<div class="footerc4">
					<h2>Subscribe</h2>
					<h5 class="foot">Be aware for news</h5>
					<div class="footmail">
						<input type="text" name="mail" placeholder="  	Your Email" >
					</div>
					<div class="btn">Send</div>
					<h2>Follow Us</h2>
					<div class="link">
						<img src="images/facebook.png">
					</div>
					<div class="link">
						<img src="images/in.png">
					</div>
					<div class="link">
						<img src="images/twitter.png">
					</div>
					<div class="link">
						<img src="images/shaare.png">
					</div>
				</div>

			</div>
			</div>

		</div>
	</div>

</body>
</html>

  
 
