<?php
session_start();
include("dbconnect.php");
extract($_POST);
$rdate=date("d-m-Y");
if(isset($btn))
{
$mq=mysqli_query($connect,"select max(id) from students");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;



$qry=mysqli_query($connect,"insert into students(id,regno,name,gender,dob,mobile,mobile2,email,address,dept,course,year,pass,rdate) values($id,'$regno','$name','$gender','$dob','$mobile','$mobile2','$email','$address','$dept','$course','$year','$pass','$rdate')");
if($qry)
{
?>
<script language="javascript">
alert("Registered Successfully");
window.location.href="index.php";
</script>
<?php
}
else
{
$msg="Already Exist!";
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
	if(document.form1.regno.value=="")
	{
	alert("Enter the Rollno");
	document.form1.regno.focus();
	return false;
	}
	
	
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
<form action="" method="post" name="form1" id="form1">
  <div class="hd" align="center"><?php include("title.php"); ?></div>
  <?php include("link_home.php"); ?>
  <p>&nbsp;</p>
  <h2 align="center">Registration</h2>
  <table width="377" height="122" border="0" align="center" cellpadding="5">

    <tr>
      <th width="119" align="left" scope="row">Regno</th>
      <td width="142" align="left"><input type="text" name="regno" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">Name </th>
      <td align="left"><input type="text" name="name" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">Gender</th>
      <td align="left"><input name="gender" type="radio" value="Male" />
        Male 
        <input name="gender" type="radio" value="Female" />
        Female</td>
    </tr>
    <tr>
      <th align="left" scope="row">DOB</th>
      <td align="left"><input type="text" name="dob" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">Mobile No. </th>
      <td align="left"><input type="text" name="mobile" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">Parent Mobile No. </th>
      <td align="left"><input type="text" name="mobile2" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">E-mail</th>
      <td align="left"><input type="text" name="email" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">Address</th>
      <td align="left"><textarea name="address"></textarea></td>
    </tr>
    <tr>
      <th align="left" scope="row">Department</th>
      <td align="left"><input type="text" name="dept" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">Course</th>
      <td align="left"><select name="course">
      <option value="">-Select-</option>
	  <option>BSc</option>
	  <option>BCA</option>
	  <option>BE</option>
	  <option>MSc</option>
	  <option>MCA</option>
	  <option>ME</option>
      </select></td>
    </tr>
    <tr>
      <th align="left" scope="row">Batch Year </th>
      <td align="left"><input type="text" name="year" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">Password</th>
      <td align="left"><input type="password" name="pass" /></td>
    </tr>
    <tr>
      <th align="left" scope="row">&nbsp;</th>
      <td align="left"><input type="submit" name="btn" value="Submit" onClick="return validate()" /></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p align="center" class="msg"><?php echo $msg; ?></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
