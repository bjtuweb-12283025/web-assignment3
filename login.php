<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="loginsystem.css" rel="stylesheet" type="text/css">
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>log in</title>
</head>
<div class="container logininfo">
  <?php
    $con = mysql_connect("localhost","root","");
	if (!$con)
 	{
		die('Could not connect: ' . mysql_error());
  	}
    
    mysql_select_db("user", $con);

	$result = mysql_query("SELECT * FROM userinfo");

 	$login_flag = false;
	while($row = mysql_fetch_array($result))
  	{
		if ($row['UserName'] == $_POST["name"]  &&   $row['UserPsw'] == $_POST["pwd"])
			$login_flag = true;
  	}
	
	if ($login_flag==true)
	{
		echo "<strong>Welcome!Dear user </strong>"."  ".$_POST["name"]."<hr>";
		echo "<br><br><br><br>Author Information:<br><br><p>Zheng Qifan</p><p>12283025</p><p>Information Security Class 1 </p>"; 
		$validname = $_POST["name"];
		echo "<P>
			<SCRIPT language=JavaScript>alert('Log in successfully!')</SCRIPT>
			</P> ";
		echo "<br/>";
		?>
  <div class="btn-group"><a href=mailto:12283025@bjtu.edu.cn >
    <button class="btn btn-con">Contact Me</button>
    </a><a href="index.html">
    <button class="btn btn-lo">Log Out</button>
    </a></div>
</div>
<?php 
	}
	else
	{
		echo "Wrong username or password!";
		?>
<a href="index.html">
<button class="btn btn-lo">Log Again</button>
</a>
</div>
<?php
	}

	mysql_close($con);
?>

<body>
</body>
</html>