<?php
$conn = new mysqli("localhost","root","","final");

if ($conn->connect_error)
{

    die("Connection Failed!".$conn->connect_error);
}

?>