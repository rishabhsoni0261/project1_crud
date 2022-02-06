<?php
include 'header.php';
?>
<div>
	<?php
		include 'config.php';

		$sql="SELECT * FROM tblstudent JOIN tblstud_class WHERE tblstudent.stud_class = tblstud_class.cid";
		$result=mysqli_query($con,$sql) or die("Query Unsuccessful......");

		if (mysqli_num_rows($result) > 0) 
		{
			?>
		<table align="center" border="20">
			<caption><h2>Student Detail Page</h2></caption>
	        <thead>
		        <th>Id</th>
		        <th>Name</th>
		        <th>Address</th>
		        <th>Class</th>
		        <th>Phone</th>
		        <th>Action</th>
	        </thead>
	        <tbody>
	          <?php
	            while($row = mysqli_fetch_assoc($result)){
	          ?>
	            <tr>
	                <td><?php echo $row['stud_id']; ?></td>
	                <td><?php echo $row['stud_name']; ?></td>
	                <td><?php echo $row['stud_add']; ?></td>
	                <td><?php echo $row['cname']; ?></td>
	                <td><?php echo $row['stud_mobileno']; ?></td>
	                <td>
	                    <a href='edit.php?id=<?php echo $row['stud_id']; ?>' onclick="return confirm('Are you Sure to Edit <?php echo $row['stud_id']; ?>')"><img src="edit.png" height="35" width="40"></a>
	                    <a href='delete_backend.php?id=<?php echo $row['stud_id']; ?>' onclick="return confirm('Are you Sure to Delete <?php echo $row['stud_id']; ?>')"><img src="delete.png" height="40" width="50"></a>
	                </td>
	            </tr>
	          <?php } ?>
	        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
</div>
<?php
include 'footer.php';
?>