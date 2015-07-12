<?php
include 'http://www.greatestgamez.com/include_files/connectsql.php';
include 'http://www.greatestgamez.com/include_files/heading.php';
$username="";
$password="";
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Greatest Games" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.greatestgamez.com/" />
<meta property="og:image" content="http://www.greatestgamez.com" />
<meta property="fb:admins" content="100007419488033" />
<title>Greatest Games</title>
<link rel="stylesheet" type="text/css" href="http://www.greatestgamez.com/css_files/registering.css"/>
<link rel="stylesheet" type="text/css" href="http://www.greatestgamez.com/css_files/registerfooter.css"/>
<link rel="shortcut icon" href="http://www.greatestgamez.com/images/favicon.ico">
</head>
<body>
<div id="logo">
<a href="http://www.greatestgamez.com/home.php">
<img src="http://www.greatestgamez.com/images/logo2.png" alt="Your Browser Does not support this image.">
</a></div>
<section id="right_side">
<form id="generalform" class="container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>">
<h1>Sign In</h1>
<?php echo $error_message;?>
<div class="field">
<label for="username">Username:</label>
<input type="text" value="<?php echo $username;?>" id="username"  class="input" name="username" maxlength="20">
</div>
<div class="field">
<label for="password">Password:</label>
<input type="password" value="<?php echo $password;?>" class="input" id="password" name="password" maxlength="20">
</div>
<p><a href="register.php" style="float:left; margin-left:50px">Create Account</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="recoverpass.php" style="float:left; margin-left:20px">Forgot Password?</a></p>
<input type="submit" name="submit" value="Sign in" id="submit">
</form>
</section>
<div id="space"></div>
<?php generateFooter();?>
</body>
</html>