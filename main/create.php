<?php
require_once 'dataConnect.php';
require_once 'read.php';

$name = $_POST['name'];
$comment = $_POST['comment'];
$data_time = date('Y-m-d H:i:s');

mysqli_query(getConnect(), "INSERT INTO `overpin`.`comment`
(`user_name`, `comment_text`, `data_time`) VALUES ('$name', '$comment', '$data_time')");

