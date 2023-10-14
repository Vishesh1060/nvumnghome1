<?php
    $host='localhost';
    $user='nvmng';
    $pswrd='nvmng';
    $db='nvumngtest';
    $port=3306;

    $mysqli=new mysqli(
        $host,
        $user,
        $pswrd,
        $db
    );
    
    if($test==true){
        if($mysqli->connect_error){
            echo "MYSQL Connection Error";
            echo "<br>".$mysqli->connect_error();
        }
        else{
            echo "MYSQL Connected✅"."<br>".$mysqli->host_info."<br>".$mysqli->get_server_info()."<br>".$mysqli->protocol_version;
        }
    }
?>