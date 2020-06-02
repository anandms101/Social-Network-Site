<?php
ob_start();
$timezone = date_default_timezone_set("Indian/Maldives");
session_start();
$con = mysqli_connect("localhost", "root", "", "social"); //Connection variable

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}

?>