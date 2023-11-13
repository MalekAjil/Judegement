<?php
session_start();
if(!$_SESSION['auth']=='ok')
{
header("Location:index.php");
}
include("db_connect.php");
$sql="select * 
      from apped
	  where id_case='$id_case'";
$result=mysql_query($sql);
//$row=mysql_fetch_array($result);	
 //this user is authorized one
 //so show him all cases
 $case_list= "<table width=\"100%\"  cellspacing=\"1\" cellpadding=\"1\" border=\"0\" bordercolor=\"#D5DFFF\" bgcolor=\"#D5DFFF\">
 <tr align=\"center\" bgcolor=\"#7A92DF\">
    <td colspan=\"16\"><span class=\"style2\">&#1576;Ì«‰«  ⁄‰ «·≈” ∆‰«› &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></td>
  </tr>
<tr align=\"center\" bgcolor=\"#E7C9CF\">
      <td width=\"5%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\"> <span class=\"style8\">&#1585;&#1602;&#1605; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585; &#1575;&#1604;&#1605;&#1587;&#1578;&#1571;&#1606;&#1601; </span> </span></td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1573;&#1587;&#1578;&#1574;&#1606;&#1575;&#1601;</span></span> </td>
	  <td width=\"5%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">&#1585;&#1602;&#1605; &#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1573;&#1587;&#1578;&#1574;&#1606;&#1575;&#1601; </span></span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></span> </td>
	  <td width=\"5%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">&#1585;&#1602;&#1605; &#1575;&#1604;&#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1593;&#1575;&#1605; </span></span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\"><span class=\"style7\"><span class=\"style9\">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1580;&#1604;&#1587;&#1577; </span></span></span> </td>
	  <td width=\"5%\" align=\"center\" bgcolor=\"#ABD5FF\" class=\"style7\"><span class=\"style9\"><span class=\"style7\"><span class=\"style9\">&#1585;&#1602;&#1605; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585;</span></span></span> </td>
	  <td width=\"20%\" colspan=\"7\" align=\"center\" bgcolor=\"#ABD5FF\" colspan=\"8\"  class=\"style7\"><span class=\"style9\"><span class=\"style8\">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585; </span> </td>
    </tr>";
while($row=mysql_fetch_array($result))
{
$case_list.= "<tr align=\"center\" bgcolor=\"#E7C9CF\">
  <td width=\"5%\" align=\"center\" bgcolor=\"#DDEEFF\"><span class=\"style18 style6 style7\"> $row[Id_Apped]</span></td>
  <td width=\"20%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Apped_Date]</span></span> </td> 
  <td width=\"5%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Id_Base]</span></span> </td> 
  <td width=\"20%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Court_name]</span></span> </td> 
  <td width=\"5%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[id_apped_base]</span></span> </td> 
  <td width=\"20%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[First_Session_date]</span></span> </td> 
  <td width=\"5%\" align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Id_Decide]</span></span> </td> 
  <td width=\"20%\"  align=\"center\" bgcolor=\"#DDEEFF\" class=\"style7\"><span class=\"style9\"><span class=\"style8\">$row[Decide_Date]</span></span> </td> 
  
  
   </tr>";
}//end while fetch array
 $case_list.=" <tr  align=\"center\" bgcolor=\"#7A92DF\">
    <td height=\"60\" colspan=\"16\"><p><p class=\"style2\"><a href=\"client_case_code_info.php?id_case=$id_case\" title=\"«·⁄Êœ… ≈·Ï «·’›Õ…«·”«»ﬁ… \"> «‰ﬁ—Â‰« ··⁄Êœ… ≈·Ï «·’›Õ… «·”«»ﬁ… </a></p></p></td>
  </tr></table>";
  	mysql_close();
?>  


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>ﬁ«∆„… «·ﬁ÷«Ì«</title>
<style type="text/css">
<!--
.style2 {font-size: 24px;
	color: #000066;
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
<?php echo"$case_list"; ?>
</body>
</html>
