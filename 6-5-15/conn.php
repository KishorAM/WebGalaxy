<?php
$host = "localhost";
$user = "root";
$pwd  = "root";
$db   = "test";

$mysqli = new mysqli($host,$user,$pwd,$db);

/* ESTABLISH CONNECTION */
if (mysqli_connect_errno())
{
  echo "Failed to connect to mysql : " . mysqli_connect_error();
    exit();
}
?>