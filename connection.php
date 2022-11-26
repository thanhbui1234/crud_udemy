<?php 
$connetion = mysqli_connect('localhost', 'root', '', 'loginapp');
if ($connetion) {
    echo "conneted";
    echo "<br>";
} else {
    die("Couldn't connect");
}

?>