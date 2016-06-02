<?php

require_once "auth.php";

const LIGHTING = 1, NOISE = 2, MICROCLIMATE = 3;

$val = intval($_POST['value']);

$user_id = current_user_id();

$connect = mysql_connect('localhost','root','') or die(mysql_error());

mysql_select_db("project");


$query = "SELECT COUNT(*) FROM user_preferences where user_id=$user_id;";
echo $query;
die("ALLAX");
$query_result =  mysql_query($query) or die (mysql_error());

echo mysql_fetch_array($query);

mysql_close();
