<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {color: #660066; font-size: 18px; }
.style6 {font-size: 18px}
.style7 {color: #660066}
.style10 {color: #000066}
.style11 {color: #000066; font-size: 18px; }
.style13 {color: #000066; font-size: 24px; }
-->
</style>
</head>

<body>
<?php session_start(); ?>
<table width="100%" border="0" bordercolor="#FFFFCC" bgcolor="#D5DFFF" >
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="3"><span class="style13">&#1604;&#1602;&#1583; &#1578;&#1605; &#1573;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1578;&#1575;&#1604;&#1610;&#1577; </span></td>
  </tr>
    <tr class="style11">
      <td align="center" valign="top" bgcolor="#ABD5FF" class="style20 style6 style10">معلومات عن المحامي</td>
      <td width="21%" align="right" bgcolor="#DDEEFF"><span class="style11">
<?php

if(!$_SESSION['auth']=='ok')	  
{
header("Location:index.php");
}
else
{
if (($_POST[enemy_name]=='')||($_POST[case_subject]==''))
{
header("location:client_case_error.php");
}
else
{

 include("db_connect.php");
 $sql="SELECT  * 
      FROM  `lawer` 
      WHERE select_lawer='$_POST[lawer_name1]'";
	  $result=mysql_query($sql);	
	  $row=mysql_fetch_array($result);
      echo $row[lawer_name];
}	
} 

?>	  
 </span></td>
      <td width="20%" align="right" bgcolor="#ABD5FF"><span class="style18 style6 style10">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1575;&#1605;&#1610; </span></td>
    </tr>
    <tr class="style11">
      <td align="center" bgcolor="#ABD5FF" class="style20 style6 style10">هاتف العمل </td>
      <td align="right" bgcolor="#DDEEFF" class="style4"><span class="style10">
<?php 
	  $id=$row['id_lawer'];
	  if($_POST[client_adj]=='pretended')
	  {
	  echo"مدعي";
	  $sql="INSERT INTO `new_case` 
             (`id_lawer`, `id_client`, `Client_adj`,
	          `enemy_name`, `enemy_adj`, `enemy_assest`, `Case_Subject`)
           VALUES ('$id','$_SESSION[id]','مدعي','$_POST[enemy_name]',
	             'مدعى عليه','$_POST[enemy_assest]','$_POST[case_subject]')";

	  }
	  else
	  {
	  echo"مدعى عليه";
	  $sql="INSERT INTO `new_case` 
              (`id_lawer`, `id_client`, `Client_adj`,
           	 `enemy_name`, `enemy_adj`, `enemy_assest`, `Case_Subject`)
           VALUES ('$id','$_SESSION[id]','مدعى عليه','$_POST[enemy_name]',
	             'مدعي','$_POST[enemy_assest]','$_POST[case_subject]')";

	  }
	  mysql_query($sql,$conn);
	  mysql_close();
	  ?>
      </span></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style18 style6 style10">&#1589;&#1601;&#1577; &#1575;&#1604;&#1605;&#1608;&#1603;&#1604; </span></td>
  </tr>
    <tr class="style11">
      <td align="center" valign="middle" bgcolor="#DDEEFF" class="style4">
        <span class="style10">
        <?php
      echo $row[work_phone];
?>
      </span>	  </td>
      <td align="right" bgcolor="#DDEEFF" class="style4">
      <span class="style10"><span class="style14 style6 style10"><?php echo"$_POST[enemy_name]";?></span> </span></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style18 style6 style10">&#1575;&#1587;&#1605; &#1575;&#1604;&#1582;&#1589;&#1605; </span></td>
  </tr>
    <tr class="style11">
      <td align="center" valign="top" bgcolor="#ABD5FF" class="style20 style6 style10">هاتف المنزل </td>
      <td align="right" bgcolor="#DDEEFF"><span class="style14 style6 style10">
        <?php 
	  if($_POST[client_adj]=='pretended')
	  {
	  echo"مدعى عليه";
	  }
	  else
	  {
	   echo"مدعي";
	  }
	  ?>
          </span></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style18 style6 style10">&#1589;&#1601;&#1577; &#1575;&#1604;&#1582;&#1589;&#1605; </span></td>
  </tr>
    <tr class="style11"><span class="style4">
	  </span>
      <td align="center" valign="middle" bgcolor="#DDEEFF" class="style4">
	    <span class="style10">
	    <?php
      echo $row[home_phone];
?>
      </span></td>
      <td align="right" bgcolor="#DDEEFF"><span class="style14 style6 style10"><?php echo"$_POST[enemy_assest]" ?>
    </span></td>
      <td align="right" bgcolor="#ABD5FF">&#1608;&#1603;&#1610;&#1604; &#1575;&#1604;&#1582;&#1589;&#1605;</td>
  </tr>
    <tr bgcolor="#FFFFCC">
      <td align="center" valign="top" bgcolor="#ABD5FF" class="style11">البريد الإلكتروني </td>
      <td align="right" bgcolor="#DDEEFF" class="style11"><span class="style14 style6 style10">
      </span></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style18 style6 style10">&#1605;&#1608;&#1590;&#1608;&#1593; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; </span></td>
    </tr>
    <tr class="style11">
      <td align="center" valign="middle" bgcolor="#DDEEFF" class="style4">
	    <span class="style10">   
<a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a>
      </span></td>
      <td colspan="2" align="right" bgcolor="#DDEEFF"><span class="style10"><?php echo"$_POST[case_subject]" ?></span></td>
  </tr>
    <tr align="center" bgcolor="#7A92DF">
      <td height="20%" colspan="3" class="style20 style6 style7"><p><span class="style11">&#1608;&#1604;&#1602;&#1583; &#1578;&#1605; &#1575;&#1604;&#1570;&#1606; &#1606;&#1602;&#1604; &#1607;&#1584;&#1607; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1573;&#1604;&#1609; &#1575;&#1604;&#1605;&#1581;&#1575;&#1605;&#1610; &#1575;&#1604;&#1605;&#1582;&#1578;&#1575;&#1585; &#1575;&#1604;&#1584;&#1610; &#1587;&#1608;&#1601; &#1610;&#1578;&#1585;&#1575;&#1601;&#1593; &#1576;&#1602;&#1590;&#1610;&#1578;&#1603; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;&#1548;&#1608;&#1575;&#1606;&#1578;&#1592;&#1585; &#1575;&#1604;&#1585;&#1583; &#1593;&#1604;&#1609; &#1575;&#1604;&#1576;&#1585;&#1610;&#1583; &#1575;&#1604;&#1573;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1610; &#1571;&#1608; &#1593;&#1604;&#1609; &#1575;&#1604;&#1607;&#1575;&#1578;&#1601; &#1604;&#1573;&#1593;&#1604;&#1575;&#1605;&#1603; &#1576;&#1575;&#1604;&#1578;&#1594;&#1610;&#1585;&#1575;&#1578; &#1575;&#1604;&#1578;&#1610; &#1578;&#1591;&#1585;&#1602; &#1593;&#1604;&#1609; &#1575;&#1604;&#1602;&#1590;&#1610;&#1577;.&#1608;&#1573;&#1584;&#1575; &#1571;&#1585;&#1583;&#1578; &#1575;&#1604;&#1573;&#1587;&#1578;&#1601;&#1587;&#1575;&#1585; &#1593;&#1606; &#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1593;&#1604;&#1610;&#1603; &#1575;&#1604;&#1573;&#1578;&#1589;&#1575;&#1604; &#1573;&#1605;&#1575; &#1593;&#1606; &#1591;&#1585;&#1610;&#1602; &#1575;&#1604;&#1607;&#1575;&#1578;&#1601; &#1571;&#1608; &#1575;&#1604;&#1576;&#1585;&#1610;&#1583; &#1575;&#1604;&#1573;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1610; &#1603;&#1605;&#1575; &#1605;&#1576;&#1610;&#1606; &#1601;&#1610; &#1575;&#1604;&#1604;&#1575;&#1574;&#1581;&#1577; &#1571;&#1593;&#1604;&#1575;ه.<a href="index_client.php" title="الرجوع للصفحة الخاصة بك" class="style23"></a></span><a href="index_client.php" title="الرجوع للصفحة الخاصة بك" class="style23">انقر هنا للرجوع إلى الصفحة الخاصة بك</a></p>
      </td>
    </tr>
  </table>
  
</body>
</html>
