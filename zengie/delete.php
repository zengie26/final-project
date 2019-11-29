<?php 
include_once('config.php');
if(isset($_GET['key'])){
    $id = $_GET['key'];
   
    $sql = "update philhealth.tblemployee ";
    $sql .= "set status = 'inactive' ";
    $sql .= "where ID = :id";
    $query = $conn->prepare($sql);
    $query -> bindparam(':id', $id);
    $query -> execute();
   
    echo "Successfully Deleted" . "<br/>";
    echo "<a href = \"index.php\">Back</a>";

}
else{
    echo "ERROR: Restricted Access!";
}
?>