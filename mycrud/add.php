<?php include 'header.php'?>
	<form method="post" action="add_backend.php">
		<table align="center" border="20">
			<caption><h2>Student Reg Page</h2></caption>
			<tr>
				<th>Student name:</th>
				<td><input type="text" name="n"></td>
			</tr>
			<tr>
				<th>Address:</th>
				<td><textarea name="add"></textarea></td>
			</tr>
			<tr>
				<th>Class:</th>
				<td><select name="cl">
					<option value="" selected disabled>Select class</option>
				<?php
                include 'config.php';

                $sql = "SELECT * FROM tblstud_class";
                $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?> ></option>

              <?php } ?>
					
				</select></td>
			</tr>
			<tr>
				<th>Mobile no.:</th>
				<td><input type="text" name="mno"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center><input type="Submit" name="Submit"></center>
				</td>
			</tr>
		</table>
	</form>
<?php include 'footer.php'?>