<?php
require './dbconnect.php';

global $conn;

if(empty($_POST["gender"])){
    echo ("Fill all the fields");
    exit;
}

$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];
$comment = $_POST["comment"];

if(!empty($mobile)){
    $numlength = (int)(log($mobile+1, 10)+1);
}

if ($name == "" || $email == "" || $website == "" || $mobile == "" || empty($gender) || $comment == "") {
    echo ("Fill all the fields");
    exit;
} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    echo ("Only letters and white space allowed");
    exit;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid email format");
    exit;
} elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
    echo ("Invalid website url");
    exit;
}elseif($numlength!=10){
    echo("Mobile number length should be 10");
    exit;
}
 else {
    $sql = "INSERT INTO user_table VALUES ('','$name','$email','$website','$mobile','$gender','$comment')";
    $result = mysqli_query($conn, $sql);
    echo ("Form submitted successfully");
}
?>