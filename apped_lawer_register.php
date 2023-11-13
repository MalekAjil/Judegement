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
if(($_POST[id_apped]=='')||($_POST[year_apped]=='')||($_POST[id_base]=='')
||($_POST[court_name]=='')||($_POST[id_apped_base]=='')||($_POST[year_session]=='')
||($_POST[id_decide]=='')||($_POST[year_decide]==''))
{
header("Location:apped_error.php");
}
else
{
$sql="select id_Apped from apped where $_POST[id_apped]=id_Apped ";
 $result=mysql_query($sql);
if($row=mysql_num_rows($result)==1) 
 {
 header("location:change_id_apped.php");
 }
else
{
$d_apped=date_function($_POST[day_apped],$_POST[month_apped]);
$apped_date="$_POST[year_apped]"."-"."$d_apped";
$d_session=date_function($_POST[day_session],$_POST[month_session]);
$first_session_date="$_POST[year_session]"."-"."$d_session";
$d_decide=date_function($_POST[day_decide],$_POST[month_decide]);
$decide_date="$_POST[year_decide]"."-"."$d_decide";
$sql="INSERT INTO `apped` (`id_case`, `Id_Apped`, `Apped_Date`, `Id_Base`, 
                          `Court_name`, `id_apped_base`, `First_Session_date`, 
						  `Id_Decide`, `Decide_Date`)
		 VALUES ('$_POST[id_case]','$_POST[id_apped]','$apped_date',
		 '$_POST[id_base]','$_POST[court_name]','$_POST[id_apped_base]',
		 '$first_session_date','$_POST[id_decide]','$decide_date')";

$result=mysql_query($sql);
}
}
}
	mysql_close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>»Ì«‰«  «” ∆‰«› «·ﬁ÷Ì…</title>
<style type="text/css">
<!--
.style2 {font-size: 24px;
	color: #000066;
}
.style5 {
	font-size: 18px;
	color: #D40000;
}
.style6 {
	font-size: 18px;
	color: #990033;
}
.style7 {color: #000066}
.style8 {font-size: 18px; color: #000066; }
.style9 {font-size: 18px}
-->
</style>
</head>

<body>

<table width="100%"
 bgcolor="#D5DFFF" >
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="4"><span class="style2">·ﬁœ  „ ≈œŒ«· Â–Â «·&#1576;Ì«‰«  ⁄‰ «·≈” ∆‰«› &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></td>
  </tr>
  <tr bgcolor="#FFFFCC" class="style2">
    <td align="right" bgcolor="#DDEEFF"><span class="style7"><?PHP echo "$_POST[id_base]";?></span> </td>
    <td align="right" bgcolor="#ABD5FF"><span class="style8">&#1585;&#1602;&#1605; &#1575;&#1604;&#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1593;&#1575;&#1605; </span></td>
    <td width="32%" bgcolor="#DDEEFF"><div align="right" class="style7"><?PHP echo "$_POST[id_apped]";?> </div></td>
    <td width="16%" align="right" bgcolor="#ABD5FF"><span class="style8">&#1585;&#1602;&#1605; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585; &#1575;&#1604;&#1605;&#1587;&#1578;&#1571;&#1606;&#1601; </span></td>
  </tr>
  <tr bgcolor="#FFFFCC" class="style2">
    <td width="28%" bgcolor="#DDEEFF"><div align="right" class="style7"><?PHP echo "$first_session_date";?> </div></td>
    <td width="24%" bgcolor="#ABD5FF"><div align="right" class="style7"><span class="style9">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1580;&#1604;&#1587;&#1577; </span></div></td>
    <td align="center" bgcolor="#DDEEFF"><div align="right" class="style7"><?PHP echo "$apped_date";?> </div></td>
    <td align="right" bgcolor="#ABD5FF" class="style8">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1573;&#1587;&#1578;&#1574;&#1606;&#1575;&#1601;</td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td bgcolor="#DDEEFF" class="style7"><div align="right" class="style8"><?PHP echo "$_POST[id_decide]";?> </div></td>
    <td align="right" bgcolor="#ABD5FF" class="style2"><div align="right" class="style7"><span class="style9">&#1585;&#1602;&#1605; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585;</span></div></td>
    <td bgcolor="#DDEEFF" class="style2"><div align="right" class="style7"><?PHP echo "$_POST[id_apped_base]";?> </div></td>
    <td align="right" bgcolor="#ABD5FF" class="style2"><span class="style8">&#1585;&#1602;&#1605; &#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1573;&#1587;&#1578;&#1574;&#1606;&#1575;&#1601; </span></td>
  </tr>
  <tr align="center" bgcolor="#BEE684" class="style2">
    <td align="right" bgcolor="#DDEEFF"><span class="style7"><?PHP echo "$decide_date";?></span></td>
    <td align="right" bgcolor="#ABD5FF"><span class="style8">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585; </span></td>
    <td align="right" bgcolor="#DDEEFF"><span class="style7"><?PHP echo "$_POST[court_name]";?></span> </td>
    <td align="right" bgcolor="#ABD5FF"><span class="style8">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></td>
  </tr>
  <tr align="center" bgcolor="#BEE684"> </tr>
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="4"><p><span class="style2">Â–Â ÂÌ «·»Ì«‰«  ⁄‰ «·≈” ∆‰«› «·Œ«’… »«·ﬁ÷Ì… «·„Õœœ… </span><span class="style5"></span></p>
        <p><a href="index_lawer.php" title="«·⁄Êœ… ≈·Ï «·’›Õ… «·Œ«’… »ﬂ" class="style6">«‰ﬁ— Â‰« ··⁄Êœ… ≈·Ï «·’›Õ… «·Œ«’… »ﬂ</a></p></td>
  </tr>
</table>
</body>
</html>
