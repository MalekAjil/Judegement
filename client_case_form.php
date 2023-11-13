<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>إدخال بيانات قضية</title>
<style type="text/css">
<!--
.style1 {
	color: #000066;
	font-size: 24px;
}
.style20 {
	font-size: 16px;
	color: #000000;
	font-weight: bold;
}
.style21 {color: #000066}
.style22 {font-size: 18px; color: #000066; }
-->
</style>
</head>

<body>
<form name="form1" method="post" action="client_case_code.php">
  <table width="100%" border="0" bordercolor="#FFFFCC" bgcolor="#D5DFFF" >
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="4"><span class="style1">&#1575;&#1604;&#1585;&#1580;&#1575;&#1569; &#1573;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1578;&#1575;&#1604;&#1610;&#1577; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td width="39%" align="right" valign="top" bgcolor="#E8F2FF" class="style20 style6 style7"><span class="style21">
      <input name="enemy_name" type="text" id="enemy_name2" size="20" maxlength="100">
</span></td>
      <td width="20%" align="right" valign="top" bgcolor="#ABD5FF" class="style20 style6 style7"><span class="style22">&#1575;&#1587;&#1605; &#1575;&#1604;&#1582;&#1589;&#1605; </span></td>
      <td width="19%" align="right" bgcolor="#E8F2FF"><span class="style21">
      <select name="lawer_name1" id="lawer_name1">
<?php

include("db_connect.php");
$sql="select * 
      from lawer
	  order by  section";
$result=mysql_query($sql,$conn);
	//echo"hi"; 
/*$num=mysql_num_rows($result);
for($i=0;$i<=$num-1;$i++)	
{
$rows=mysql_result($result,$i,"lawer_name");*/
while($rows=mysql_fetch_array($result))
{
echo'<option>'.$rows["id_lawer"].".".$rows["lawer_name"]."_".$rows["section"].'</option>';
$select_lawer=$rows["id_lawer"].".".$rows["lawer_name"]."_".$rows["section"];
$sql1="UPDATE `lawer` SET `select_lawer` ='$select_lawer'
        WHERE id_lawer= '$rows[id_lawer]'";
$result1=mysql_query($sql1,$conn);
}
	mysql_close();
?>
      </select>
</span></td>
      <td width="22%" align="right" bgcolor="#ABD5FF"><span class="style22">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1575;&#1605;&#1610; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td align="right" bgcolor="#E8F2FF" class="style20 style6 style7"><span class="style21">
      <input name="enemy_assest" type="text" id="enemy_assest3" size="20" maxlength="100">
      </span> </td>
      <td align="center" bgcolor="#ABD5FF" class="style20 style6 style7"><span class="style22">&#1608;&#1603;&#1610;&#1604; &#1575;&#1604;&#1582;&#1589;&#1605;</span></td>
      <td align="right" bgcolor="#E8F2FF"><span class="style20 style6 style7"><span class="style21">
        <select name="client_adj" id="select3">
          <option value="pretended">مدعي</option>
          <option value="respondent">&#1605;&#1583;&#1593;&#1609; &#1593;&#1604;&#1610;&#1607;</option>
        </select>
      </span></span></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style20 style6 style7"><span class="style22">&#1589;&#1601;&#1577; &#1575;&#1604;&#1605;&#1608;&#1603;&#1604; </span></span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td colspan="3" align="right" valign="middle" bgcolor="#E8F2FF" class="style20 style6 style7"><?php echo $enemy_name;?><span class="style21">
      </span>      </td>
      <td align="right" bgcolor="#ABD5FF"><span class="style22">&#1605;&#1608;&#1590;&#1608;&#1593; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; </span></td>
    </tr>
    <tr bgcolor="#E8F2FF">
      <td height="20%" colspan="4" align="right" class="style1"><span class="style21">
        <textarea name="case_subject" cols="75" rows="6" id="case_subject" class="style2"></textarea>
      </span></td>
    </tr>
    <tr bgcolor="#7A92DF">
      <td height="20%" colspan="4" align="center" class="style20"><input type="submit" name="Submit" value="&#1573;&#1585;&#1587;&#1575;&#1604;"></td>
    </tr>
  </table>
</form>
</body>
</html>
