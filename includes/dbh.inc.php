<?php
$servername = 'localhost';
$dbUsername="root";
$dbpass="";
$dbname='university';
$conn = mysqli_connect($servername,$dbUsername,$dbpass,$dbname);
if(!$conn){
    die("Could not connect to".mysqli_connect_error());
}