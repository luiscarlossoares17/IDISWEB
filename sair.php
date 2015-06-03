<?php
include 'mysql.connect.php';
session_destroy();
header("location: index.php");
?>