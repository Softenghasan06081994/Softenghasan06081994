<?php 

$db_experience = "root";
$db_name = "creative";
$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_experience);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$connection = mysqli_connect("localhost", "root","","creative");


