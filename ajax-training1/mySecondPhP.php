<?php                                                                                                 
header('content-type:text/html;charset="utf-8"');
error_reporting('error');

$username = $_POST["username"];
$age = $_POST["age"];
echo "姓名: {$username}, 年龄: {$age}";

?>