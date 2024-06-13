<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$rdate=date("d-m-Y");
$q1=mysqli_query($connect,"select * from fees where id=2");
$r1=mysqli_fetch_array($q1);
if(isset($btn))
{
mysqli_query($connect,"update fees set fees='$fees',rdate='$rdate',details='$details' where id=2");
header("location:library.php");
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
  <?php include("link_lib.php"); ?>
  <p>&nbsp;</p>
  <h2 align="center">Welcome to the sjc Library Manager edwin</h2>
  <table width="399" height="160" border="0" align="center" cellpadding="5">
    <tr>
      <td>Library Fees </td>
    </tr>
    <tr>
      <td><input name="fees" type="text" value="<?php echo $r1['fees']; ?>" /></td>
    </tr>
    <tr>
      <td>Details</td>
    </tr>
    <tr>
      <td><input type="text" name="details" value="<?php echo $r1['details']; ?>" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="btn" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="478" border="1" align="center">
    <tr>
      <th>Library Fees (Declared on <?php echo $r1['rdate']; ?>) </th>
    </tr>
    
    <tr>
      <td align="center">Rs. <?php echo $r1['fees']; ?></td>
    </tr>
    <tr>
      <td align="center"><?php echo $r1['details']; ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
