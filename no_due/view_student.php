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
  <?php include("link_war.php"); ?>
  <p>&nbsp;</p>
  <h2 align="center">Students</h2>
  <?php
 
  $qry=mysql_query("select * from students");
  $num=mysql_num_rows($qry);
  	if($num>0)
	{
  ?>
  <table width="864" border="1" align="center">
    <tr>
      <th width="29" scope="row">Sno</th>
      <th width="65">Reg. No </th>
      <th width="47">Name</th>
      <th width="59">Gender</th>
      <th width="95">Date of Birth </th>
      <th width="92">Contact No. </th>
      <th width="47">E-mail</th>
      <th width="93">Department</th>
      <th width="59">Degree</th>
      <th width="38">Year</th>
      <th width="170">Action</th>
    </tr>
	<?php
	$i=0;
	
	while($row=mysql_fetch_array($qry))
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
      <td><a href="extra.php?regno=<?php echo $row['regno']; ?>">Extra</a> | <a href="send_fees.php?regno=<?php echo $row['regno']; ?>">Fees </a></td>
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
