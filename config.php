<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'anandpatel10');
define('DB_PASSWORD', 'aproxx777');
define('DB_NAME', 'ananddatabase1');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>