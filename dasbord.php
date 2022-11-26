<?php

if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    if ($username && $password) {
        echo $username;

    } else {
        echo "this field cannot be blank";
    }

}