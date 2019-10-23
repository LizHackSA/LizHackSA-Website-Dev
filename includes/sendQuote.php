<?php

    $conn = mysqli_connect("sql108.ihostfull.com", "uoolo_24615717", "mandisa1", "uoolo_24615717_lizhacksaDemo");

    if(!$conn){
        die("Could not connect");
    }
    else
    {
        echo "Connected successfully, Aw! Yebo!!!";
        $conn -> close();
    }
    
?>