<?php
$link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
mysql_query("SET NAMES utf8");
mysql_select_db("app_astoneman1",$link);
$sql=mysql_query("select * from event_position ",$link);
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>