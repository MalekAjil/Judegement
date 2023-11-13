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
if(($_POST[year]=='')||($_POST[id_warn]=='')||($_POST[id_base]=='')
||($_POST[court_name]=='')||($_POST[circle_name]=='')||($_POST[warn_subject]==''))
{
header("Location:warn_error.php");
}
else
{
$sql="select Id_Warn from warn where $_POST[id_warn]=id_Warn ";
 $result=mysql_query($sql);
 
if($row=mysql_num_rows($result)==1)
 {
 header("location:change_Id_Warn.php");
 }
else
{ 

$d=date_function($_POST[day1],$_POST[month]);
$warn_date="$_POST[year]"."-"."$d"; 
$sql="INSERT INTO `warn` ( `Id_Warn` , `Id_Case` , `id_base` , `court_name` ,
 `Circle_Name` , `Warn_Date` , `Warn_Subject` ) 
VALUES ('$_POST[id_warn]','$_POST[id_case]','$_POST[id_base]','$_POST[court_name]',
     '$_POST[circle_name]','$warn_date','$_POST[warn_subject]')";
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
<title>≈‰–«—«  ﬂ« » «·⁄œ·</title>
<style type="text/css">
<!--
.style1 {font-size: 24px;
	color: #000066;
}
.style2 {font-size: 18px;
	color: #660066;
}
.style3 {color: #660066}
.style4 {font-size: 18px}
.style6 {font-size: 18}
.style7 {	color: #336633;
	font-size: 18px;
}
.style8 {color: #000066}
.style9 {font-size: 18px; color: #000066; }
.style10 {font-size: 18; color: #000066; }
-->
</style>
</head>

<body>
<table width="100%" bgcolor="#D5DFFF" >
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="4"><span class="style1"> &#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1573;&#1606;&#1584;&#1575;&#1585;&#1575;&#1578; &#1603;&#1575;&#1578;&#1576; &#1575;&#1604;&#1593;&#1583;&#1604; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></td>
  </tr>
  <tr class="style8">
    <td align="right" bgcolor="#DDEEFF" class="style2"><span class="style8"><?php echo "$_POST[circle_name]";?></span></td>
    <td align="right" bgcolor="#ABD5FF"><span class="style9">&#1575;&#1587;&#1605; &#1575;&#1604;&#1583;&#1575;&#1574;&#1585;&#1577; </span></td>
    <td width="26%" align="right" bgcolor="#DDEEFF" class="style2"><div align="right" class="style10">
    <?php echo "$_POST[id_base]";?>    </div></td>
    <td width="22%" align="right" bgcolor="#ABD5FF"><span class="style9">&#1585;&#1602;&#1605; &#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></td>
  </tr>
  <tr class="style8">
    <td width="28%" align="right" bgcolor="#DDEEFF" class="style2"><div align="right" class="style10">
    <?php echo "$warn_date";?>    </div></td>
    <td width="24%" align="right" bgcolor="#ABD5FF"><div align="right" class="style8"><span class="style4">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1578;&#1576;&#1604;&#1610;&#1594; </span></div></td>
    <td align="right" bgcolor="#DDEEFF" class="style2"><div align="right" class="style10">
    <?php echo "$_POST[id_warn]";?>    </div></td>
    <td align="right" bgcolor="#ABD5FF" class="style9">&#1585;&#1602;&#1605; &#1575;&#1604;&#1573;&#1606;&#1584;&#1575;&#1585;</td>
  </tr>
  <tr class="style8">
    <td align="right" bgcolor="#DDEEFF" class="style2"><div align="right" class="style10">
    <?php echo "$_POST[court_name]";?>    </div></td>
    <td bgcolor="#ABD5FF"><div align="right" class="style8"><span class="style4">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></div></td>
    <td align="right" bgcolor="#DDEEFF" class="style2"><div align="right"><span class="style3"><span class="style4"><span class="style6"><span class="style8"></span></span></span></span> </div></td>
    <td align="right" bgcolor="#ABD5FF" class="style9">&#1605;&#1608;&#1590;&#1608;&#1593; &#1575;&#1604;&#1573;&#1606;&#1584;&#1575;&#1585; </td>
  </tr>
  <tr align="right" bgcolor="#FFFFCC">
    <td colspan="4" align="right" bgcolor="#DDEEFF" class="style8">
      <form name="form1" method="post" action="">
        <textarea name="textarea" cols="86" rows="4"class="style10"><?php echo "$_POST[warn_subject]";?></textarea>
      </form>      </td>
  </tr>
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="4"><p class="style7"><span class="style1">&#1607;&#1584;&#1607; &#1607;&#1610; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></p>
      <p class="style7"><a href="index_lawer.php" title="&#1575;&#1604;&#1593;&#1608;&#1583;&#1577; &#1573;&#1604;&#1609; &#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1603; &#1575;&#1606;&#1602;&#1585;"> &#1575;&#1606;&#1602;&#1585;&#1607;&#1606;&#1575; &#1604;&#1604;&#1593;&#1608;&#1583;&#1577; &#1573;&#1604;&#1609; &#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1603; </a></p></td>
  </tr>

</table>
</body>
</html>
