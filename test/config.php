<?php
$connection = @mysql_connect('localhost', 'root', '') or die('Could not connect.');
mysql_set_charset('utf8',$connection);

	if(!mysql_select_db("drivingschoolsystem",$connection)) die("No database selected.");
?>