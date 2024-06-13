<?php
session_start();
include("dbconnect.php");
$uname=$_SESSION['uname'];
extract($_REQUEST);
$q4=mysql_query("select * from students where uname='$uname'");
$r4=mysql_fetch_array($q4);
$regno=$r4['regno'];
$dept=$r4['dept'];
$sem=$r4['semester'];
$sid=$r4['id'];
$cid=$r4['cid'];
if(isset($btn))
{
$qry1=mysql_query("select * from feedback where regno='$regno' && semester='$sem'");
$num1=mysql_num_rows($qry1);
	if($num1==0)
	{
	$mq=mysql_query("select max(id) from feedback");
$mr=mysql_fetch_array($mq);
$id=$mr['max(id)']+1;
$total1=$fld1a+$fld2a+$fld3a+$fld4a+$fld5a+$fld6a+$fld7a+$fld8a+$fld9a+$fld10a+$fld11a+$fld12a+$fld13a;
$ins=mysql_query("insert into feedback(id,dept,cid,semester,sid,staff,fld1,fld2,fld3,fld4,fld5,fld6,fld7,fld8,fld9,fld10,fld11,fld12,fld13,total) values($id,'$dept','$sem','$sid1','$staff1','$fld1a','$fld2a','$fld3a','$fld4a','$fld5a','$fld6a','$fld7a','$fld8a','$fld9a','$fld10a','$fld11a','$fld12a','$fld13a','$total1')");

$id2=$id+1;
$total2=$fld1b+$fld2b+$fld3b+$fld4b+$fld5b+$fld6b+$fld7b+$fld8b+$fld9b+$fld10b+$fld11b+$fld12b+$fld13b;
$ins=mysql_query("insert into feedback(id,dept,cid,semester,sid,staff,fld1,fld2,fld3,fld4,fld5,fld6,fld7,fld8,fld9,fld10,fld11,fld12,fld13,total) values($id2,'$dept','$sem','$sid2','$staff2','$fld1b','$fld2b','$fld3b','$fld4b','$fld5b','$fld6b','$fld7b','$fld8b','$fld9b','$fld10b','$fld11b','$fld12b','$fld13b','$total2')");

$id3=$id2+1;
$total3=$fld1c+$fld2c+$fld3c+$fld4c+$fld5c+$fld6c+$fld7c+$fld8c+$fld9c+$fld10c+$fld11c+$fld12c+$fld13c;
$ins=mysql_query("insert into feedback(id,dept,cid,semester,sid,staff,fld1,fld2,fld3,fld4,fld5,fld6,fld7,fld8,fld9,fld10,fld11,fld12,fld13,total) values($id3,'$dept','$sem','$sid3','$staff3','$fld1c','$fld2c','$fld3c','$fld4c','$fld5c','$fld6c','$fld7c','$fld8c','$fld9c','$fld10c','$fld11c','$fld12c','$fld13c','$total3')");

$id4=$id3+1;
$total4=$fld1d+$fld2d+$fld3d+$fld4d+$fld5d+$fld6d+$fld7d+$fld8d+$fld9d+$fld10d+$fld11d+$fld12d+$fld13d;
$ins=mysql_query("insert into feedback(id,dept,cid,semester,sid,staff,fld1,fld2,fld3,fld4,fld5,fld6,fld7,fld8,fld9,fld10,fld11,fld12,fld13,total) values($id4,'$regno','$sem','$sid4','$staff4','$fld1d','$fld2d','$fld3d','$fld4d','$fld5d','$fld6d','$fld7d','$fld8d','$fld9d','$fld10d','$fld11d','$fld12d','$fld13d','$total4')");

$id5=$id4+1;
$total5=$fld1e+$fld2e+$fld3e+$fld4e+$fld5e+$fld6e+$fld7e+$fld8e+$fld9e+$fld10e+$fld11e+$fld12e+$fld13e;
$ins=mysql_query("insert into feedback(id,dept,cid,semester,sid,staff,fld1,fld2,fld3,fld4,fld5,fld6,fld7,fld8,fld9,fld10,fld11,fld12,fld13,total) values($id5,'$dept','$sem','$sid5','$staff5','$fld1e','$fld2e','$fld3e','$fld4e','$fld5e','$fld6e','$fld7e','$fld8e','$fld9e','$fld10e','$fld11e','$fld12e','$fld13e','$total5')");

$tot=39;
$a=1;
$qs1=mysql_query("select * from feedback where staff='$staff1' && semester='$sem'");
while($rs1=mysql_fetch_array($qs1))
{
$t1=$rs1['total'];
$tt1[]=($t1/$tot)*100;
$a++;
}
$sum1=array_sum($tt1);
$avg=($sum1/$a);
mysql_query("update staff set score=$avg where uname='$staff1'");
/////////////////////////////////////////////////////////////////////////////////
$b=1;
$qs2=mysql_query("select * from feedback where staff='$staff2' && semester='$sem'");
while($rs2=mysql_fetch_array($qs2))
{
$t2=$rs2['total'];
$tt2[]=($t2/$tot)*100;
$b++;
}
$sum2=array_sum($tt2);
$avg2=($sum2/$b);
mysql_query("update staff set score=$avg2 where uname='$staff2'");
///////////////////////////////////////////////////////////////////////////////////////
$c=1;
$qs3=mysql_query("select * from feedback where staff='$staff3' && semester='$sem'");
while($rs3=mysql_fetch_array($qs3))
{
$t3=$rs3['total'];
$tt3[]=($t3/$tot)*100;
$c++;
}
$sum3=array_sum($tt3);
$avg3=($sum3/$c);
mysql_query("update staff set score=$avg3 where uname='$staff3'");
//////////////////////////////////
$d=4;
$qs4=mysql_query("select * from feedback where staff='$staff4' && semester='$sem'");
while($rs4=mysql_fetch_array($qs4))
{
$t4=$rs4['total'];
$tt4[]=($t4/$tot)*100;
$d++;
}
$sum4=array_sum($tt4);
$avg4=($sum1/$d);
mysql_query("update staff set score=$avg4 where uname='$staff4'");
//////////////////////////////////
$e=1;
$qs5=mysql_query("select * from feedback where staff='$staff5' && semester='$sem'");
while($rs5=mysql_fetch_array($qs5))
{
$t5=$rs5['total'];
$tt5[]=($t5/$tot)*100;
$e++;
}
$sum5=array_sum($tt5);
$avg5=($sum5/$e);
mysql_query("update staff set score=$avg5 where uname='$staff5'");
//////////////////////////////////

?>
	<script language="javascript">
	alert("Your Feedback has been Added Successfully");
	window.location.href="userhome.php";
	</script>
	<?php
	
	}
	else
	{
	?>
	<script language="javascript">
	alert("Your Feedback Already Added..");
	</script>
	<?php
	}

}

?>
<html>
<head>
<title><?php include("title.php"); ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style2 {color: #006699}
.style3 {color: #003399}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div class="hd" align="center"><?php include("title.php"); ?></div>
    <?php include("link_user.php"); ?>
    <h3 align="left">Roll No.: <?php echo $regno; ?></h3>
    <table width="753" height="94" border="0" align="center">
      <tr>
        <td colspan="3" align="center"><h2 class="style2">NEHRU MEMORIAL COLLEGE <span class="style1">(AUTONOMOUS) </span></h2></td>
      </tr>
      <tr>
        <td colspan="3" align="center">(Nationally Accredited with 'A' Grade by NAAC) </td>
      </tr>
      <tr>
        <td colspan="3" align="center">PUTHANAMPATTI - 621 007, Tiruchirappalli District, Tamil Nadu. </td>
      </tr>
      <tr>
        <td width="219">&nbsp;</td>
        <td width="309" align="center"><h3 class="style3">STUDENT EVALUATION OF STAFF </h3></td>
        <td width="211" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><h4>Score: Excellent-3; Good-2; Fair-1 </h4></td>
      </tr>
    </table>
    <table width="796" height="133" border="1" align="center">
      <tr>
        <th colspan="2">Name of the Staff </th>
        <th><select name="staff1">
        <?php
	  $q1=mysql_query("select * from staff where dept='$dept'");
	  while($r1=mysql_fetch_array($q1))
	  {
	  ?>
        <option value="<?php echo $r1['uname']; ?>"><?php echo $r1['staff']; ?></option>
        <?php
	  }
	  ?>
      </select></th>
        <th><select name="staff2">
          <?php
	  $q1=mysql_query("select * from staff where dept='$dept'");
	  while($r1=mysql_fetch_array($q1))
	  {
	  ?>
          <option value="<?php echo $r1['uname']; ?>"><?php echo $r1['staff']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
        <th><select name="staff3">
          <?php
	  $q1=mysql_query("select * from staff where dept='$dept'");
	  while($r1=mysql_fetch_array($q1))
	  {
	  ?>
          <option value="<?php echo $r1['uname']; ?>"><?php echo $r1['staff']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
        <th><select name="staff4">
          <?php
	  $q1=mysql_query("select * from staff where dept='$dept'");
	  while($r1=mysql_fetch_array($q1))
	  {
	  ?>
          <option value="<?php echo $r1['uname']; ?>"><?php echo $r1['staff']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
        <th><select name="staff5">
          <?php
	  $q1=mysql_query("select * from staff where dept='$dept'");
	  while($r1=mysql_fetch_array($q1))
	  {
	  ?>
          <option value="<?php echo $r1['uname']; ?>"><?php echo $r1['staff']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
      </tr>
      <tr>
        <th colspan="2">Course Taught </th>
        <th><select name="sid1">
          <?php
	  $q2=mysql_query("select * from subject where dept='$dept'");
	  while($r2=mysql_fetch_array($q2))
	  {
	  ?>
          <option value="<?php echo $r2['id']; ?>"><?php echo $r2['subject']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
        <th><select name="sid2">
          <?php
	  $q2=mysql_query("select * from subject where dept='$dept'");
	  while($r2=mysql_fetch_array($q2))
	  {
	  ?>
          <option value="<?php echo $r2['id']; ?>"><?php echo $r2['subject']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
        <th><select name="sid3">
          <?php
	  $q2=mysql_query("select * from subject where dept='$dept'");
	  while($r2=mysql_fetch_array($q2))
	  {
	  ?>
          <option value="<?php echo $r2['id']; ?>"><?php echo $r2['subject']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
        <th><select name="sid4">
          <?php
	  $q2=mysql_query("select * from subject where dept='$dept'");
	  while($r2=mysql_fetch_array($q2))
	  {
	  ?>
          <option value="<?php echo $r2['id']; ?>"><?php echo $r2['subject']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
        <th><select name="sid5">
          <?php
	  $q2=mysql_query("select * from subject where dept='$dept'");
	  while($r2=mysql_fetch_array($q2))
	  {
	  ?>
          <option value="<?php echo $r2['id']; ?>"><?php echo $r2['subject']; ?></option>
          <?php
	  }
	  ?>
        </select></th>
      </tr>
      <tr>
        <th width="43">Sno</th>
        <th width="314">Parameter</th>
        <th width="81">&nbsp;</th>
        <th width="78">&nbsp;</th>
        <th width="78">&nbsp;</th>
        <th width="78">&nbsp;</th>
        <th width="78">&nbsp;</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Knowledge of the Subject </td>
        <td><select name="fld1a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select>
        </td>
        <td><select name="fld1b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld1c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld1d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld1e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Preparation for the Class </td>
        <td><select name="fld2a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld2b" id="fld2b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld2c" id="fld2c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld2d" id="fld2d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld2e" id="fld2e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Clarity of Expression &amp; Compentency in Teaching </td>
        <td><select name="fld3a" id="fld3a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld3b" id="fld3b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld3c" id="fld3c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld3d" id="fld3d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld3e" id="fld3e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Classroom Interaction </td>
        <td><select name="fld4a" id="fld4a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld4b" id="fld4b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld4c" id="fld4c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld4d" id="fld4d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld4e" id="fld4e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Class Control </td>
        <td><select name="fld5a" id="fld5a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld5b" id="fld5b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld5c" id="fld5c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld5d" id="fld5d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld5e" id="fld5e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Motivating the Students </td>
        <td><select name="fld6a" id="fld6a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld6b" id="fld6b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld6c" id="fld6c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld6d" id="fld6d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld6e" id="fld6e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>7</td>
        <td>Punctuality</td>
        <td><select name="fld7a" id="fld7a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld7b" id="fld7b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld7c" id="fld7c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld7d" id="fld7d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld7e" id="fld7e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>8</td>
        <td>Academic Help for Weaker </td>
        <td><select name="fld8a" id="fld8a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld8b" id="fld8b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld8c" id="fld8c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld8d" id="fld8d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld8e" id="fld8e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>9</td>
        <td>Handling of all Assignment Hours &amp; Time Management </td>
        <td><select name="fld9a" id="fld9a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld9b" id="fld9b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld9c" id="fld9c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld9d" id="fld9d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld9e" id="fld9e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>10</td>
        <td>Impartial Treatment of Students </td>
        <td><select name="fld10a" id="fld10a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld10b" id="fld10b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld10c" id="fld10c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld10d" id="fld10d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld10e" id="fld10e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>11</td>
        <td>Usage of ICT </td>
        <td><select name="fld11a" id="fld11a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld11b" id="fld11b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld11c" id="fld11c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld11d" id="fld11d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld11e" id="fld11e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>12</td>
        <td>Creating awareness about the recent developments in the Subject </td>
        <td><select name="fld12a" id="fld12a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld12b" id="fld12b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld12c" id="fld12c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld12d" id="fld12d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld12e" id="fld12e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
      <tr>
        <td>13</td>
        <td>Provide more matters than in the text book </td>
        <td><select name="fld13a" id="fld13a">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld13b" id="fld13b">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld13c" id="fld13c">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld13d" id="fld13d">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
        <td><select name="fld13e" id="fld13e">
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select></td>
      </tr>
    </table>
    <p align="center">
      <input type="submit" name="btn" value="Submit">
    </p>
    <p align="center">&nbsp;</p>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
