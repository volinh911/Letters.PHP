<?php

$arr = array("green" => "Online", "red" => "Offline");

// Use array_rand function to returns random key
$key = array_rand($arr);

// Display the random array element
    echo '<pre>';
    var_dump($key);
    echo $key;
    echo '</pre>';
    echo '<br>';
    echo $arr[$key];
// echo $arr[$key];
?>