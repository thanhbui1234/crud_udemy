<?php include './header.php'?>
<?php
if (isset($_POST['submit'])) {
    include './funtion.php';
    crerate();

}
?>


<form class="container" method="POST" action="">
    <h1 class="text-center">CREATE</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" name="submit" value="submit" class="btn btn-primary">CREAT</button>
</form>

<?php include './footer.php'?>