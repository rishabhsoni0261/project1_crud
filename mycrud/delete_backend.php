<?php

$stud_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM tblstudent WHERE stud_id = {$stud_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location: index.php");

mysqli_close($con);

?>
