<?php
session_start();
if(!$_SESSION['auth']=='ok')
{
header("Location:index.php");
}
else
{
include("date_function.php");
include("db_connect.php");
if(($_POST[year]=='')||($_POST[kind_case]=='')||($_POST[id_base]=='')
||($_POST[room_num]=='')||($_POST[court_name]=='')||($_POST[court_place]=='')
||($_POST[reason]=='')||($_POST[money]=='')||($_POST[id_proxy]=='')
||($_POST[kind_proxy]=='')||($_POST[year2]==''))
{
header("Location:lawer_case_code_error.php");
}
else
{
$sql="select id_proxy
      from proxy
	   where(id_proxy='$_POST[id_proxy]')";
$result=mysql_query($sql);	   
if($row=mysql_num_rows($result)==1)   
{
header("Location:change_proxy_error.php");
}

$sql="select *
	   from new_case
		where id_new_case='$_POST[id_new_case]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);	
$d=date_function($_POST[day1],$_POST[month]);
$session_date="$_POST[year]"."-"."$d";	
$d1=date_function($_POST[day2],$_POST[month2]);
$proxy_date="$_POST[year2]"."-"."$d1";	  	   	  
$sql1="INSERT INTO `cases` (`Id_Case`, `Id_Client`, `id_lawer`, 
        `Client_adj`, `enemy_name`, `enemy_adj`, `enemy_assest`, 
        `Kind_Case`, `Id_Base`, `Room_Num`, `Court_name`, `Court_place`, 
        `Reason`, `Session_date`, `Money`, `Case_Subject`) 
    VALUES ('','$row[id_client]','$_SESSION[id]','$row[Client_adj]',
      '$row[enemy_name]','$row[enemy_adj]','$row[enemy_assest]',
	  '$_POST[kind_case]','$_POST[id_base]','$_POST[room_num]',
	  '$_POST[court_name]','$_POST[court_place]','$_POST[reason]',
	  '$session_date','$_POST[money]','$row[Case_Subject]')";
$result1=mysql_query($sql1);
$sql2=" UPDATE `new_case` SET `value` = 'true' WHERE `id_new_case` =' $_POST[id_new_case]'";
$result2=mysql_query($sql2);
$sql3="INSERT INTO `proxy` (`Id_Proxy`, `Id_Client`, `Kind_Proxy`, `Proxy_Date`) 
         VALUES ('$_POST[id_proxy]','$row[id_client]','$_POST[kind_proxy]','$proxy_date')";
$result3=mysql_query($sql3);
$sql4="delete from new_case where value=true AND id_new_case='$_POST[id_new_case]'";
$result4=mysql_query($sql4);
}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>»Ì«‰«   «·ﬁ÷Ì…</title>
<style type="text/css">
<!--
.style30 {
	font-size: 18px;
	color: #660066;
}
.style39 {font-size: 24px; color: #000066; }
.style40 {font-size: 18px; color: #0000CC; }
.style41 {color: #990000}
.style43 {font-size: 18px; color: #000066; }
.style44 {color: #000066}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="client_case_code.php">
  <div align="right">  
    <table width="100%" bgcolor="#D5DFFF" >
      <tr align="center" bgcolor="#7A92DF">
        <td colspan="4" class="style39"> &#1607;&#1584;&#1607; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1578;&#1610; &#1578;&#1605; &#1573;&#1583;&#1582;&#1575;&#1604;&#1607;&#1575;</td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td align="right" bgcolor="#EBF5FF"><span class="style30"><span class="style43">
          <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$_POST[id_new_case]'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Client_adj];?>
        </span>
        </span> </td>
        <td width="22%" align="right" bgcolor="#ABD5FF" class="style43">’›… «·„Êﬂ· </td>
        <td align="right" bgcolor="#EBF5FF"><span class="style30"><span class="style43">
          <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$_POST[id_new_case]'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  $sql1="select *
	         from client
			  where id_client='$row[id_client]'";
	 $result1=mysql_query($sql1);
	 $row1=mysql_fetch_array($result1);		  
	  echo $row1[Client_name];
	  ?>
        </span></span></td>
        <td width="21%" align="right" bgcolor="#ABD5FF" class="style43">«”„ «·„Êﬂ· </td>
      </tr>
      <tr align="right" bgcolor="#FFFFCC">
        <td align="right" bgcolor="#EBF5FF" class="style30"><span class="style43"><?php echo $row1[Home_Phone];?>
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43">Â« › «·„‰“· </td>
        <td align="right" bgcolor="#EBF5FF"><span class="style30"><span class="style43"><?php echo $row1[Work_Phone];?>
        </span></span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43"> Â« › «·⁄„· </td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td align="right" bgcolor="#EBF5FF"><span class="style43">
          <?php  echo "$_POST[room_num]";?>
</span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43">—ﬁ„ «·€—›… </td>
        <td align="right" bgcolor="#EBF5FF"><span class="style30"><span class="style43"><a href="mailto:<?php echo $row1['email'];?>"><?php echo $row1[email];?></a>
        </span>
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43">«·»—Ìœ «·≈·ﬂ —Ê‰Ì</td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td align="right" bgcolor="#EBF5FF" class="style43"><span class="style43">
          <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$_POST[id_new_case]'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_adj];?>
        
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43">’›… «·Œ’„ </td>
        <td align="right" bgcolor="#EBF5FF" class="style43"><span class="style43">
          <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$_POST[id_new_case]'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_name];?>
        
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43"><span class="style44">«”„ «·Œ’„ </span></td>
      </tr>
      <tr align="right" bgcolor="#BEE684" class="style30">
        <td bgcolor="#EBF5FF"><p class="style43">
          <?php  echo "$_POST[id_base]";?>
          </p>            </td>
        <td bgcolor="#ABD5FF" class="style40"><span class="style43"> &#1585;&#1602;&#1605; &#1575;&#1604;&#1571;&#1587;&#1575;&#1587; </span></td>
        <td bgcolor="#EBF5FF" class="style43"><span class="style43">
          <?php  echo "$_POST[kind_case]";?>
</span></td>
        <td bgcolor="#ABD5FF" class="style44"><span class="style43">&#1606;&#1608;&#1593; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; </span></td>
      </tr>
      <tr align="right" bgcolor="#BEE684" class="style30">
        <td bgcolor="#EBF5FF" class="style43"><span class="style43">
          <?php  echo "$session_date";?>
        </span></td>
        <td bgcolor="#ABD5FF" class="style40"><span class="style44">&#1605;&#1608;&#1593;&#1583; &#1575;&#1604;&#1580;&#1604;&#1587;&#1577; &#1575;&#1604;&#1602;&#1575;&#1583;&#1605;&#1577; </span></td>
        <td bgcolor="#EBF5FF" class="style43"><span class="style43">
          <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$_POST[id_new_case]'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_assest];?>
</span></td>
        <td bgcolor="#ABD5FF" class="style44"><span class="style43">ÊﬂÌ· «·Œ’„ </span></td>
      </tr>
      <tr align="center" bgcolor="#BEE684">
        <td align="right" bgcolor="#EBF5FF" class="style43"><span class="style43"><?php  echo "$proxy_date";?>
        
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43"> «—ÌŒ «·Êﬂ«·… </td>
        <td align="right" bgcolor="#EBF5FF" class="style44">  <span class="style43">
          <?php  echo "$_POST[id_proxy]";?>
        </span> </td>
        <td align="right" bgcolor="#ABD5FF" class="style43"><span class="style44">—ﬁ„ «·Êﬂ«·… </span></td>
      </tr>
      <tr align="center" bgcolor="#BEE684">
        <td align="right" bgcolor="#EBF5FF" class="style44"><span class="style43">
          <?php  echo "$_POST[money]";?>
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style44"><span class="style43">&#1578;&#1603;&#1604;&#1601;&#1577; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; </span></td>
        <td align="right" bgcolor="#EBF5FF" class="style43"><?php  echo "$_POST[kind_proxy]";?></td>
        <td align="right" bgcolor="#ABD5FF" class="style43"><span class="style44">‰Ê⁄ «·Êﬂ«·…</span></td>
      </tr>
      <tr align="center" bgcolor="#BEE684">
        <td colspan="3" align="right" bgcolor="#EBF5FF" class="style44"><span class="style43">
          <?php  echo "$_POST[court_name]";?>
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style40"><span class="style44">«”„ &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577;</span></td>
      </tr>
      <tr align="center" bgcolor="#BEE684">
        <td colspan="3" align="right" bgcolor="#EBF5FF" class="style44"><span class="style30"><span class="style43">
          <?php  echo "$_POST[court_place]";?>
        </span></span></td>
        <td align="right" bgcolor="#ABD5FF" class="style40"><span class="style43">&#1605;&#1603;&#1575;‰ «·„Õﬂ„… </span></td>
      </tr>
      <tr align="center" bgcolor="#BEE684">
        <td colspan="3" align="right" bgcolor="#EBF5FF" class="style30"><span class="style43">
          <?php  echo "$_POST[reason]";?>
        <span class="style44">        </span>        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style40"><span class="style43">&#1587;&#1576;&#1576; &#1575;&#1604;&#1578;&#1575;&#1580;&#1610;&#1604; </span></td>
      </tr>
      <tr align="center" bgcolor="#BEE684">
        <td colspan="3" align="right" bgcolor="#EBF5FF" class="style30"><span class="style43">
          <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$_POST[id_new_case]'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Case_Subject];
	
?>
        </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style43">„Ê÷Ê⁄ «·œ⁄ÊÏ </td>
      </tr>
      <tr align="center" bgcolor="#7A92DF">
        <td colspan="4"><p class="style43">.·ﬁœ  „ Õ›Ÿ Â–Â «·»Ì«‰«  ›Ì «·ÃœÊ· «·Œ«’ »Â–Â «·ﬁ÷Ì… 
</p>
        <p class="style40"><a href="index_lawer.php" title="«·—ÃÊ⁄ ≈·Ï «·’›Õ… «·Œ«’… »ﬂ" class="style41">«‰ﬁ— Â‰« ··⁄Êœ… ≈·Ï «·Ê«ÃÂ… «·Œ«’… »ﬂ </a></p></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>