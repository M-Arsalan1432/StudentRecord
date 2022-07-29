<?php
// Varibale
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "js_ajax_php";

// Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error){
    die("Connection Failed");
}
else
{
    // echo "Connection Successfully";
}

?>