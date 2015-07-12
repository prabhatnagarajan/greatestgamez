<?php
include 'http://www.greatestgamez.com/include_files/connectsql.php';
include 'http://www.greatestgamez.com/include_files/heading.php';//includes heading file
$username="";
$password="";
$confirmpassword="";
$mail="";
$confirmmail="";
	if(isset($_POST['submit'])){
	$error=array();
	//username
	if(empty($_POST['username'])){
	$error[]='Username must contain a value.';
	}
	else if(ctype_alnum($_POST['username']))
	{
	$username=$_POST['username'];
	}
	else
	{
	$error[]='Username can only contain letters and numbers.';
	}
	//password
	if(empty($_POST['password'])){
	$error[]='Password cannot be empty.';
	}
	else if(ctype_alnum($_POST['password']))
	{
	$password=$_POST['password'];
	}
	else
	{
	$error[]='Password can only contain letters and numbers.';
	}
	//confirmpassword
	if(empty($_POST['confirmpassword'])){
	$error[]='Password confirmation cannot be empty.';
	}
	else if(ctype_alnum($_POST['confirmpassword']))
	{
	$confirmpassword=$_POST['confirmpassword'];
	if(!(strcmp($confirmpassword,$password)==0))
	{
	$error[]='Passwords must match.';
	}
	}
	else
	{
	$error[]='Password confirmation can only contain letters and numbers.';
	}
	//email
	if(empty($_POST['mail'])){
	$error[]='Please enter a valid e-mail address.';
	}
	else if(preg_match("/^([a-zA-z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$_POST['mail']))
	{
	$mail=mysql_real_escape_string($_POST['mail']);
	}
	else
	{
	$error[]='Invalid e-mail.';
	}
	//confirm email
	if(empty($_POST['confirmmail'])){
	$error[]='Please confirm your e-mail address.';
	}
	else if(preg_match("/^([a-zA-z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$_POST['confirmmail']))
	{
	$confirmmail=mysql_real_escape_string($_POST['confirmmail']);
	if(!(strcmp($confirmmail,$mail)==0))
	{
	$error[]='E-mails must match.';
	}
	}
	else{
	$error[]='Invalid e-mail confirmation.';
	}
	//checkbox
	if(!(isset($_POST['agreement'])))
	{
	$error[]='You must agree to the Terms of use and Privacy Policy.';
	}

	//recaptcha begins
	  require_once('recaptchalib.php');
	  $privatekey = "6LeTq-4SAAAAALlyucgbM2lnAkumCoRc7fnylE6n";
	  $resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);

	  if (!$resp->is_valid) {
	   $error[]='You entered the Captcha incorrectly. Please try Again.';
	  } else {
	  }//closes recaptcha
	  //display errors
	  if(empty($error)){
	  //check if username or email has been taken
		$query=mysql_query('SELECT * FROM User WHERE email=\'$mail\' OR username=\'$username\'') or die(mysql_error());
		/*if(mysql_num_rows($query)==0)
		{
			//username and email available
			$activateaccount=md5(uniqid(rand(),true));
			$query2=mysql_query(" INSERT INTO TemporaryUser(username,password,email,activationcode)
			VALUES ('$username','$password','$mail','$activateaccount')") or die(mysql_error());
			if(!$query2)
			{
				die('Information could not be stored in the database: '.mysql_error());
			}
			else
			{
				$activationemail="To activate your Greatestgamez Account, click on the link: \n\n";
				$activationemail.="http://www.greatestgamez.com".'/otherpages/activateacc.php?
				email='.urlencode($mail)."&key=$activateaccount";
				mail($mail,'Activate Account',$$activationemail);
				header( 'Location: http://www.greatestgamez.com/otherpages/activationnotify.php' ) 
			}
		}
		else
		{
			//username and email not available
			$error_message='<span class="error">';
			$error_message.='Sorry, this Username or E-mail has already been taken.';
			$error_message.="</span><br/><br/>";
		}*/
	  }
	  else
	  {
		  $error_message='<span class="error">';
		  foreach($error as $key=>$values)
		  {
		  $error_message.="$values ";
		  }
		  $error_message.="</span><br/><br/>";
	  }
  }//closes first if
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
	<h1>Register</h1>
	<?php echo $error_message;?>
	<div class="field">
	<label for="username">Username:</label>
	<input type="text" value="<?php echo $username;?>" id="username"  class="input" name="username" maxlength="20">
	<p class="hint"> 20 characters maximum (only letters and numbers)</p>
	</div>
	<div class="field">
	<label for="password">Password:</label>
	<input type="password" value="<?php echo $password;?>" class="input" id="password" name="password" maxlength="20">
	<p class="hint"> 20 characters maximum (only letters and numbers)</p>
	</div>
	<div class="field">
	<label for="confirmpassword">Confirm Password:</label>
	<input type="password" value="<?php echo $confirmpassword;?>" class="input" id="confirmpassword" name="confirmpassword" maxlength="20">
	<p class="hint"> 20 characters maximum (only letters and numbers)</p>
	</div>
	<div class="field">
	<label for="mail">E-mail:</label>
	<input type="text" value="<?php echo $mail; ?>" class="input" id="mail" name="mail" maxlength="255">
	</div>
	<div class="field">
	<label for="confirmmail">Confirm E-mail:</label>
	<input type="text" class="input" value="<?php echo $confirmmail;?>" id="confirmmail" name="confirmmail" maxlength="255">
	</div>
	<div class="field">
	<input type="checkbox" name="agreement"> I agree to the 
	<a href="termsofuse.php" class="footerlinks">Terms of Use</a> and 
	<a href="privacypolicy.php" class="footerlinks">Privacy Policy</a> of www.greatestgamez.com
	</div>
	<div id="recaptcha">
			<?php
			  require_once('recaptchalib.php');
			  $publickey = "6LeTq-4SAAAAAIUXMp6OGDVyL9p1z0VARWwZtSug"; // you got this from the signup page
			  $echocode= recaptcha_get_html($publickey);
			  $string=explode('frameborder="0"',$echocode);
			  echo "$string[0]";
			  echo"$string[1]";
			?>
	</div>
	<br/>
	<input type="submit" name="submit" value="Sign Up!" id="submit">
	</form>
</section>
<div id="space"></div>
<?php generateFooter();?>
</body>
</html>