<?php

$conn = mysqli_connect('localhost','root','root','win');

if(!$conn) {
    echo 'Fail: ' . mysqli_connect_error();
}