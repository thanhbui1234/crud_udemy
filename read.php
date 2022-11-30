<!-- Đọc dữ liệu từ database -->
<?php
require './header.php';
include './connection.php';
?>

<div class="container">
    <div class="col-sm-6">
        <?php
$query = 'SELECT * FROM users ';

$result = mysqli_query($connetion, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $url = '/update.php?id=' . $row['id'] . '&username=' . $row['username'] . '&password=' . $row['password'];
    ?>
        <table class="table mt-3">
            <thead>
                <tr class="table-dark">
                    <th scope=" col">#</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">FUNCTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <a href="<?php echo $url ?>"><button type="button" class="btn btn-primary">Sua</button></a>



                        <a href="/delete.php"> <button type="button" class="btn btn-secondary">Xoa</button></a>
                    </td>

                </tr>

            </tbody>
        </table>

        <?php }?>


    </div>
</div>

<?php

include './footer.php';