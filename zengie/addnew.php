<?php 
include_once ('config.php');
if(isset($_POST['add'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    if(empty($firstname) || empty($lastname) || empty($gender)) {
        echo "one of the fields is empty";
        if(empty($empty)){
            echo "First Name is Empty";
        }
        echo "<a href=\"add.php\">Back </a>";
    }
    else {
    $sql = "insert into philhealth.registration ";
    $sql .= "(firstname, lastname, gender) ";
    $sql .= "values (:firstname, :lastname, :gender)";
    $query = $conn->prepare($sql);
    $query -> bindparam(':firstname', $firstname);
    $query -> bindparam(':lastname', $lastname);
    $query -> bindparam(':gender', $gender);
    $query -> execute();

    echo "Successfully Added" . "<br/>";
    echo "<a href = \"index.php\">Back</a>";

    }
}
else{
    echo "ERROR: Restricted Access!";
}
?>