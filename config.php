<?php

$db_host = "192.168.1.76";
$db_user = "gandi";
$db_pass = "123";
$db_name = "dbpesbuk";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
