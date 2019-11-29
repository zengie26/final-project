<?php 
include_once ('config.php');
if(isset($_POST['adduser'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nickname = $_POST['nickname'];

    if(empty($username) || empty($password) || empty($nickname)){
        echo "Incomplete Fields";
    }
    else{
        $sql = "insert into philhealth.admin ";
        $sql .= "(username, password, nickname) ";
        $sql .= "values (:user, :pass,:nickname)";
        $query = $conn ->prepare($sql);
        $query -> bindparam(':user', $username);
        $query -> bindparam(':pass', $password);
        $query -> bindparam(':nickname', $nickname);
        $query ->execute();

        echo "<p style=color:green; font-size:40px;><a href = \"index.php\">Success</a></p> <br>";
    }
}

// $sql = "insert into aics.users ";
// $sql .= "(username, password, nickname) ";
// $sql .= "values (:user, :pass, :nickname)";
// $query = $conn ->prepare($sql);
// $query -> bindparam(':user', $username);
// $query -> bindparam(':pass', $password);
// $query -> bindparam(':nickname', $nickname);
// $query ->execute();
// echo "<p style=color:green; font-size:40px;><a href = \"index.php\">Success</a></p> <br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add User</h1>
    <form action="adduser.php" method="POST">
        <label for="">username</label><br>
        <input type="text" name="username"> <br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <label for="">Nickname</label><br>
        <input type="text" name="nickname"><br>
        <input type="submit" name="adduser" value="Register"><br>
    </form>
</body>
</html>