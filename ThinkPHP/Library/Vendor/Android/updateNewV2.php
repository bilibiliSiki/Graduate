﻿<?php
$link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
mysql_query("SET NAMES UTF-8");
mysql_select_db("app_astoneman1",$link);
//utf8_encode($string);
//$NAME=$_POST[NAME];
//iconv("gbk","utf8",$string);
$sql=mysql_query("update event_student set NAME='$_POST[NAME]' , IDCARD='$_POST[IDCARD]' ,JOB1='$_POST[JOB1]'  where PHONE='$_POST[PHONE]'",$link);
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>