
<?php
$profpic ="img/reception2.jpg";

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
	
	<style type="text/css"> 
	
	body{
		
		background-image: url('<?php echo $profpic;?>');
		background-repeat:repeat;
		background-color:transparent;
		
	}
	img {
		background-repeat: repeat;
	}
	</style>
	
</head>
<body>

       <div style="height:100px;width:100%;background-color:#0C4D62 ;text-align:center;margin-top:-20px;"> 
	   
	       <h1 style="color:15B0E4;padding:20px;padding-top:20px;">Alam Medical College & Hospital</h1>
	   
	   </div>
	<div class="container">
	
		<form>
			<div class="form-input">
				<input type="text" name="text" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" onclick="home.php" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
	
  <footer style="background-color:#635548;text-align:center;color:#fff;padding-top:10px;padding:10px;">
				
					&copy; All Right Reserved By-yousuf alam
			
		</footer>
		
</body>
</html>