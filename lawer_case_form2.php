<?php
session_start();
 //this user is authorized one
 //so show him all cases
 if(!$_SESSION['auth']=='ok')
 {
 header("Location:index.php");
 }
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>إدخال بيانات القضية</title>
<style type="text/css">
<!--
.style30 {
	font-size: 18px;
	color: #660066;
}
.style38 {	font-size: 24px;
	color: #000066;
}
.style18 {font-size: 18; font-weight: bold; color: #000066; }
.style39 {font-size: 18px; color: #000066; }
.style45 {font-size: 18px}
.style46 {font-size: 18px; color: #000066; font-weight: bold; }
-->
</style>
</head>

<body>

<form name="form1" method="post" action="lawer_case_code.php">
  <div align="right">
    <table width="100%" bgcolor="#D5DFFF" >
      <tr align="center" bgcolor="#7A92DF">
        <td colspan="4"><span class="style38">&#1607;&#1584;&#1607; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1578;&#1610; &#1610;&#1580;&#1576; &#1573;&#1583;&#1582;&#1575;&#1604;&#1607;&#1575;</span></td>
      </tr>
      <tr bgcolor="#FFFFCC" class="style18">
        <td width="28%" align="right" bgcolor="#DDEEFF"><span class="style30"><span class="style18">
          <input name="year" type="text" id="place_out24" size="4" maxlength="4">
          <select name="month" id="select2">
            <option value="jan">1</option>
            <option value="feb">2</option>
            <option value="mar">3</option>
            <option value="apr">4</option>
            <option value="may">5</option>
            <option value="jun">6</option>
            <option value="jul">7</option>
            <option value="aug">8</option>
            <option value="sep">9</option>
            <option value="oct">10</option>
            <option value="nov">11</option>
            <option value="dec">12</option>
          </select>
          <select name="day1" id="select">
            <option value="a">1</option>
            <option value="b">2</option>
            <option value="c">3</option>
            <option value="d">4</option>
            <option value="e">5</option>
            <option value="f">6</option>
            <option value="g">7</option>
            <option value="h">8</option>
            <option value="i">9</option>
            <option value="j">10</option>
            <option value="k">11</option>
            <option value="l">12</option>
            <option value="m">13</option>
            <option value="n">14</option>
            <option value="o">15</option>
            <option value="p">16</option>
            <option value="q">17</option>
            <option value="r">18</option>
            <option value="s">19</option>
            <option value="t">20</option>
            <option value="u">21</option>
            <option value="v">23</option>
            <option value="w">24</option>
            <option value="y">25</option>
            <option value="x">26</option>
            <option value="z">27</option>
            <option value="aa">28</option>
            <option value="ab">29</option>
            <option value="ac">30</option>
            <option value="ad">31</option>
          </select>
        </span>
        </span></td>
        <td width="22%" align="right" bgcolor="#ABD5FF" class="style39"> &#1605;&#1608;&#1593;&#1583;&#1575;&#1604;&#1580;&#1604;&#1587;&#1577;&#1575;&#1604;&#1602;&#1575;&#1583;&#1605;&#1577; </td>
        <td width="29%" align="right" bgcolor="#DDEEFF"><input name="id_base" type="text" id="id_base" size="20"></td>
        <td width="21%" align="right" bgcolor="#ABD5FF"><span class="style39"> &#1585;&#1602;&#1605; &#1575;&#1604;&#1571;&#1587;&#1575;&#1587; </span></td>
      </tr>
      <tr align="right" bgcolor="#FFFFCC" class="style18">
        <td align="right" bgcolor="#DDEEFF" class="style30"><input name="kind_case" type="text" id="kind_case3" size="20"></td>
        <td bgcolor="#ABD5FF" class="style39">&#1606;&#1608;&#1593; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; </td>
        <td bgcolor="#DDEEFF"><input name="room_num" type="text" id="court_name4" size="20"></td>
        <td bgcolor="#ABD5FF" class="style39">&#1585;&#1602;&#1605; &#1575;&#1604;&#1594;&#1585;&#1601;&#1577; </td>
      </tr>
      <tr bgcolor="#FFFFCC" class="style18">
        <td align="right" bgcolor="#DDEEFF"><input name="money" type="text" id="money" size="20"></td>
        <td align="right" bgcolor="#ABD5FF" class="style39">&#1578;&#1603;&#1604;&#1601;&#1577;          &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; </td>
        <td align="right" bgcolor="#DDEEFF"><input name="id_proxy" type="text" id="id_proxy" size="20"></td>
        <td align="right" bgcolor="#ABD5FF" class="style39">&#1585;&#1602;&#1605; &#1575;&#1604;&#1608;&#1603;&#1575;&#1604;&#1577; </td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td width="28%" align="right" bgcolor="#DDEEFF" class="style18"><span class="style30"><span class="style18">
          <input name="year2" type="text" id="place_out24" size="4" maxlength="4">
          <select name="month2" id="select2">
            <option value="jan">1</option>
            <option value="feb">2</option>
            <option value="mar">3</option>
            <option value="apr">4</option>
            <option value="may">5</option>
            <option value="jun">6</option>
            <option value="jul">7</option>
            <option value="aug">8</option>
            <option value="sep">9</option>
            <option value="oct">10</option>
            <option value="nov">11</option>
            <option value="dec">12</option>
          </select>          
          <select name="day2" id="select">
            <option value="a">1</option>
            <option value="b">2</option>
            <option value="c">3</option>
            <option value="d">4</option>
            <option value="e">5</option>
            <option value="f">6</option>
            <option value="g">7</option>
            <option value="h">8</option>
            <option value="i">9</option>
            <option value="j">10</option>
            <option value="k">11</option>
            <option value="l">12</option>
            <option value="m">13</option>
            <option value="n">14</option>
            <option value="o">15</option>
            <option value="p">16</option>
            <option value="q">17</option>
            <option value="r">18</option>
            <option value="s">19</option>
            <option value="t">20</option>
            <option value="u">21</option>
            <option value="v">23</option>
            <option value="w">24</option>
            <option value="y">25</option>
            <option value="x">26</option>
            <option value="z">27</option>
            <option value="aa">28</option>
            <option value="ab">29</option>
            <option value="ac">30</option>
            <option value="ad">31</option>
          </select>
        </span> </span></td>
        <td align="right" bgcolor="#ABD5FF" class="style46">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1608;&#1603;&#1575;&#1604;&#1577; </td>
        <td align="right" bgcolor="#DDEEFF" class="style18"><input name="kind_proxy" type="text" id="kind_proxy" size="20"></td>
        <td align="right" bgcolor="#ABD5FF" class="style46">&#1606;&#1608;&#1593; &#1575;&#1604;&#1608;&#1603;&#1575;&#1604;&#1577; </td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td colspan="3" align="right" bgcolor="#DDEEFF" class="style18"><span class="style39">
        </span>          <input name="court_name" type="text" id="court_place2" size="40" maxlength="50"></td>
        <td align="right" bgcolor="#ABD5FF" class="style18"><span class="style39">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577;</span></td>
      </tr>
      <tr align="right" bgcolor="#7A92DF" class="style38">
        <td colspan="3" bgcolor="#DDEEFF"><span class="style45"></span>                                  <span class="style18"><span class="style39">
        <input name="court_place" type="text" id="reason" size="67">
</span></span></td>
        <td bgcolor="#ABD5FF" class="style39"><span class="style18">&#1605;&#1603;&#1575;&#1606; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></td>
      </tr>
      <tr align="right" bgcolor="#7A92DF" class="style38">
        <td colspan="3" bgcolor="#DDEEFF"><span class="style18"><span class="style39">
        <input name="reason" type="text" id="reason8" size="67">
</span></span></td>
        <td bgcolor="#ABD5FF" class="style39"><span class="style18">&#1587;&#1576;&#1576; &#1575;&#1604;&#1578;&#1575;&#1580;&#1610;&#1604; </span></td>
      </tr>
      <tr align="center" bgcolor="#7A92DF">
        <td colspan="4"><input name="id_new_case" type="hidden" id="id_new_case" value="<?PHP echo "$id_new_case";?>" >
        <input type="submit" name="Submit" value="&#1573;&#1585;&#1587;&#1575;&#1604;"></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
