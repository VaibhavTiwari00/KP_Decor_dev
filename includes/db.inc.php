<?php

include_once '../core/config.php';

// connect to database
global $con;
$con =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

function query($sql)
{
    global $con;
    return mysqli_query($con, $sql);
}

function fetch_all_data($sql)
{
    global $con;
    $resData = [];

    $res = mysqli_query($con, $sql);
    if ($res) {
        $count = mysqli_num_rows($res);

        if ($count > 0) {

            $data = [];
            while ($a = mysqli_fetch_assoc($res)) {
                array_push($data, $a);
            }

            $resData = $data;
        } else {
            $resData['result'] = 'failed';
            $resData['message'] = 'No row record found';
        }
    } else {
        $resData['result'] = 'failed';
        $resData['message'] = mysqli_error($con);
    }

    return $resData;
}

function fetch_data($sql)
{
    global $con;
    $resData = [];

    $res = mysqli_query($con, $sql);
    if ($res) {
        $count = mysqli_num_rows($res);

        if ($count > 0) {


            $resData = mysqli_fetch_assoc($res);
        } else {
            $resData['result'] = 'failed';
            $resData['message'] = 'No row record found';
        }
    } else {
        $resData['result'] = 'failed';
        $resData['message'] = mysqli_error($con);
    }

    return $resData;
}