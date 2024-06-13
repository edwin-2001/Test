<?php
session_start();
include("dbconnect.php");
extract($_POST);
if(isset($btn))
{
$qry=mysqli_query($connect,"select * from students where regno='$uname' && pass='$pass' ");
$num=mysqli_num_rows($qry);
	if($num==1)
	{
	$_SESSION['uname']=$uname;
	header("location:home.php");
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
<script language="javascript">
function validate()
{
	if(document.form1.uname.value=="")
	{
	alert("Enter the Username");
	document.form1.uname.focus();
	return false;
	}
	if(document.form1.pass.value=="")
	{
	alert("Enter the Password");
	document.form1.pass.focus();
	return false;
	}
return true;	
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div class="hd" align="center"><?php include("title.php"); ?></div>
  <?php include("link_home.php"); ?>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th width="52%" scope="row">&nbsp;</th>
      <td width="48%">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><img src="images/imagesxzx.jpg" width="275" height="183" /></th>
      <td><table width="352" height="176" border="0" align="center" cellpadding="5" class="bor">
        <tr>
          <th colspan="2" scope="row">STUDENT</th>
        </tr>
        <tr>
       
        </tr>
        <tr>
          <th width="167" align="left" scope="row">Reg No.(ex:19ucs603)</th>
          <td width="190" align="left"><input type="text" name="uname" /></td>
        </tr>
        <tr>
          <th align="left" scope="row">Paasword</th>
          <td align="left"><input type="password" name="pass" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="btn" value="Login" onclick="return validate()" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><a href="add_student.php">Register</a></td>
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
