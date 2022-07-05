<?php

$con=new mysqli("localhost","root","","mediserve");

if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}

?>