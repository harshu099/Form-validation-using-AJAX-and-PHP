<?php

$conn=mysqli_connect("localhost","root","","form_db");

if(!$conn){
    die("Sorry error".mysqli_connect_error());
}
?>