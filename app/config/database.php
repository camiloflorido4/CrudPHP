<?php

$conn = new mysqli("127.0.0.1", "root","", "crud_php");

if($conn-> connect_error){
    die("error de conexión" . $conn->connect_error);
}