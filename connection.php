<?php
$connetion = mysqli_connect('localhost', 'root', '', 'loginapp');  // tham số thứ tư là tên database tạo trên myadmin
if ($connetion) {
    echo "conneted";
    echo "<br>";
} else {
    die("Couldn't connect");
}