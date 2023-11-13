<?PHP
session_start();
 //this user is authorized one
 //so show him all cases
 if(!$_SESSION['auth']=='ok')
 {
 header("Location:index.php");
 }
  include("db_connect.php"); 
 $sql="select *
      from cases
	   where id_lawer='$_SESSION[id]'
	   order by enemy_assest";
$result=mysql_query($sql);
$case_list= "<table width=\"100%\"  cellspacing=\"1\" cellpadding=\"1\" border=\"0\" bordercolor=\"#D5DFFF\" bgcolor=\"#D5DFFF\">
<tr>
    <td colspan=\"8\" align=\"center\" bgcolor=\"#7A92DF\" class=\"style4\">
    <p class=\"style1\">åĞå åí ßá ÇáŞÖÇíÇ ÇáãæßáÉ Åáíß¡æÅĞÇ ßäÊ ÊÑÛÈ ÇáÅØáÇÚ Úáì æÇÍÏÉ ãäåÇ Ãæ ÅÖÇİÉ ÈÚÖ ÇáÈíÇäÇÊ ÅáíåÇ ãÇ Úáíß åæ İŞØ ÇáäŞÑ Úáì æÇÍÏÉ ãäåÇ æĞáß ãä ÎáÇá ÇáÊŞÑ Úáì äæÚåÇ</p></td>
  </tr>
<tr align=\"center\" bgcolor=\"#E7C9CF\">
      <td width=\"10%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style1 style6 style7\"> ÑŞã ÇáŞÖíÉ </span></td>
	  <td width=\"15%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style1 style6 style7\">äæÚ ÇáŞÖíÉ</span> </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" ><span class=\"style1 style6 style7\">ÇÓã Çáãæßá</span> </td>
  	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" colspan=\"3\"  class=\"style1 style6 style7\">ÇÓã ãÍÇãí ÇáÎÕã</td>
    </tr>";
while($cases=mysql_fetch_array($result))
{
//id_client=$cases[Id_Client];
$sql1="select Client_name
      from client
	   where id_client='$cases[Id_Client]'";
$result1=mysql_query($sql1);
$client_name=mysql_fetch_array($result1);
$case_list.= "<tr  bgcolor=\"#E7C9CF\">
  <td width=\"10%\" align=\"center\" valign=\"top\" bgcolor=\"#D5DFFF\" class=\"style1 style6 style7\">$cases[Id_Case]</td>
  <td width=\"15%\" align=\"center\" bgcolor=\"#E8F2FF\"><span class=\"style1 style6 style7\"> <a href=\"old_case_choose_lawer.php?id_case=$cases[Id_Case]\">$cases[Kind_Case]</span></a></td>
  <td width=\"20%\" align=\"center\" valign=\"top\" bgcolor=\"#E8F2FF\" class=\"style1 style6 style7\">$client_name[Client_name]</td>
   <td width=\"20%\" align=\"center\" valign=\"top\" bgcolor=\"#E8F2FF\" class=\"style1 style6 style7\">$cases[enemy_assest]</td>
  </tr>";
}//end while fetch array
 $case_list.="<tr>
    <td colspan=\"8\" align=\"center\" bgcolor=\"#ffffff\" class=\"style4\">
    <p class=\"style1\"></p></td>
  </tr></table>";

$sql="select *
       from  new_case
	   where id_lawer='$_SESSION[id]' ";
$result=mysql_query($sql);
$new_case_list= "<table width=\"80%\"  cellspacing=\"1\" cellpadding=\"1\" border=\"0\" bordercolor=\"#D5DFFF\" bgcolor=\"#D5DFFF\">
<tr>
    <td colspan=\"8\" align=\"center\" bgcolor=\"#7A92DF\" class=\"style4\"><p class=\"style1\"> åĞå åí ÇáŞÖÇíÇ ÇáÌÏíÏÉ ÇáãæßáÉ Åáíß æÇáÊí íÌÈ ÇáÅØáÇÚ ÚáíåÇ İí ÃŞÑÈ æŞÊ ããßä¡æÇáÑÏ Úáì ÇáŞÖíÉ ÇáÎÇÕÉ ÈÇáãæßá ÇáãÈíä ÇÓãå ãÚ ÇáŞÖíÉ ãä ÎáÇá ÇáÈÑíÏ ÇáÅáßÊÑæäí Ãæ Úä ØÑíŞ ÇáåÇÊİ ÇáãÑİŞ ãÚ ÇáŞÖíÉ¡æãáÁ ÇáÈíÇäÇÊ ÇáãØáæÈÉ</td>
  </tr>
<tr  align=\"center\" bgcolor=\"#E7C9CF\">
      <td width=\"10%\" align=\"center\" valign=\"top\" bgcolor=\"#ABD5FF\" class=\"style1 style6 style7\">ÇáÑŞã ÇáÊÓáÓáí </td>
	  <td width=\"15%\" align=\"center\" bgcolor=\"#ABD5FF\" colspan=\"3\"  class=\"style1 style6 style7\">ÇÓã ÇáŞÖíÉ </td>
	  <td width=\"20%\" align=\"center\" bgcolor=\"#ABD5FF\" colspan=\"3\"  class=\"style1 style6 style7\">ÇÓã Çáãæßá </td>
    </tr>";
$i=1;	
while($row=mysql_fetch_array($result))	
{
if($row[value]=='true')
{
$sql2="DELETE from new_case
       where id_new_case=$row[id_new_case]  ";
$result2=mysql_query($sql2);

}
else
{
//$id_c=$row[Id_Client];
$sql1="select *
      from client
	   where id_client='$row[id_client]'";
$result1=mysql_query($sql1);
$client_name1=mysql_fetch_array($result1);

 $new_case_list.= "<tr align=\"center\" bgcolor=\"#E7C9CF\">
  <td width=\"10%\" align=\"center\" valign=\"top\" bgcolor=\"#D5DFFF\" class=\"style1 style6 style7\">$i</td>
  <td width=\"15%\" align=\"center\" bgcolor=\"#E8F2FF\" colspan=\"3\" class=\"style1 style6 style7\"> <a href=\"lawer_case_form_client.php?id_new_case=$row[id_new_case]?\">ŞÖíÉ ÌÏíÏÉ</a></td>
  <td width=\"20%\" align=\"center\" valign=\"top\" bgcolor=\"#E8F2FF\" colspan=\"3\" class=\"style1 style6 style7\">$client_name1[Client_name]</td>
  </tr>";
  $i++; 
  }
}
 $new_case_list.=" <tr>
    <td colspan=\"8\" align=\"center\" bgcolor=\"#7A92DF\" class=\"style1\"><span class=\"style5\"> åĞå åí ÇáÈíÇäÇÊ Úä ßá ÇáŞÖÇíÇ ÇáãæßáÉ Åáíß   <br>
	æÅĞÇ ßäÊ ÊÑÛÈ ÈÇáÚæÏÉ Åáì ÇáÕİÍÉ ÇáÑÆíÓíÉ
	</span><span class=\"style7\"><a href=\"index.php\" title=\"ÇáÚæÏÉ Åáì ÇáÕİÍÉ ÇáÑÆíÓíÉ\"> <span class=\"style8\"> ÇÖÛØ åäÇ</span> </a></span></td>
  </tr></table>";

mysql_close();
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>ŞÇÆãÉ ÇáŞÖÇíÇ</title>
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
</head>

<body>
<p align="center">
  <?php  echo $case_list."<br>";?>
  <?php echo $new_case_list; ?>
  <a href="index_lawer_clientname.php" title="ÇáÊÑÊíÈ ÍÓÈ ÇÓã Çáãæßá">ÇáÊÑÊíÈ ÍÓÈ ÇÓã Çáãæßá</a></p>
<p align="center">
  <a href="index_lawer_lawername.php" title="ÇáÊÑÊíÈ ÍÓÈ  äæÚ ÇáŞÖíÉ">ÇáÊÑÊíÈ ÍÓÈ äæÚ ÇáŞÖíÉ</a></p>
</body>
</html>
