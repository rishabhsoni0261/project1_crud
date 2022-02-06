<?php include 'header.php';
error_reporting(0);
if(isset($_POST['deletebtn'])){

include "config.php";
$stud_id = $_POST['id'];

$sql = "DELETE FROM tblstudent WHERE stud_id = {$stud_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location: index.php");

mysqli_close($con);

}
?>
<form method="post">
        
        <table align="center" border="20">
        	<caption><h3>Delete Detail</h3></caption>
        	<tr>
        		<th>ID</th>
        		<td><input type="text" name="id" /></td>
        	</tr>
        	<tr>
        		<th colspan="2"><input class="submit" type="submit" name="deletebtn" value="Delete" onclick="return confirm('Are you Sure to Delete <?php echo $row['stud_id']; ?>')" /></th>
        	</tr>
        </table>    
    </form>