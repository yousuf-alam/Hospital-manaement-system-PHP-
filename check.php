<?php
if(isset($_COOKIE['cookie_name']))
{
	echo "Logged In through Cookie";
}
else
{
?>
<html>
<body>
Welcome <?php echo $_POST["uname"]; ?><br>
Your password is: <?php echo $_POST["psw"]; ?><br>
<?php 
    if(!empty($_POST["remember"]))
        {
            $cookie_name = $_POST["uname"];
            $cookie_value = $_POST["psw"];
            setcookie('cookie_name', $cookie_name, time() + (86400*30)); 
        } 
    else
        { echo "Cookie Not Set"; } 
?>
</body>
</html>
<?php
}
?>




