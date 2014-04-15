<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="loginsystem.css" rel="stylesheet" type="text/css">
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>addtosql</title>
</head>
<div class="container registerinfo">
  <?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
	mysql_select_db("user", $con);

	$sql="INSERT INTO userinfo (UserName, UserPsw)
	VALUES
	('$_POST[newname]','$_POST[newpsw]')";

	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}
	$url = "http://127.0.0.1/loginsystem";
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('Success! Click ok to Back to log in!');";
		echo "window.location.href='$url'";
		echo "</script>";

	mysql_close($con)
	?>
</div>
<body>
</body>
</html>