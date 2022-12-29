<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" id="form">
        <div>
            <label for="">Name :</label>
            <input type="text" id="name">
        </div>
        <div>
            <label for="">Email :</label>
            <input type="email" id="email">
        </div>
        <div>
            <label for="">Website :</label>
            <input type="text" id="website">
        </div>
        <div>
            <label for="">Mobile no. :</label>
            <input type="number" id="mobile">
        </div>
        <div>
            <label for="">Gender :</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
        </div>
        <div>
            <label for="">Comment :</label>
            <textarea name="" id="comment" cols="30" rows="10"></textarea>
        </div>
        <div>
        <button type="button" id="submit_btn" onclick="submitForm();">Submit</button>
        </div>
    </form>
</body>
<?php
require "./script.php";
?>
</html>