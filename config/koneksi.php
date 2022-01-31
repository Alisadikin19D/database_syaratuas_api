<?php

$host = "localhost";
$Username ="root";
$Password = "";
$database = "dabar";

$kon = mysqli_connect($host, $Username, $Password, $database);
if (mysqli_connect_errno()){
    echo "error connection ". mysqli_connect_error();
    exit;

}

?>