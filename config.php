<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$database = 'sait_db_movie';

//Koneksi
$mysqli = new mysqli($db_host, $db_user, $db_pass, $database);
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>