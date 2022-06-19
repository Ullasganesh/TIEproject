<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login";
/*$server = "sql301.epizy.com";
$user = "epiz_31978911";
$pass = "v8r0SIMexz6f";
$database = "epiz_31978911_mainwebsite";*/

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>