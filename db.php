<?php
$dbhost     = 'localhost';  
$dbuser     = 'root';  
$dbpass     = "";  
$conn       = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
$dbname     = 'e2s_yii2';  
$connection = mysql_select_db($dbname);
?>