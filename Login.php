<?php
$profpic ="img/reception1.jpg";

?>
<?php
if(isset($_COOKIE['cookie_name']))
{
	header('Location: home.php');
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
	body{
		margin: 0 auto;
		background-image: url('<?php echo $profpic;?>');
		background-repeat:no-repeat;
		background-size:100% 720px;
		background-color:transparent;
		
	}
</style>
 <title>login</title>
</head>
<body>

<div style="height:120px;width:100%;background-color:#0A5485;"> 

	   <h1 style="color:white;padding:20px;padding-top:20px;margin-top:0px;">Alam Medical College & Hospital</h1>
	  <h3 style="color:#16A085   ;margin-top:-45px;padding-left:30px;">If you want good service, serve yourself</h3>
      <h5 style="margin-left:950px;margin-top:-70px;color:white;">102/A Bashundhara Residential Area <br />Dhaka 1206,Dhaka <br />phone:1607102</h5>
</div>

     <div style="height:40px;width:430px;margin-left:400px;text-align:center;background-color:rgba(44, 62, 80,0.7);"> 
            
			<h2>LOG IN HERE!</h2>
			
 
      </div>

<form action="check.php" method="post">
  <div class="imgcontainer">
   
    
  </div>

  <div class="container" style="height:300px;width:400px;margin-left:400px;background-color: rgba(44, 62, 80,0.7);">
 
    <label for="uname"><b>Username</b></label>
    <form autocomplete="off" action="check.php" method="post">
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
</form>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	<br />
	    <button type="button" class="cancelbtn">Cancel</button>
  </div>

  
</form>
  <footer style="background-color:#635548;text-align:center;color:#fff;padding-top:10px;padding:10px;">
	  Designed By <a href="format.html">Yousuf Alam</a>
	  
	  </footer>
</body>
</html>
<?php
}
?>
