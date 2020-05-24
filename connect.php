<?php

    
ini_set('display_errors',1);
error_reporting(E_ALL);

/*** THIS! ***/
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'atg');
*/ 
/* Attempt to connect to MySQL database */
$connect = mysqli_connect('localhost', 'root', '', 'atg');
 
// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>