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
if(($_POST[id_sign]=='')||($_POST[id_base]=='')||($_POST[kind_sign]=='')
||($_POST[id_land]=='')||($_POST[court_name]==''))
{
header("Location:sign_error.php");
}
else
{
$sql="select Id_SIgn from sign where id_sign='$_POST[id_sign]' ";
 $result=mysql_query($sql);
 if($row=mysql_num_rows($result)==1) 
 {
 header("location:change_id_sign.php");
 }
 else
{ 
$d=date_function($_POST[day1],$_POST[month]);
$sign_date="$_POST[year]"."-"."$d";
$sql="INSERT INTO `sign` (`Id_SIgn`, `Id_Case`, `Id_Base`, `court_name`, 
                          `Kind_Sign`, `Sign_Date`, `Id_Land`) 
		 VALUES ('$_POST[id_sign]','$_POST[id_case]','$_POST[id_base]',
                     '$_POST[court_name]','$_POST[kind_sign]','$sign_date',
			         '$_POST[id_land]')";
$result=mysql_query($sql);
}
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>»Ì«‰«  «‘«—«  «·œ⁄ÊÏ</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	color: #000066;
}
.style3 {
	color: #336633;
	font-size: 18px;
}
.style4 {color: #000066}
.style5 {font-size: 18px; color: #000066; }
.style6 {font-size: 18px}
-->
</style></head>

<body>

  <table width="100%" bgcolor="#D5DFFF" >
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="4"><span class="style1">»Ì«‰«  ≈&#1588;&#1575;&#1585;&#1575;&#1578; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;«·ﬁ÷Ì… «·„Õœœ… </span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td align="right" bgcolor="#DDEEFF"><span class="style4"><?php echo"$_POST[id_sign]";?></span></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></td>
      <td width="32%" bgcolor="#DDEEFF"><div align="right" class="style4"><?php echo"$_POST[id_case]";?>
  </div></td>
      <td width="16%" align="right" bgcolor="#ABD5FF"><span class="style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1602;&#1590;&#1610;&#1577; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td width="28%" bgcolor="#DDEEFF"><div align="right" class="style4">
        <?php echo"$_POST[kind_sign]";?></div></td>
      <td width="24%" bgcolor="#ABD5FF"><div align="right" class="style4"><span class="style6">&#1606;&#1608;&#1593; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></div></td>
      <td align="center" bgcolor="#DDEEFF"><div align="right" class="style4">
        <?php echo"$_POST[id_base]";?> </div></td>
      <td align="right" bgcolor="#ABD5FF" class="style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1571;&#1587;&#1575;&#1587; </td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td bgcolor="#DDEEFF"><div align="right" class="style4">
        <?php echo"$sign_date";?></div></td>
      <td bgcolor="#ABD5FF"><div align="right" class="style4"><span class="style6">&#1578;&#1575;—&#1610;&#1582; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></div></td>
      <td bgcolor="#DDEEFF"><div align="right" class="style4">
      <?php echo"$_POST[id_land]";?>      </div></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1593;&#1602;&#1575;&#1585; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td colspan="3" bgcolor="#DDEEFF" class="style1"><div align="right" class="style4">
      </div>        <div align="right" class="style4"></div>      <div align="right" class="style4">
      <?php echo"$_POST[court_name]";?>      </div></td>
      <td align="right" bgcolor="#ABD5FF" class="style1"><span class="style5">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></td>
    </tr>
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="4"><p class="style3"><span class="style1">Â–Â ÂÌ «·»Ì«‰«  «·Œ«’… »«·ﬁ÷Ì… «·„Õœœ…</span></p>
      <p class="style3"><a href="index_lawer.php" title="«·⁄Êœ… ≈·Ï «·’›Õ… «·Œ«’… »ﬂ «‰ﬁ—"> «‰ﬁ—Â‰« ··⁄Êœ… ≈·Ï «·’›Õ… «·Œ«’… »ﬂ </a></p></td>
    </tr>
  </table>
  <?php mysql_close(); ?>
</body>
</html>
