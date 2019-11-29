<?php

include_once ('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addnew.php" method="POST">
        <label for="">firstname</label><br>
        <input type="text" name="firstname" ><br>
        <label for="">lastname: </label><br>
        <input type="text" name="lastname" ><br>
        <label for="">gender</label><br>
        <input type="text" name="gender" ><br>
        <input type="submit" name="add" >
    </form>
</body>
</html>