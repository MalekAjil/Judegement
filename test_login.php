<?PHP
session_start();
include("db_connect.php");
$id_num="id_".$_POST[adjective];
$sql="select $id_num,username,password
from $_POST[adjective]
where username='$_POST[username]'
and password='$_POST[password]'";
//echo $sql;
$result=mysql_query($sql);
if($row=mysql_num_rows($result)==1)
{
 $_SESSION['auth']="ok";
 $_SESSION['auth_user']=$_POST['username'];
 $_SESSION['adjective']=$_POST['adjective'];
 $id=mysql_result($result,0,$id_num);
 $_SESSION['id']=$id;
 $url="index_".$_POST[adjective].".php";
 header("Location:$url");
 mysql_close();
}

else
{
 echo "<br>וז בÖהד ÃÏÎה ÇÓו ÇהוÓÊÎÏו טדהוÉ ÇהÓÑ ÇהוÑÎÕÊךז<br>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="rtl">
<head>
<title>ÊÓÌךה ÇהÏÎטה</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-6">
</head>
<body>
</body>
</html>
