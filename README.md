# Letters.PHP
This is our final project for CS204 - Course: Advanced Web Programming

db.php for uploading to 000
<?php
$host = "localhost";
$user = "id16991579_19bit2_letters";
$pw = "19BIT2_Final_Project";
$db = "id16991579_letters";

// #1: create the conn object
$conn = new mysqli($host, $user, $pw, $db);

