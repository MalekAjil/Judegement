<?PHP

include("date_function.php");
include("db_connect.php");
if (($_POST[username]=='')||($_POST[password]=='')||($_POST[client_name]=='')
||($_POST[father_client]=='')||($_POST[mother_client]=='')||($_POST[citizen]=='')
||($_POST[home_phone]=='')||($_POST[home_address]=='')||($_POST[work_address]=='')
||($_POST[place_out]=='')||($_POST[year]=='')||($_POST[personal_num]=='')
||($_POST[digit_num]=='')||($_POST[job]=='')||($_POST[email]==''))
{
header("location:register_client_error.php");
}
else
{
$sql="select username,password
      from client
	   where((username='$_POST[username]')and(password='$_POST[password]'))";
$result=mysql_query($sql);	   
if($row=mysql_num_rows($result)==1)   
{
header("Location:change_index_client.php");
}
/*if(!$_POST['client_name'] || !$_POST['home_phone'] || !$_POST['email'])
{
 header("Location:register_form.htm");
}
//all data is available so sort them in database*/
else
{
$d=date_function($_POST[day],$_POST[month]);
$date_out="$_POST[year]"."-"."$d";
$d_birth=date_function($_POST[day_birth],$_POST[month_birth]);
$birth_client="$year_birth"."-"."$d_birth";
 $sql="INSERT INTO `client` ( `Client_name`, `Father_Client`, `Mother_Client`, 
                   `Birth_Client`, `Citizen`, `username`, `password`, `Personal_Num`, `Place_Out`, `Date_Out`, 
                   `Digit_Num`, `Job`, `Work_Phone`, `Home_Phone`, `Work_Address`, `Home_Address`, `email`)
       values('$_POST[client_name]','$_POST[father_client]','$_POST[mother_client]',
	          '$birth_client','$_POST[citizen]','$_POST[username]','$_POST[password]',
			  '$_POST[personal_num]','$_POST[place_out]','$date_out',
			  '$_POST[digit_num]','$_POST[job]','$_POST[work_phone]',
			  '$_POST[home_phone]','$_POST[work_address]','$_POST[home_address]',
			  '$_POST[email]')";
 $result=mysql_query($sql,$conn);

}  
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title> „ «· ”ÃÌ· ›Ì «·„Êﬁ⁄</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<style type="text/css">
<!--
.style18 {font-size: 18; font-weight: bold; color: #660066; }
.style2 {font-family: Arial;
	font-size: 24px;
	color: #7F0000;
}
.style21 {color: #660066; font-size: 18px; }
.style23 {font-size: 18px; font-weight: bold; color: #660066; }
.style24 {color: #003333}
.style25 {color: #006666}
-->
</style>
</head>

<body background="images/indexp.jpg">

  <table width="100%" height="100%" cellpadding="0"  cellspacing="0">
    <tr bgcolor="#CCCCFF">
      <td colspan="4" align="right"><div align="center"><span class="style2">:·ﬁœ  „  &#1573;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1578;&#1575;&#1604;&#1610;&#1577;</span></div></td>
    </tr>
    <tr>
      <td width="30%" align="right"><span class="style18">
      <?php echo "$_POST[personal_num]" ?>    </span></td>
      <td width="21%" align="right"><span class="style18">:&#1585;&#1602;&#1605; &#1575;&#1604;&#1607;&#1608;&#1610;&#1577; </span></td>
      <td width="27%" align="right"><div align="right"><span class="style18">
      <?php echo "$_POST[username]" ?>    </span></div></td>
      <td width="22%" align="right"><span class="style18">:&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605;</span></td>
    </tr>
    <tr>
      <td align="right"><span class="style18">
      <?php echo "$_POST[place_out]" ?>    </span></td>
      <td align="right"><span class="style18">:&#1575;&#1604;&#1580;&#1607;&#1577; &#1575;&#1604;&#1578;&#1610; &#1571;&#1589;&#1583;&#1585;&#1578;&#1607;&#1575;</span></td>
      <td align="right"><span class="style18">
      <?php echo "$_POST[password]" ?>    </span></td>
      <td align="right"><span class="style18">:&#1603;&#1604;&#1605;&#1577; &#1575;&#1604;&#1587;&#1585; </span></td>
    </tr>
    <tr>
      <td align="right"><span class="style18">
      <?php   echo "$date_out"; ?>    </span></td>
      <td align="right"><span class="style18"> :&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1589;&#1583;&#1608;&#1585; </span></td>
      <td align="right"><span class="style18">
      <?php echo "$_POST[client_name]" ?>    </span></td>
      <td align="right"><span class="style18">:&#1575;&#1604;&#1573;&#1587;&#1605; &#1608;&#1575;&#1604;&#1603;&#1606;&#1610;&#1577;</span></td>
    </tr>
    <tr>
      <td align="right"><span class="style18">
      <?php echo "$_POST[digit_num]" ?>    </span></td>
      <td align="right"><span class="style18">:&#1585;&#1602;&#1605; &#1575;&#1604;&#1582;&#1575;&#1606;&#1577; </span></td>
      <td align="right"><span class="style18">
      <?php echo "$_POST[father_client]" ?>    </span></td>
      <td align="right"><span class="style18">:&#1575;&#1587;&#1605; &#1575;&#1604;&#1571;&#1576; </span></td>
    </tr>
    <tr>
      <td align="right"  class="style18"><span class="style21"><?php echo "$_POST[job]" ?></span> </td>
      <td align="right"><span class="style18">:&#1575;&#1604;&#1593;&#1605;&#1604;</span></td>
      <td align="right" ><span class="style18">
      <?php echo "$_POST[mother_client]" ?>    </span></td>
      <td align="right"><span class="style18">:&#1575;&#1587;&#1605; &#1575;&#1604;&#1571;&#1605; </span></td>
    </tr>
    <tr>
      <td align="right" class="style18"><span class="style21"><?php echo "$_POST[work_phone]" ?></span> </td>
      <td align="right"><span class="style18">:&#1607;&#1575;&#1578;&#1601; &#1575;&#1604;&#1593;&#1605;&#1604; </span></td>
      <td align="right"><span class="style18">
      <?php echo "$_POST[citizen]" ?>    </span></td>
      <td align="right"><span class="style18">:&#1575;&#1604;&#1580;&#1606;&#1587;&#1610;&#1577;</span></td>
    </tr>
    <tr>
      <td align="right" class="style18"><span class="style21"><?php echo "$_POST[home_phone]" ?></span> </td>
      <td align="right"><span class="style18">:&#1607;&#1575;&#1578;&#1601; &#1575;&#1604;&#1605;&#1606;&#1586;&#1604; </span></td>
      <td align="right" class="style18"><span class="style23">
      <?php echo "$birth_client" ?>    </span></td>
      <td align="right"><span class="style18">:&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1605;&#1610;&#1604;&#1575;&#1583; </span></td>
    </tr>
    <tr>
      <td align="right" class="style18"><span class="style21"><?php echo "$_POST[email]" ?></span> </td>
      <td align="right"><span class="style18">:&#1575;&#1604;&#1576;&#1585;&#1610;&#1583; &#1575;&#1604;&#1573;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1610; </span></td>
      <td align="right" class="style18"><span class="style21"><?php echo "„” Œœ„" ?></span> </td>
      <td align="right"  class="style18">:&#1575;&#1604;&#1589;&#1601;&#1577;</td>
    </tr>
    <tr>
      <td colspan="3" align="right" class="style18"><span class="style21"><?php echo "$_POST[home_address]" ?></span> </td>
      <td align="right"><span class="style18">:&#1593;&#1606;&#1608;&#1575;&#1606; &#1575;&#1604;&#1573;&#1602;&#1575;&#1605;&#1577; </span></td>
    </tr>
    <tr>
      <td height="28" colspan="3" align="right" class="style18"><span class="style21"><?php echo "$_POST[work_address]" ?></span> </td>
      <td align="right"><span class="style18">:&#1593;&#1606;&#1608;&#1575;&#1606; &#1575;&#1604;&#1593;&#1605;&#1604; </span></td>
    </tr>
    <tr bgcolor="#CCCCFF">
      <td colspan="4" align="right" class="style18"><p align="center">·ﬁœ  „  ⁄„·Ì… «· ”ÃÌ· »‰Ã«Õ Ê√’»Õ  „‘ —ﬂ ÃœÌœ ›Ì „Êﬁ⁄‰«°√Â·« Ê”Â·« »ﬂ ›Ì „Êﬁ⁄‰« °„ „‰Ì‰ √‰ Ì·»Ì ÿ·»« ﬂ ÊÌ‰«· —÷«ﬂ°Ê«·¬‰ Ì„ﬂ‰ﬂ «·œŒÊ· »≈”„ «·„” Œœ„ Â–« Êﬂ·„… «·”— «·„Ê«›ﬁ… Ê«·„ÊÃÊœ… √⁄·«Â
<br>
 <span class="style18 style24"><a href="index.php" title="«·⁄Êœ… ≈·Ï «·’›Õ… «·—∆Ì”Ì…" class="style25">
«‰ﬁ— Â‰« ··⁄Êœ… ≈·Ï «·’›Õ… «·—∆Ì”Ì… </a></span></p></td>
    </tr>
    <tr bgcolor="#E7C9CF">    </tr>
</table>
</body>
</html>
