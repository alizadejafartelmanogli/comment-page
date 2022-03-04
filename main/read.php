<?php

require_once 'db/database.php';


function get_Results(){
    $query_results = mysqli_query(get_Connect(), "SELECT * FROM overpin.comment");
    $results = mysqli_fetch_all($query_results, MYSQLI_ASSOC);
    return $results;
}

/*$comment = get_Results()[0];
print_r($comment['user_name']);*/


