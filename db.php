<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'demo');
if(!$connection){
    die("Database connection failed" . mysqli_error($connection));
}
?>