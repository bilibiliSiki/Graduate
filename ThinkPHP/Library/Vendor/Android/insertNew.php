<?php
mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
mysql_query("SET NAMES utf8");
mysql_select_db("app_astoneman1");
//$SID=$_POST[SID];
//$GRADE=$_POST[GRADE];
//$STUDENTINFO=$_POST[STUDENTINFO];
$PHONE=$_POST[PHONE];
$sql=mysql_query("insert into event_student (PHONE,PASSWORD) values($PHONE,'$_POST[PASSWORD]')");
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>