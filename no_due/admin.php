<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);

if(isset($btn))
{
$mq=mysqli_query($connect,"select max(id) from rules");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;

$qry=mysqli_query($connect,"insert into rules(id,rules) values($id,'$rules')");
	if($qry)
	{
	header("location:admin.php");
	}
}


if($_REQUEST=="del")
{
mysqli_query($connect,"delete from rules where id=$did");
header("location:admin.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php include("title.php"); ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div class="hd" align="center"><?php include("title.php"); ?></div>
  <?php include("link_admin.php"); ?>
  <p>&nbsp;</p>
  <h2 align="center">Welcome to Admin  </h2>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
