<?PHP
session_start();
if(!$_SESSION['auth']=='ok')
{
//decide what to do with unauthorized users
header("Location:index.php");
}
 //this user is authorized one
 //so show him all cases
 include("db_connect.php"); 
 $sql="select id_case,kind_case,enemy_name,enemy_adj,id_lawer
       from  cases
	   where id_client='$_SESSION[id]' ";
$result=mysql_query($sql);

$case_list= "<font size=\"+2\" color=\"#330066\" face=\"Times New Roman, Times, serif\"><b> >>����� ��: ".$_SESSION['auth_user']."</b></font> <br>
<table width=\"100%\"  cellspacing=\"1\" cellpadding=\"1\" border=\"0\" bordercolor=\"#D5DFFF\" bgcolor=\"#D5DFFF\">
 <tr>
    <td colspan=\"8\" align=\"center\" bgcolor=\"#7A92DF\" class=\"style4\"><p class=\"style5\"> ��� �� ������� ������ �� �������� ��� ��� ����� � ��� ������� ����� ��� ���� ������ �� �������� �� ���� �� ��� </p>
    <p class=\"style5\">������ ������ ���� ���� ����� �������� ���� �� ���� ��� ������</p></td>
  </tr>
<tr align=\"center\" bgcolor=\"#E7C9CF\">
      <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style20 style6 style7\"> ��� ������ </span></td>
	  <td width=\"30%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style14 style6 style7\">��� �����</span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style14 style6 style7\">��� �����</span> </td>
  	  <td width=\"30%\" align=\"center\" bgcolor=\"#ABD5FF\" colspan=\"3\"  class=\"style20 style6 style7\">��� ������� </td>
    </tr>";
while($row=mysql_fetch_array($result))
{
$sql1="select lawer_name
      from lawer
	   where id_lawer='$row[id_lawer]'";
$result1=mysql_query($sql1);
$lawer_name=mysql_fetch_array($result1);
$case_list.= "<tr align=\"center\" bgcolor=\"#E7C9CF\">
  <td width=\"20%\" align=\"center\" bgcolor=\"#D5DFFF\"><span class=\"style18 style6 style7\"> <a href=\"client_case_code_info.php?id_case=$row[id_case]\">$row[kind_case]</span></a></td>
  <td width=\"30%\" align=\"center\" valign=\"top\" bgcolor=\"#E8F2FF\" class=\"style20 style6 style7\">$row[enemy_name]</td>
   <td width=\"20%\" align=\"center\" valign=\"top\" bgcolor=\"#E8F2FF\" class=\"style20 style6 style7\">$row[enemy_adj]</td>
   <td width=\"30%\" align=\"center\" valign=\"top\" bgcolor=\"#E8F2FF\" class=\"style20 style6 style7\">$lawer_name[lawer_name]</td>
  </tr>";
}//end while fetch array
 $case_list.="<tr>
    <td colspan=\"8\" align=\"center\" bgcolor=\"#7A92DF\" class=\"style4\"><span class=\"style5\"> ��� �� �������� �� �� ������� ���� ���� � ���� ��� �� �� ������ ���� ����� <a href=\"client_case_form.php\" title=\"�� ��� ����� ���� �����\">���� ���</a> <br>
	���� ��� ���� ������� ��� ������ ��������
	</span><span class=\"style7\"><a href=\"index.php\" title=\"������ ��� ������ ��������\"> <span class=\"style8\"> ���� ���</span> </a></span></td>
  </tr></table>";
  mysql_close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>������� ������ ��</title>
<style type="text/css">
<!--
.style4 {
	color: #660066;
	font-size: 18;
	font-family: "MS Sans Serif";
}
.style5 {
	font-family: serif;
	font-weight: bold;
	color: #003300;
}
.style7 {font-weight: bold; font-family: serif;}
.style8 {color: #CC0000}
-->
</style>
</head>
<body>
<?PHP echo $case_list; ?>
</body>
</html>
