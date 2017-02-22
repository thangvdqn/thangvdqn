<?php
$dm = 'http://botviet.mobi';
$host = "localhost";
$username = "botexorg_user";
$password = "01635912116";	
$dbname = "botexorg_bot";
$connection = mysql_connect($host,$username,$password);
if (!$connection){
die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>