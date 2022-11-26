<!-- Đọc dữ liệu từ database -->
<?php include './connection.php';

$query = 'SELECT * FROM users ';
/// $result  sẽ nhận được tận cả những dữ liệu select từ user;
$result = mysqli_query($connetion, $query);
if (!$result) {
    die('query field');
}

include_once 'header.php';
?>

<div class="container">
    <div class="col-sm-6">
        <?php
while ($row = mysqli_fetch_assoc($result)) {
    echo '<pre>';
    print_r($row);
    echo '</pre>';

}
?>

    </div>
</div>

<?php

include './footer.php';