<?PHP
session_start();
if(!$_SESSION[auth]=="ok")
{
 header("Location:index.php");
}
include("db_connect.php");
$sql="
 select * from cases where id_case='$id_case'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$sql1="select lawer_name,work_phone,home_phone,email
     from lawer where id_lawer='$row[id_lawer]'";
$result1=mysql_query($sql1);
$row1=mysql_fetch_array($result1);
 $sql2="select *
	         from proxy
			  where id_client='$row[Id_Client]'";
	 $result2=mysql_query($sql2);
	 $row2=mysql_fetch_array($result2);		  
mysql_close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>������ ������</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	color: #000066;
}
.style10 {color: #660066}
.style12 {color: #660066; font-size: 18px; }
.style13 {font-size: 18px; color: #006600; }
.style14 {color: #CC0000}
.style15 {color: #000066; font-size: 18px; }
.style16 {color: #000066}
-->
</style></head>

<body>
<table width="100%" bgcolor="#D5DFFF" >
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="6"><span class="style1">��� �� �������� ������ ������� �������</span></td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#ABD5FF" class="style15">������� �� ������� </td>
    <td width="17%" align="right" bgcolor="#DDEEFF" class="style15"><span class="style15"><?php echo $row['Room_Num'];?></span></td>
    <td width="20%" align="right" bgcolor="#ABD5FF" class="style15"><span class="style15">��� ������ </span></td>
    <td width="14%" align="right" bgcolor="#DDEEFF" class="style15"><span class="style15"><?php echo $row['enemy_assest'];?></span></td>
    <td width="14%" align="right" bgcolor="#ABD5FF" class="style15"><span class="style15">����� ����� </span></td>
  </tr>
    <tr class="style15"><td width="20%" align="right" bgcolor="#DDEEFF" class="style12"><span class="style16"><?php echo $row1['work_phone'];?></span></td>
      <td width="15%" align="right" bgcolor="#ABD5FF" class="style15">���� ����� </td>
      <td width="17%" align="right" bgcolor="#DDEEFF"><span class="style15"><?php echo $row['Court_name'];?></span></td>
      <td width="20%" align="right" bgcolor="#ABD5FF"><span class="style15">��� ������� </span></td>
    <td width="14%" align="right" bgcolor="#DDEEFF"><span class="style15"><?php echo $row['Id_Base'];?></span></td>
    <td width="14%" align="right" bgcolor="#ABD5FF"><span class="style15">��� ������ ����� </span></td>
  </tr>
  <tr class="style15">
    <td align="right" bgcolor="#DDEEFF" class="style12"><span class="style16"><?php echo $row1['home_phone'];?></span></td>
    <td width="15%" align="right" bgcolor="#ABD5FF" class="style15">���� ������ </td>
    <td width="17%" align="right" bgcolor="#DDEEFF" class="style12"><span class="style16"><?php echo $row['Court_place'];?></span></td>
    <td width="20%" align="right" bgcolor="#ABD5FF" class="style15">���� ������� </td>
    <td width="14%" align="right" bgcolor="#DDEEFF"><span class="style15"><?php echo $row['Session_date'];?></span></td>
    <td width="14%" align="right" bgcolor="#ABD5FF"><span class="style15">����� ������ ������� </span></td>
  </tr>
  <tr class="style15">
    <td align="right" bgcolor="#DDEEFF" class="style12"><div align="right" class="style16">
    <a href="mailto:<?php echo $row1['email'];?>"><?php echo $row1['email'];?></a></div>      </td>
    <td width="15%" align="right" bgcolor="#ABD5FF" class="style15">������ ���������� </td>
    <td width="17%" align="right" bgcolor="#DDEEFF" class="style12"><span class="style16"><?php echo $row['Reason'];?></span></td>
    <td width="20%" align="right" bgcolor="#ABD5FF" class="style12"><span class="style16">��� ������� </span></td>
    <td width="14%" align="right" bgcolor="#DDEEFF" class="style12"><span class="style16"><?php echo $row['Money'];?></span></td>
    <td width="14%" align="right" bgcolor="#ABD5FF" class="style15">�������</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#DDEEFF" class="style15"><?php echo $row2['Proxy_Date'];?></td>
    <td align="right" bgcolor="#ABD5FF" class="style15">����� �������</td>
    <td align="right" bgcolor="#DDEEFF" class="style15"><?php echo $row2['Kind_Proxy'];?></td>
    <td align="right" bgcolor="#ABD5FF" class="style15">��� ������� </td>
    <td align="right" bgcolor="#DDEEFF" class="style15"><?php echo $row2['Id_Proxy'];?></td>
    <td align="right" bgcolor="#ABD5FF" class="style15">��� ������� </td>
  </tr>
  <tr>
    <td colspan="5" align="right" bgcolor="#DDEEFF" class="style15"><span class="style16"><?php echo $row['Case_Subject'];?></span></td>
    <td align="right" bgcolor="#ABD5FF" class="style15">����� ������ </td>
  </tr>
  <tr align="right">
    <td colspan="3" align="center" bgcolor="#ABD5FF" class="style15"><span class="style12"><a href="warn_client_code.php?id_case=<?php echo $row[Id_Case]?>" title="������� ��� ������� ���� ����� ������ ���� ������ "><span class="style15">������� ���� �����</span></a></span> </td>
    <td align="center" bgcolor="#ABD5FF" class="style15"><a href="sign_client_code.php?id_case=<?php echo $row[Id_Case]?>" title="������� ��� ������ ������ ������ ������ ���� ������"><span class="style15">������ ������</span> </a></td>
    <td align="center" bgcolor="#ABD5FF" class="style15"><a href="contest_client_code.php?id_case=<?php echo $row[Id_Case]?>" title="������� ��� ������ ������ ���� ������"><span class="style15">������</span></a></td>
    <td align="center" bgcolor="#ABD5FF" class="style15"><span class="style10"><a href="apped_client_code.php?id_case=<?php echo $row[Id_Case];?>"title="������� ��� ������ ��������� ������ ���� ������"><span class="style15">���������</span></a></span></td>
  </tr>
  <tr align="center" bgcolor="#7A92DF">
    <td colspan="6"><p class="style13"><span class="style15">��� �� �������� �� ������ ������� ����� �� ������ ����� ������ ������ ������ �������� �������� ������ ��� ����� ��� ���� ������� ��� ������ ������ �� <a href="index_client.php" title="������ ��� ������ ������ ��" class="style14"></a></span><a href="index_client.php" title="������ ��� ������ ������ ��" class="style14">���� ���</a></p></td>
  </tr>
</table>
</body>
</html>
