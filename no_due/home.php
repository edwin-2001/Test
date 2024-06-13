<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];



$q2=mysqli_query($connect,"select * from students where regno='$uname'");
$r2=mysqli_fetch_array($q2);


if(isset($btn))
{
mysqli_query($connect,"update students set st_hostel=1,st_library=1,st_office=1 where regno='$uname'");
?>
<script language="javascript">
alert("Request has been sent..");
window.location.href="home.php";
</script>
<?php
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
  <?php include("link_stu.php"); ?>
  <h2 align="center">Welcome <?php echo $r2['name']; ?></h2>
  <p align="center"><strong>Regno: <?php echo $uname; ?></strong></p>
  <table width="508" height="127" border="1" align="center">
    <tr>
      <th colspan="2" scope="col">Due Status </th>
    </tr>
    <tr>
      <th width="271" align="left" scope="row">Hostel Fees </th>
      <td width="221" align="left"><?php
	  if($r2['st_hostel']=="2")
	  {
	  echo "Due Clear";
	  }
	  else if($r2['st_hostel']=="3")
	  {
	  echo "Due Pending";
	  }
	  else if($r2['st_hostel']=="1")
	  {
	  echo "Checking...";
	  }
	  else
	  {
	  echo "Check Due";
	  }
	  ?></td>
    </tr>
    <tr>
      <th align="left" scope="row">Library Fees </th>
      <td align="left"><?php
	  if($r2['st_library']=="2")
	  {
	  echo "Due Clear";
	  }
	  else if($r2['st_library']=="3")
	  {
	  echo "Due Pending";
	  }
	  else if($r2['st_library']=="1")
	  {
	  echo "Checking..";
	  }
	  else
	  {
	  echo "Check Due";
	  }
	  ?></td>
    </tr>
    <tr>
      <th align="left" scope="row">Office (Semester &amp; Exam Fees) </th>
      <td align="left"><?php
	  if($r2['st_office']=="2")
	  {
	  echo "Due Clear";
	  }
	  else if($r2['st_office']=="3")
	  {
	  echo "Due Pending";
	  }
	  else if($r2['st_office']=="1")
	  {
	  echo "Checking..";
	  }
	  else
	  {
	  echo "Check Due";
	  }
	  ?></td>
    </tr>
    <tr>
      <th colspan="2" align="center" scope="row"><?php
	  if($r2['st_hostel']!="1")
	  {
	  ?><input type="submit" name="btn" value="Send Request" /><?php
	  }
	  else
	  {
	  echo "Request sent";
	  }
	  ?></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
