       <?php 
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
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  $sql2="select *
	         from proxy
			  where id_client='$row[Id_Client]'";
	 $result2=mysql_query($sql2);
	 $row2=mysql_fetch_array($result2);		  
	  
	  ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>������ �� ������</title>
<style type="text/css">
<!--
.style3 {
	font-size: 24px;
	color: #000066;
}
.style4 {font-size: 18px}
.style5 {color: #CC33FF}
a {
	font-size: 18px;
	color: #CC33FF;
}
.style7 {color: #000066}
.style8 {color: #000066; font-size: 18px; }
.style14 {
	font-size: 18;
	color: #000066;
}
.style15 {font-size: 18}
-->
</style></head>

<body>
<form name="form1" method="post" action="">
  <table width="100%" bgcolor="#AABFFF" >
    <tr bordercolor="#C2D5FC" bgcolor="#7A92DF">
      <td colspan="4" align="center" class="style3">��� �� �������� �� &#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;����</td>
    </tr>
    <tr>
      <td width="34%" align="right" bgcolor="#DDEEFF"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Client_adj];?>
	   </span></td>
      <td width="22%" align="right" bgcolor="#ABD5FF" class="style8">��� ������ </td>
      <td width="23%" align="right" bgcolor="#DDEEFF"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  $sql1="select *
	         from client
			  where id_client='$row[Id_Client]'";
	 $result1=mysql_query($sql1);
	 $row1=mysql_fetch_array($result1);		  
	  echo $row1[Client_name];
	  ?>
      </span></td>
      <td width="21%" align="right" bgcolor="#ABD5FF" class="style8">��� ������ </td>
    </tr>
    <tr bgcolor="#FFEAFF">
      <td align="right" bgcolor="#DDEEFF" class="style8"><?php echo $row1[Home_Phone];?></td>
      <td align="right" bgcolor="#ABD5FF" class="style8"> ���� ������ </td>
      <td align="right" bordercolor="#FFCCCC" bgcolor="#DDEEFF"><span class="style8"><?php echo $row1[Work_Phone];?>
      </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8"> ���� ����� </td>
    </tr>
    <tr bgcolor="#FFEAFF">
      <td align="right" bgcolor="#DDEEFF"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Id_Base];?>
	   </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8"><span class="style8">��� ������ </span></td>
      <td align="right" bgcolor="#DDEEFF"><span class="style8"><span class="style7"><span class="style8"><a href="mailto:<?php echo $row1['email'];?>"><?php echo $row1[email];?></a>
      </span></span>
      </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">������ ���������� </td>
    </tr>
    <tr bgcolor="#FFEAFF">
      <td align="right" bgcolor="#DDEEFF"><span class="style8">
        <?php include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  $sql2="select *
	         from proxy
			  where id_client='$row[Id_Client]'";
	 $result2=mysql_query($sql2);
	 $row2=mysql_fetch_array($result2);		  
 echo $row2[Id_Proxy];?>
	   </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8"><span class="style8">��� �������</span></td>
      <td align="right" bgcolor="#DDEEFF"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_name];?>
      </span></td>
      <td align="right" bordercolor="#FFCCCC" bgcolor="#ABD5FF" class="style5"><div align="right" class="style7"><span class="style15"><span class="style8">��� ����� 
      </span></span></div></td>
    </tr>
    <tr bgcolor="#FFEAFF">
      <td align="right" bgcolor="#DDEEFF"><span class="style8"><?php echo $row2[Kind_Proxy] ;?>
	   </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">��� �������</td>
      <td align="right" bgcolor="#DDEEFF"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_adj];?>
      </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style5"><span class="style8"><span class="style7"><span class="style4">��� ����� </span></span></span></td>
    </tr>
    <tr bgcolor="#FFEAFF">
      <td align="right" bgcolor="#DDEEFF"><span class="style8"><?php echo $row2[Proxy_Date] ;?>
	   </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style5"><span class="style8">����� ������� </span></td>
      <td align="right" bgcolor="#DDEEFF"><span class="style8"><span class="style15">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[enemy_assest];?>
      </span>
	   </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">���� ����� </td>
    </tr>
    <tr bgcolor="#FFEAFF" class="style14">
      <td align="right" bgcolor="#DDEEFF"><span class="style15"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Session_date];?>
      </span></span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">���� ������ ������� </td>
      <td align="right" bgcolor="#DDEEFF"><span class="style15"><span class="style8"><span class="style7">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Kind_Case];?>
      </span>
      </span></span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">��� ������ </td>
    </tr>
    <tr bgcolor="#FFEAFF" class="style14">
      <td align="right" bgcolor="#DDEEFF"><span class="style15"><span class="style8">
      </span></span><span class="style15"><span class="style8">
      <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Money];?>
      </span></span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8"><span class="style8">����� ������ </span></td>
      <td align="right" bgcolor="#DDEEFF"><span class="style15"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Court_name];?>
      </span></span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">��� �������</td>
    </tr>
    <tr bgcolor="#FFEAFF" class="style14">
      <td colspan="3" align="right" bgcolor="#DDEEFF"><span class="style15"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Court_place];?>
      </span></span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">���� ������� </td>
    </tr>
    <tr bgcolor="#FFEAFF" class="style14">
      <td colspan="3" align="right" bgcolor="#DDEEFF"><span class="style15"><span class="style8">
        <?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Reason];?>
      </span></span></td>
      <td align="right" bgcolor="#ABD5FF" class="style8">��� ������� </td>
    </tr>
    <tr bgcolor="#FFEAFF">
      <td colspan="3" align="right" bgcolor="#DDEEFF"><span class="style14">
        <textarea name="case_subject" cols="65" rows="5" class="style14" id="case_subject"><?php 
	  include("db_connect.php");
	  $sql="select *
	        from cases
			where id_case='$id_case'";
      $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  echo $row[Case_Subject];?></textarea>
      </span></td>
      <td align="right" bgcolor="#ABD5FF" class="style5"><span class="style8">����� ������ </span></td>
    </tr>
    <tr bgcolor="#7A92DF">
      <td><div align="center"><a href="warn_lawer_code.php?id_case=<?php echo $row[Id_Case]?>" class="style8">������� ���� �����</a></div></td>
      <td align="right" class="style5"><div align="center"><a href="apped_lawer_code.php?id_case=<?php echo $row[Id_Case]?>" class="style8">���������</a></div></td>
      <td><div align="center"><a href="contest_lawer_code.php?id_case=<?php echo $row[Id_Case]?>" class="style8">������</a></div></td>
      <td align="right" class="style5"><a href="sign_lawer_code.php?id_case=<?php echo $row[Id_Case]?>" class="style8">������ ������</a></td>
    </tr>
    <tr align="center" bgcolor="#D5DFFF">
      <td colspan="4"><span class="style4">���� ��� ���� ������ �� �������� ������ �� ��� ����� ��� ���� �������. ������� ��� ������ ������� ������ �� </span> <br><a href="index_lawer.php" title="������ ��� ������ ������� ������ ��" class="style44">���� ��� </a></td>
    </tr>
  </table>
</form>
<?php mysql_close(); ?>
</body>
</html>