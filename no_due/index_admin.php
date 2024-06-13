<?php
session_start();
include("dbconnect.php");
extract($_POST);
if(isset($btn))
{
$qry=mysqli_query($connect,"select * from admin where username='$uname' && password='$pass' ");
$num=mysqli_num_rows($qry);
	if($num==1)
	{
	$_SESSION['uname']=$uname;
	header("location:admin.php");
	}
	else
	{
	$msg="Login Incorrect!";	
	}
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
  <?php include("link_home.php"); ?>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th width="54%" scope="row">&nbsp;</th>
      <td width="46%">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><img src="images/imagades.jpg" width="300" height="168" /></th>
      <td><table width="352" height="176" border="0" align="center" cellpadding="5" class="bor">
        <tr>
          <th colspan="2" scope="row">ADMINISTRATOR</th>
        </tr>
     
        <tr>
          <th width="167" align="left" scope="row">Username</th>
          <td width="190" align="left"><input type="text" name="uname" /></td>
        </tr>
        <tr>
          <th align="left" scope="row">Password</th>
          <td align="left"><input type="password" name="pass" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="btn" value="Login" /></td>
        </tr>

      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>