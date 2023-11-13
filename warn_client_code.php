<?php
session_start();
if(!$_SESSION['auth']=='ok')
{
header("Location:index.php");
}
include("db_connect.php");
$sql="select * 
      from warn
	  where id_case='$id_case'";
$result=mysql_query($sql);
//$row=mysql_fetch_array($result);	
 //this user is authorized one
 //so show him all cases
 $case_list= "<table width=\"100%\"  cellspacing=\"1\" cellpadding=\"1\" border=\"0\" bordercolor=\"#D5DFFF\" bgcolor=\"#D5DFFF\">
  <tr align=\"center\" bgcolor=\"#7A92DF\">
    <td colspan=\"12\"><span class=\"style2\"> &#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1573;&#1606;&#1584;&#1575;&#1585;&#1575;&#1578; &#1603;&#1575;&#1578;&#1576; &#1575;&#1604;&#1593;&#1583;&#1604; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></td>
  </tr>

<tr align=\"center\" bgcolor=\"#E7C9CF\">
      <td width=\"10%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\">&#1585;&#1602;&#1605; &#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></td>
	  <td width=\"10%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\">&#1585;&#1602;&#1605; &#1575;&#1604;&#1573;&#1606;&#1584;&#1575;&#1585;</span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\">&#1575;&#1587;&#1605; &#1575;&#1604;&#1583;&#1575;&#1574;&#1585;&#1577; </span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style8\"><span class=\"style4\">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1578;&#1576;&#1604;&#1610;&#1594;  </span></span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style8\"><span class=\"style4\">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></span></td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\">&#1605;&#1608;&#1590;&#1608;&#1593; &#1575;&#1604;&#1573;&#1606;&#1584;&#1575;&#1585; </span></td>
	  </tr>";
while($row=mysql_fetch_array($result))
{
$case_list.= "<tr align=\"center\" bgcolor=\"#E7C9CF\">
  <td width=\"10%\" align=\"center\" bgcolor=\"#DDEEFF\"><span class=\"style18 style6 style7\"> $row[id_base]</span></td>
  <td width=\"10%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Id_Warn]</span></span> </td> 
  <td width=\"20%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Circle_Name]</span></span> </td> 
  <td width=\"20%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Warn_Date]</span></span> </td> 
  <td width=\"20%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[court_name]</span></span> </td> 
  <td width=\"20%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Warn_Subject]</span></span> </td> 
    </tr>";

}//end while fetch array
 $case_list.="  <tr align=\"center\" bgcolor=\"#7A92DF\">
    <td colspan=\"12\"><p class=\"style26\"><p class=\"style2\"><a href=\"client_case_code_info.php?id_case=$id_case\" title=\"«·⁄Êœ… ≈·Ï «·’›Õ…«·”«»ﬁ… \"> «‰ﬁ—Â‰« ··⁄Êœ… ≈·Ï «·’›Õ… «·”«»ﬁ… </a></p></p>
    </td>
  </tr>
</table>";
mysql_close();
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title> „⁄·Ê„«  ⁄‰ «·ﬁ÷«Ì«</title>
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

<?php echo"$case_list";?>
</body>
</html>











