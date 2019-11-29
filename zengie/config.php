<?php
$host = 'localhost'; #host
$mydatabase = 'philhealth'; #datasename
$username = 'root'; #username
$password = ''; #password

try{
    $conn = new PDO("mysql:host = {$host}; dbname = {$mydatabase} ", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>