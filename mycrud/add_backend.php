<?php

$stud_name= $_POST['n'];
$stud_add= $_POST['add'];
$stud_class= $_POST['cl'];
$stud_mobileno= $_POST['mno'];

$con = mysqli_connect("localhost","root","","mycrud") or die("Connection Failed");

$sql="INSERT INTO tblstudent(stud_name,stud_add,stud_class,stud_mobileno) VALUES ('$stud_name','$stud_add','$stud_class','$stud_mobileno') ";
$result=mysqli_query($con,$sql) or die("Query Unsuccessful........"); 

header("location:add.php");
mysqli_close($con);
?>