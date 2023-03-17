<?php
$conn = mysqli_connect('localhost', 'root', '', 'commentsdb');

if(!$conn){
    die("Connection failed :".mysqli_connect_error());
}