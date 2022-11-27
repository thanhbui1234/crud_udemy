<?php
include './connection.php';
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