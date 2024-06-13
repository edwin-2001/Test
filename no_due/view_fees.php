<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];

$q1=mysqli_query($connect,"select * from fees");
$r1=mysqli_fetch_array($q1);

$q2=mysqli_query($connect,"select * from students where regno='$uname'");
$r2=mysqli_fetch_array($q2);

$regno=$r2['regno'];


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
  <?php include("link_stu.php"); ?>
  <h2 align="center">Welcome <?php echo $r2['name']; ?></h2>
  <p align="center">&nbsp;</p>
  <table width="607" border="1" align="center">
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Fees for </th>
	  <th scope="col">Fees</th>
      <th scope="col">Declared on </th>
      <th scope="col">Details</th>
    </tr>
	<?php
	$i=0;
	$q1=mysqli_query($connect,"select * from fees");
	while($r1=mysqli_fetch_array($q1))
	{
	$i++;
	?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $r1['fees_for']; ?></td>
	  <td><?php echo $r1['fees']; ?></td>
      <td><?php echo $r1['rdate']; ?></td>
      <td><?php echo $r1['details'];?></td>
    </tr>
	<?php
	}
	?>
  </table>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
