<?php
require_once 'dataConnect.php';


function getResults()
{
    $query_results = mysqli_query(getConnect(), "SELECT * FROM overpin.comment");
    return mysqli_fetch_all($query_results, MYSQLI_ASSOC);
}

echo json_encode(getResults());

