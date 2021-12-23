<?php

$dbhost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "santosh_profile";

if(!$con = mysqli_connect($dbhost,$dbUsername,$dbPassword,$dbname)){

    die("failed to connect!");
}

