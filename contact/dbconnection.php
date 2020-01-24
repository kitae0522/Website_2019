<?php

function dbconn(){
$host_name="localhost";
$db_user_id ="kitae0522";
$db_pw="kitae040522";
$db_name="kitae0522";

$connect=@mysql_connect($host_name, $db_user_id, $db_pw);
@mysql_select_db($db_name, $connect);
if(!$connect)die("MySQL Error".mysql_error());
return $connect;
}

?>