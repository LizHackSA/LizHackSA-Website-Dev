<?php
echo "Hello";

$dbhServername = "sql108.ihostfull.com";
$db_username = "uoolo_24615717";
$dbpassword = "mandisa1"
$dbName = "uoolo_24615717_lizhacksaDemo";

// connection string
$conn = new mysqli($dbhServername, $db_username, $dbpassword, $dbName);

// check connection to db
if($conn){
        echo "Seccess";
    }
    else{
        echo "Failed";
    }

?>