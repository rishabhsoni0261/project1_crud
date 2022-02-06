<?php
$stud_id = $_POST['id'];
$stud_name = $_POST['n'];
$stud_add = $_POST['add'];
$stud_class = $_POST['cl'];
$stud_mobileno = $_POST['mno'];

include 'config.php';

$sql = "UPDATE tblstudent SET stud_name = '{$stud_name}', stud_add = '{$stud_add}',stud_class = '{$stud_class}', stud_mobileno = '{$stud_mobileno}' WHERE stud_id = {$stud_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location:index.php");

mysqli_close($con);

?>