<?php

$host = "localhost:3000";
$username ="root";
$password = "";
$db_name ="undercoverdb";

$db = mysqli_connect($host,$username,$password,$db_name);
if ($db->connect_error) {
    echo "Connection Failed";
}

?>