<?php

function get_Connect(){
    $connect = mysqli_connect('localhost', 'root', 'root', 'overpin');
    return $connect;
}
