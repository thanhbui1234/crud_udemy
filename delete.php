<?php
include './header.php';
include './funtion.php';
?>
<?php
if (isset($_POST['submit'])) {

    delete();
}
?>
<form class="container" action="" method="POST">

    <h1 class="text-center">DELETE</h1>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3 form-group">
        <select name="id" id="">
            <?php
showAllData()

?>
        </select>
    </div>
    <button type="submit" name="submit" value="submit" class="btn btn-primary">DELETE :D</button>
</form>
<?php
include './footer.php';

?>