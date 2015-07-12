<?php
include 'http://www.greatestgamez.com/include_files/heading.php';
$mail="";
if(isset($_POST['submit'])){
$mail=$_POST['mail'];
//recaptcha begins
  require_once('recaptchalib.php');
  $privatekey = "6LeTq-4SAAAAALlyucgbM2lnAkumCoRc7fnylE6n";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
  }//closes recaptcha
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
<h1>Enter your Email:</h1>
<?php echo $error_message;?>
<div class="field">
<input type="email" value="<?php echo $mail; ?>" class="input" id="mail" name="mail" maxlength="80">
</div>
<div id="recaptcha">
        <?php
          require_once('recaptchalib.php');
          $publickey = "6LeTq-4SAAAAAIUXMp6OGDVyL9p1z0VARWwZtSug"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
</div>
<br/>
<input type="submit" name="submit" value="Recover Password" id="submit">
</form>
</section>
<div id="space"></div>
<?php generateFooter();?>
</body>
</html>