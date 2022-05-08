<?php

session_start();
$host = "host = ec2-52-71-69-66.compute-1.amazonaws.com";
$port = "port = 5432";
$dbname = "dbname = d1fhr3tn6q1e9h";
$username = "user = hefufnttsabjcp";
$password = "password = f07bfa6ea19719af01efcf4f8d709c7da62bbcab885de899b5d36b45ee361723";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>