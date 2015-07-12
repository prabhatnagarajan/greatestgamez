<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/include_files/heading.php";
?>
<!DOCTYPE html>
<html>
<head>
<?php heading();?>
<title>Greatest Games Search</title>
<link rel="stylesheet" type="text/css" href="http://www.greatestgamez.com/css_files/homestylecss.css"/>
</head>
<body>
<?php generateHeader("home");?>
<p></p>
<?php
$searchwords=$_REQUEST["searchwords"]; 
print "<h1 style=\"color:white\">No search results found for \"$searchwords\".</h1>"; 
?> 
<?php generateFooter();?>
</body>
</html>