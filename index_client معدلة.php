<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="rtl">
<?PHP
include("db_connect.php");
$id_num="id_client";
$sql="select $id_num,username,password
from client
where username='$_POST[username]'
and password='$_POST[password]'";
$result=mysql_query($sql);
if($row=mysql_num_rows($result)==1)
{
 $auth="ok";
 $auth_user=$_POST['username'];
 $adjective=$_POST['adjective'];
 $id=mysql_result($result,0,$id_num);


 //this user is authorized one
 //so show him all cases
 include("db_connect.php"); 
 $sql="select id_case,kind_case,enemy_name,enemy_adj,id_lawer
       from  cases
	   where id_client='$id' ";
$result=mysql_query($sql);

$case_list= "<table width=\"100%\"  cellspacing=\"1\" cellpadding=\"1\" border=\"0\" bordercolor=\"#D5DFFF\" bgcolor=\"#D5DFFF\">
 <tr>
    <td colspan=\"8\" align=\"center\" bgcolor=\"#7A92DF\" class=\"style4\"><p class=\"style5\"> åĞå åí ÇáŞÖÇíÇ ÇáÎÇÕÉ Èß ÈÇáÅÖÇİÉ Åáì ÇÓã ÇáÎÕã æ ÇÓã ÇáãÍÇãí ¡æÅĞÇ ßäÊ ÊÑíÏ ÇáãÒíÏ ãä ÇáÊİÇÕíá ãÇ Úáíß åæ İŞØ </p>
    <p class=\"style5\">ÇÎÊíÇÑ ÇáŞÖíÉ ÇáÊí ÊÑÛÈ ÈÑÄíÉ ÇáÊİÇÕíá ÚäåÇ Ãä ÊäŞÑ Úáì ÇáŞÖíÉ</p></td>
  </tr>
<tr align=\"center\" bgcolor=\"#E7C9CF\">
      <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style20 style6 style7\"> äæÚ ÇáŞÖíÉ </span></td>
	  <td width=\"30%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style14 style6 style7\">ÇÓã ÇáÎÕã</span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style14 style6 style7\">ÕİÉ ÇáÎÕã</span> </td>
  	  <td width=\"30%\" align=\"center\" bgcolor=\"#ABD5FF\" colspan=\"3\"  class=\"style20 style6 style7\">ÇÓã ÇáãÍÇãí </td>
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
    <td colspan=\"8\" align=\"center\" bgcolor=\"#7A92DF\" class=\"style4\"><span class=\"style5\"> åĞå åí ÇáÈíÇäÇÊ Úä ßá ÇáŞÖÇíÇ ÇáÊí ÊÎÕß ¡ æÅĞÇ ßäÊ ÊÑ ÛÈ ÈÊÓÌíá ŞÖíÉ ÌÏíÏÉ 
<form name=\"clientpage\" metho=\"get\" action=\"client_case_form.php\">
<input type=\"hidden\" name=\"id\" value=\"$id\">
<input type=\"hidden\" name=\"auth\" value=\"$auth\">
<input type=\"hidden\" name=\"auth_user\" value=\"$auth_user\">
<input type=\"hidden\" name=\"adjective\" value=\"$adjective\">
<input type=\"submit\" value=\"ÇÖÛØ åäÇ\">
</form>
<br>
	æÅĞÇ ßäÊ ÊÑÛÈ ÈÇáÚæÏÉ Åáì ÇáÕİÍÉ ÇáÑÆíÓíÉ
	</span><span class=\"style7\"><a href=\"index.php\" title=\"ÇáÚæÏÉ Åáì ÇáÕİÍÉ ÇáÑÆíÓíÉ\"> <span class=\"style8\"> ÇÖÛØ åäÇ</span> </a></span></td>
  </tr></table>";
  mysql_close();
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>ÇáŞÖÇíÇ ÇáÎÇÕÉ Èß</title>
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

<?PHP
echo '<font color="red" size="4" face="TimesNewRoman"><b>
 ÃåáÇğ Èß:'.$auth_user.'</b></font>';
echo $case_list; ?>
</body>
</html>
<?php }
else
{
 echo "<br>ãä İÖáß ÃÏÎá ÇÓã ÇáãÓÊÎÏã æßáãÉ ÇáÓÑ ÇáãÑÎÕÊíä<br>";
} ?>
