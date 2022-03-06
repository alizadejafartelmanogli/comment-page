<?php
require_once 'dataConnect.php';

$id = $_POST['id'];

mysqli_query(getConnect(), "DELETE FROM `overpin`.`comment` WHERE (`id` = '$id')");
