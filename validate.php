<?php

$valid_username = "teddy";
$valid_password = "rules";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password){
    echo "Welcome $username";
} else {
    echo "Invalid username or password";
}

?>