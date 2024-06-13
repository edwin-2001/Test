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
    <h3 align="center">&nbsp;</h3>
    <h3 align="center">Performance</h3>
    <table width="421" height="69" border="1" align="center">
      <tr>
        <td>Excellance</td>
        <td>Good</td>
        <td>A</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
