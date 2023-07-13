<?php

function getRequestData()
{
    // geting data from request
    $req_data =  stripslashes(file_get_contents("php://input"));

    // convert json to php array
    $req_data_array = json_decode($req_data, true);

    // return 
    return $req_data_array;
}