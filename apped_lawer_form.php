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
<title>إدخال بيانات الاستئناف</title>
<style type="text/css">
<!--
.style2 {	font-size: 24px;
	color: #000066;
}
.style5 {font-size: 18px; color: #000066; }
.style6 {color: #000066}
.style7 {font-size: 18px}
-->
</style>
</head>

<body>

<form action="  apped_lawer_register.php" method="post">
  <table width="100%" bgcolor="#D5DFFF" >
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="4"><span class="style2">&#1573;&#1583;&#1582;&#1575;&#1604; &#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1573;&#1587;&#1578;&#1574;&#1606;&#1575;&#1601; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style2">
      <td align="right" bgcolor="#DDEEFF"><input name="id_base" type="text" id="id_base" size="20" maxlength="10"></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1593;&#1575;&#1605; </span></td>
      <td width="32%" bgcolor="#DDEEFF"><div align="right" class="style6">
          <input name="id_apped" type="text" id="id_apped" size="20" maxlength="11">
      </div></td>
      <td width="16%" align="right" bgcolor="#ABD5FF"><span class="style5">&#1585;&#1602;&#1605; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585; &#1575;&#1604;&#1605;&#1587;&#1578;&#1571;&#1606;&#1601; </span></td>
    </tr>
	
    <tr bgcolor="#FFFFCC" class="style2">
      <td align="center" bgcolor="#DDEEFF"><div align="right" class="style6"> <span class="style18">
          <input name="year_session" type="text" id="year_session" size="4" maxlength="4">
          <select name="month_session" id="month_session">
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
          <select name="day_session" id="day_session">
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
      </span></div></td>
      <td width="24%" bgcolor="#ABD5FF"><div align="right" class="style6"><span class="style7">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1580;&#1604;&#1587;&#1577; </span></div></td>
      <td align="center" bgcolor="#DDEEFF"><div align="right" class="style6"> <span class="style18">
          <input name="year_apped" type="text" id="year_apped" size="4" maxlength="4">
          <select name="month_apped" id="month_apped">
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
          <select name="day_apped" id="day_apped">
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
      </span></div></td>
      <td align="right" bgcolor="#ABD5FF" class="style5">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1573;&#1587;&#1578;&#1574;&#1606;&#1575;&#1601;</td>
    </tr>
	
    <tr bgcolor="#FFFFCC" class="style2">
      <td bgcolor="#DDEEFF"><div align="right" class="style6">
          <input name="id_decide" type="text" id="id_decide" size="20" maxlength="11">
      </div></td>
      <td align="right" bgcolor="#ABD5FF"><div align="right" class="style6"><span class="style7">&#1585;&#1602;&#1605; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585;</span></div></td>
      <td bgcolor="#DDEEFF"><div align="right" class="style6">
          <input name="id_apped_base" type="text" id="id_apped_base" size="20" maxlength="20">
      </div></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style5">&#1585;&#1602;&#1605; &#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1573;&#1587;&#1578;&#1574;&#1606;&#1575;&#1601; </span></td>
    </tr>
    <tr align="center" bgcolor="#BEE684" class="style2">
      <td bgcolor="#DDEEFF"><div align="right" class="style6"> <span class="style18">
          <input name="year_decide" type="text" id="year_decide" size="4" maxlength="4">
          <select name="month_decide" id="month_decide">
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
          <select name="day_decide" id="day_decide">
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
      </span></div></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style5">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1602;&#1585;&#1575;&#1585; </span></td>
      <td align="right" bgcolor="#DDEEFF"><input name="court_name" type="text" id="court_name" size="20" maxlength="30"></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style5">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></td>
    </tr>
    <tr align="center" bgcolor="#BEE684"> </tr>
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="4"><input name="id_case" type="hidden" id="id_case" value="<?php echo "$id_case";?>">
      <input type="submit" name="Submit" value="&#1573;&#1585;&#1587;&#1575;&#1604;"></td>
    </tr>
  </table>
</form>
</body>
</html>
