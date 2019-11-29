<?php 
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");   
}
require ("config.php"); 
$result = $conn->query("SELECT * FROM philhealth.registration  order by id desc");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <center><h1>Welcome to Hotel`s Site</h1></center>
   <center><h3>Welcome <?php echo $_SESSION['nickname'] ?></h3></center>
   <a href="add.php">Add New</a> | <a href="adduser.php">Add User</a> | <a href="logout.php">Log-out</a>
   <table class="table table-dark table-bordered">
       <tr>
           
           <th >firstname</th>
           <th>lastname</th>
           <th>gender</th>
           <th>Edit</th>
           <th>Delete</th>

       </tr>
       <?php 
       while($row = $result->fetch(PDO::FETCH_ASSOC)){
           echo "<tr>";
           echo "<td>" . $row['firstname'] . "</td>";
           echo "<td>" . $row['lastname'] . "</td>";
           echo "<td>" . $row['gender'] . "</td>";
           echo "<td> <a href=\"edit.php?key=$row[id]&firstname=$row[firstname]\">Edit</a></td>";
           echo "<td> <a href=\"delete.php?key=$row[id]\">DELETE</a></td>";
           echo "</tr>";
       }
       ?>

   </table>
</body>
</html>