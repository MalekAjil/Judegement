<?php
session_start();
 //this user is authorized one
 //so show him all cases
 if(!$_SESSION['auth']=='ok')
 {
 header("Location:index.php");
 }
 else
 {
include("date_function.php");
include("db_connect.php");
if(($_POST[id_contest]=='')||($_POST[id_court_contest]=='')||($_POST[year]=='')
||($_POST[court_name]=='')||($_POST[round_num]=='')||($_POST[id_general_lawer]=='')
||($_POST[id_distent]=='')||($_POST[id_room]==''))
{
header("Location:contest_error.php");
}
else
{
$sql="select id_contest from contest where $_POST[id_contest]=id_contest ";
 $result=mysql_query($sql);
if($row=mysql_num_rows($result)==1) 
 {
 header("location:change_id_contest.php");
 }
else
{ 
$d=date_function($_POST[day1],$_POST[month]);
$contest_date="$_POST[year]"."-"."$d";
$sql="INSERT INTO `contest` (`id_case`, `Id_Contest`, 
           `Contest_Date`, `Id_Court_Contest`, `Court_Name`,
		    `Round_Num`, `Id_general_Lawer`, `Id_Distent`, `Id_Room`)
			 VALUES ('$_POST[id_case]','$_POST[id_contest]','$contest_date',
			     '$_POST[id_court_contest]','$_POST[court_name]',
			       '$_POST[round_num]','$_POST[id_general_lawer]',
				   '$_POST[id_distent]','$_POST[id_room]')";
 $result=mysql_query($sql);
}
} 
mysql_close();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>»Ì«‰«  «·ÿ⁄Ê‰ ›Ì «·ﬁ÷Ì…</title>
<style type="text/css">
<!--
.style1 {
	color: #000066;
	font-size: 24px;
}
.style2 {font-size: 24px}
.style3 {font-size: 18px}
.style4 {font-size: 18}
.style5 {color: #000066}
-->
</style>
</head>

<body>
<table width="100%" bgcolor="#D5DFFF" >
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="4"><span class="style2"><span class="style1">&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1593;&#1606; &#1575;&#1604;&#1591;&#1593;&#1608;&#1606; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577;</span> &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></td>
  </tr>
  <tr bgcolor="#FFFFCC" class="style1">
    <td align="right" bgcolor="#DDEEFF"><span class="style9 style4 style5"><?php echo"$_POST[id_room]";?></span></td>
    <td align="right" bgcolor="#ABD5FF"><span class="style10 style4 style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1594;&#1585;&#1601;&#1577; </span></td>
    <td width="32%" bgcolor="#DDEEFF"><div align="right" class="style9 style4 style5"> <?php echo"$_POST[id_contest]";?>    </div></td>
    <td width="19%" align="right" bgcolor="#ABD5FF"><span class="style10 style4 style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1591;&#1593;&#1606;</span></td>
  </tr>
  <tr bgcolor="#FFFFCC" class="style1">
    <td width="27%" bgcolor="#DDEEFF"><div align="right" class="style9 style4 style5"> <?php echo"$_POST[round_num]";?>    </div></td>
    <td width="22%" bgcolor="#ABD5FF"><div align="right" class="style9 style4 style5"><span class="style11">&#1585;&#1602;&#1605; &#1575;&#1604;&#1578;&#1583;&#1608;&#1610;&#1585; </span></div></td>
    <td align="center" bgcolor="#DDEEFF"><div align="right" class="style9 style4 style5">
      <?php echo"$contest_date";?> </div></td>
    <td align="right" bgcolor="#ABD5FF" class="style10 style4 style5">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1591;&#1593;&#1606;</td>
  </tr>
  <tr bgcolor="#FFFFCC" class="style1">
    <td bgcolor="#DDEEFF"><div align="right" class="style9 style4 style5">
       <?php echo"$_POST[id_distent]";?>    </div></td>
    <td align="right" bgcolor="#ABD5FF"><div align="right" class="style9 style4 style5"><span class="style11">&#1585;&#1602;&#1605; &#1575;&#1604;&#1606;&#1610;&#1575;&#1576;&#1577; &#1575;&#1604;&#1578;&#1605;&#1610;&#1610;&#1586;&#1610;&#1577; </span></div></td>
    <td bgcolor="#DDEEFF"><div align="right" class="style9 style4 style5">
      <?php echo"$_POST[id_court_contest]";?> </div></td>
    <td align="right" bgcolor="#ABD5FF"><span class="style10 style4 style5">&#1585;&#1602;&#1605; &#1605;&#1581;&#1603;&#1605;&#1577; &#1575;&#1604;&#1606;&#1602;&#1590; </span></td>
  </tr>
  <tr align="center" bgcolor="#BEE684" class="style1">
    <td align="right" bgcolor="#DDEEFF"><span class="style9 style4 style5"><?php echo"$_POST[id_general_lawer]";?></span></td>
    <td align="right" bgcolor="#ABD5FF"><span class="style10 style4 style5">&#1585;&#1602;&#1605; &#1583;&#1610;&#1608;&#1575;&#1606; &#1575;&#1604;&#1605;&#1581;&#1575;&#1605;&#1610; &#1575;&#1604;&#1593;&#1575;&#1605; </span></td>
    <td align="right" bgcolor="#DDEEFF"><span class="style9 style4 style5"><?php echo"$_POST[court_name]";?></span></td>
    <td align="right" bgcolor="#ABD5FF"><span class="style10 style4 style5">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></td>
  </tr>
  <tr align="center" bgcolor="#BEE684"> </tr>
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="4"><p class="style3"><span class="style6"><span class="style2">Â–Â «·»Ì«‰«  ⁄‰ «·ÿ⁄Ê‰ «·Œ«’… »«·ﬁ÷Ì… «·„Õœœ…</span></span> </p>
    <p class="style3"><a href="index_lawer.php" title="&#1575;&#1604;&#1593;&#1608;&#1583;&#1577; &#1573;&#1604;&#1609; &#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1603; " class="style5">&#1575;&#1606;&#1602;&#1585; &#1607;&#1606;&#1575; &#1604;&#1604;&#1593;&#1608;&#1583;&#1577; &#1573;&#1604;&#1609; &#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1603; </a></p></td>
  </tr>
</table>
</body>
</html>