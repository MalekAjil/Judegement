<?php 
$hostname="localhost";
$username="root";
$password="mk1991";
$db_name="judgement";
$conn=mysql_connect($hostname,$username,$password) or die(mysql_errno()) or die("Could not make connection to MySQL"); 
$db=mysql_select_db($db_name,$conn)or die(mysql_errno());
?>
