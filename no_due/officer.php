<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$rdate=date("d-m-Y");
$q1=mysqli_query($connect,"select * from fees where id=3");
$r1=mysqli_fetch_array($q1);
$q2=mysqli_query($connect,"select * from fees where id=4");
$r2=mysqli_fetch_array($q2);
if(isset($btn))
{
mysqli_query($connect,"update fees set fees='$fees',rdate='$rdate',details='$details' where id=3");
mysqli_query($connect,"update fees set fees='$fees2',rdate='$rdate',details='$details2' where id=4");
header("location:officer.php");
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
  <?php include("link_off.php"); ?>
  <p>&nbsp;</p>
  <h2 align="center">Welcome to Office Admin</h2>
  <table width="399" height="160" border="0" align="center" cellpadding="5">
    <tr>
      <td>Semester Fees</td>
      <td>Exam Fees </td>
    </tr>
    <tr>
      <td><input name="fees" type="text" value="<?php echo $r1['fees']; ?>" /></td>
      <td><input name="fees2" type="text" value="<?php echo $r2['fees']; ?>" /></td>
    </tr>
    <tr>
      <td>Details</td>
      <td>Details</td>
    </tr>
    <tr>
      <td><input type="text" name="details" value="<?php echo $r1['details']; ?>" /></td>
      <td><input type="text" name="details2" value="<?php echo $r2['details']; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btn" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="624" border="1" align="center">
    <tr>
      <th>Semester Fees (Declared on <?php echo $r1['rdate']; ?>) </th>
      <th>Exam Fees (Declared on <?php echo $r2['rdate']; ?>) </th>
    </tr>
    
    <tr>
      <td align="center">Rs. <?php echo $r1['fees']; ?></td>
      <td align="center">Rs. <?php echo $r2['fees']; ?></td>
    </tr>
    <tr>
      <td align="center"><?php echo $r1['details']; ?></td>
      <td align="center"><?php echo $r2['details']; ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
