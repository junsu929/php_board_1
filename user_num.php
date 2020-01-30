<?php
include "./db_connect.php";

// 디버깅을 위한 코드
error_reporting(E_ALL);
ini_set("display_errors",1);

$max_num = 0;

$sql_query = "SELECT MAX(NUM) FROM USER";
$result = mysqli_query($db,$sql_query);

$max_num = mysqli_fetch_array($result);
print_r($max_num);




?>
