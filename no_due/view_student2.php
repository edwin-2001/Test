<?php
session_start();
include("dbconnect.php");
extract($_POST);


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
  <h2 align="center">Students</h2>
  <?php
  
  $qry=mysqli_query($connect,"select * from students");
  $num=mysqli_num_rows($qry);
  	if($num>0)
	{
  ?>
  <table width="983" border="1" align="center">
    <tr>
      <th width="32" scope="row">Sno</th>
      <th width="78">Reg. No </th>
      <th width="52">Name</th>
      <th width="65">Gender</th>
      <th width="118">Date of Birth </th>
      <th width="108">Contact No. </th>
      <th width="55">E-mail</th>
      <th width="103">Department</th>
      <th width="65">Degree</th>
      <th width="42">Year</th>
      <th width="195">Due Status </th>
    </tr>
	<?php
	$i=0;
	
	while($row=mysqli_fetch_array($qry))
	{
	$i++;
	?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['regno']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['dob']; ?></td>
      <td><?php echo $row['mobile']." , ".$row['mobile2']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['dept']; ?></td>
      <td><?php echo $row['course']; ?></td>
      <td><?php echo $row['year']; ?></td>
      <td><?php
	  if($row['st_hostel']=="2")
	  {
	  echo "Hostel:Due Clear";
	  }
	  else if($row['st_hostel']=="3")
	  {
	  echo "Hostel:Due Pending";
	  }
	  else if($row['st_hostel']=="1")
	  {
	  echo "Hostel:Checking...";
	  }
	  else
	  {
	  echo "Hostel:Check Due";
	  }
	  //////////////////////////
	  if($row['st_library']=="2")
	  {
	  echo "<br>Library:Due Clear";
	  }
	  else if($row['st_library']=="3")
	  {
	  echo "<br>Library:Due Pending";
	  }
	  else if($row['st_library']=="1")
	  {
	  echo "<br>Library:Checking..";
	  }
	  else
	  {
	  echo "<br>Library:Check Due";
	  }
	  /////////////////
	  if($row['st_office']=="2")
	  {
	  echo "<br>Sem & Exam:Due Clear";
	  }
	  else if($row['st_office']=="3")
	  {
	  echo "<br>Sem & Exam:Due Pending";
	  }
	  else if($row['st_office']=="1")
	  {
	  echo "<br>Sem & Exam:Checking..";
	  }
	  else
	  {
	  echo "<br>Sem & Exam:Check Due";
	  }
	  ?></td>
    </tr>
	<?php
	}
	?>
  </table>
  <?php
  }
  else
  {
  echo "Empty!!";
  }
  
  
  ?>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
