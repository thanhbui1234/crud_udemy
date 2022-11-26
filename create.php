<?php

// create

if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // $connetion = mysqli_connect('localhost', 'root', '', 'loginapp');
    include './connection.php';

    /// inser to database myadmin
    $query = "INSERT INTO  users(username,password) "; // CONNETED TOGETHER
    $query .= "VALUES ('$username','$password') ";
    $result = mysqli_query($connetion, $query);
    if (!$result) {
        die('query field');
    }

    // if ($username && $password) {
    //     echo $username;

    // } else {
    //     echo "this field cannot be blank";
    // }

}