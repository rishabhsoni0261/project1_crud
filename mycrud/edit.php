<?php include 'header.php';

include 'config.php';
$stud_id=$_GET['id'];

$sql="SELECT * FROM tblstudent WHERE stud_id=$stud_id";
$result=mysqli_query($con,$sql) or die('Query Unsuccessful.....');

 if(mysqli_num_rows($result) > 0)  
 	{
      while($row = mysqli_fetch_assoc($result))
      {
?>
	<form method="post" action="update_backend.php">
		<table align="center" border="20">
			<caption><h2>Update Page</h2></caption>
			<tr>
				<th>Student name:</th>
				<input type="hidden" name="id" value="<?php echo $row['stud_id']?>">
				<td><input type="text" name="n" value="<?php echo $row['stud_name']?>"></td>
			</tr>
			<tr>
				<th>Address:</th>
				<td><textarea name="add"><?php echo $row['stud_add']?></textarea></td>
			</tr>
			<tr>
				<th>Class:</th>
				<td><?php
            $sql1 = "SELECT * FROM tblstud_class";
            $result1 = mysqli_query($con, $sql1) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result1) > 0)  {
              echo '<select name="cl">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['stud_class'] == $row1['cid']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
              }
          echo "</select>";
        }
            ?></td>
			</tr>
			<tr>
				<th>Mobile no.:</th>
				<td><input type="text" name="mno" value="<?php echo $row['stud_mobileno']?>"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center><input type="Submit" name="Update" value="Update"></center>
				</td>
			</tr>
		</table>
	</form>
<?php 

	} 
		}?>
<?php include 'footer.php'?>