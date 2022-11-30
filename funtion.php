<?php
include './connection.php';

function crerate()
{
    global $connetion;

    $username = $_POST['email'];
    $password = $_POST['password'];

    //  sẽ cho phép sử dụng các ký tự đặc biệt  ;  '  .'  lưu vào database
    $username = mysqli_real_escape_string($connetion, $username);
    $password = mysqli_real_escape_string($connetion, $password);

    // encryption password
    $hashFormat = "$2y$10$";
    $salt = "tthahahahttttt123ktrkk";
    $hatl_ant__salt = $hashFormat . $salt;
    $password = crypt($password, $hatl_ant__salt);
    echo $password;

// $connetion = mysqli_connect('localhost', 'root', '', 'loginapp');
// include './connection.php';

/// inser to database myadmin
    $query = "INSERT INTO  users(username,password) "; // CONNETED TOGETHER
    $query .= "VALUES ('$username','$password') ";
    $result = mysqli_query($connetion, $query);
    if (!$result) {
        die('query field');
    }
    header('location: ./read.php ');
}

function showAllData()
{
    global $connetion;
    $query = 'SELECT * FROM users ';
/// $result  sẽ nhận được tận cả những dữ liệu select từ user;
    $result = mysqli_query($connetion, $query);
    if (!$result) {
        die('query field');
    }
    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        echo "<option value='$id'>$id</option>";

    }
}

function update()
{
    global $connetion;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE users SET  ";
    $query .= " username ='$username' ,  ";
    $query .= " password ='$password'  ";
    $query .= " WHERE id = $id ";

    $result = mysqli_query($connetion, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connetion));
    }

}

function delete()
{
    global $connetion;
    $id = $_POST['id'];
    $query = "DELETE FROM users ";
    $query .= " WHERE id = $id ";

    $result = mysqli_query($connetion, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connetion));
    }

}