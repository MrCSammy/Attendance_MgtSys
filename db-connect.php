<?php 
// Hostname
$host = "sql211.infinityfree.com";
// Username
$uname = "if0_38694714";
// Password
$pw = "AttendSys";
// Database Name
$dbname = "if0_38694714_simple_attendance_db";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>