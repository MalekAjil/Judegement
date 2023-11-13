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
<title>معلومات عن القضية</title>
<style type="text/css">
<!--
.style14 {
	color: #000066;
	font-size: 24px;
}
.style35 {font-size: 18px; color: #660066; }
.style42 {
	color: #B900B9;
	font-size: 18px;
}
.style43 {color: #660066}
.style44 {font-size: 18px}
.style45 {color: #000066}
.style46 {font-size: 18px; color: #000066; }
.style48 {font-size: 18px; color: #000000; }
-->
</style>
</head>

<body>

<form name="form1" method="post" action="lawer_case_form2.php">
  <table width="100%" bgcolor="#D5DFFF" >
    <tr>
      <td align="center" bordercolor="#E7C9CF" bgcolor="#7A92DF"><p class="style33 style14">&#1607;&#1584;&#1607; &#1607;&#1610; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1578;&#1610; &#1571;&#1583;&#1582;&#1604;&#1607;&#1575; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1583;&#1605; </p>
      </td>
    </tr>
  </table>
  <table width="100%" bgcolor="#D5DFFF" >
    <tr bordercolor="#FFFFCC" class="style46">
      <td align="center" bgcolor="#ABD5FF" class="style35 style45">&#1605;&#1608;&#1590;&#1608;&#1593; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; </td>
      <td width="24%" align="right" bgcolor="#DDEEFF"> <span class="style46">
	  <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$id_new_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  $sql1="select Client_name
	         from client
			  where id_client='$row[id_client]'";
	 $result1=mysql_query($sql1);
	 $row1=mysql_fetch_array($result1);		  
	  echo $row1[Client_name];
	  ?></span></td>
      <td width="17%" align="right" bgcolor="#ABD5FF"><span class="style46">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1608;&#1603;&#1604;</span></td>
    </tr>
    <tr class="style46">
      <td rowspan="4" align="right" valign="top" bgcolor="#DDEEFF"><span class="style46">
	  <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$id_new_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Case_Subject];?>
	  </span></td>
      <td align="right" bgcolor="#DDEEFF">
	    <span class="style46">
	  <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$id_new_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Client_adj];?>
      </span></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style46">&#1589;&#1601;&#1577; &#1575;&#1604;&#1605;&#1608;&#1603;&#1604; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td align="right" bgcolor="#DDEEFF" class="style46"><span class="style46">
	  <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$id_new_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_name];?>
    </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style46"><span class="style46">&#1575;&#1587;&#1605; &#1575;&#1604;&#1582;&#1589;&#1605; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td align="right" bgcolor="#DDEEFF" class="style46"><span class="style46">
	  <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$id_new_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_adj];?>
	  </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style46"><span class="style46">&#1589;&#1601;&#1577; &#1575;&#1604;&#1582;&#1589;&#1605; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC">
      <td align="right" bgcolor="#DDEEFF" class="style46"><span class="style46">
	 <?php 
	  include("db_connect.php");
	  $sql="select *
	        from new_case
			where id_new_case='$id_new_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_assest];?> 
	 </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style46"><span class="style46">&#1608;&#1603;&#1610;&#1604; &#1575;&#1604;&#1582;&#1589;&#1605; </span></td>
    </tr>
    <tr bgcolor="#7A92DF">
      <td colspan="3" align="center" valign="top"><p><a href="index_lawer.php" title="الرجوع إلى الصفحة الخاصة بك" class="style42">الرجوع إلى الصفحة السابقة </a></p>
      <p><span class="style43"><span class="style48">أما إذا أردت إكمال ملء البيانات الخاصة بهذه القضية</span> <a href="lawer_case_form2.php?<?php echo "id_new_case=$id_new_case";?>" title="الذهاب إلى الصفحة التي يتم فيها إكمال بيانات القضية" class="style44">اضغط هنا </a></span></p></td>
    </tr>
  </table>
</form>
<?php mysql_close(); ?>
</body>
</html>
