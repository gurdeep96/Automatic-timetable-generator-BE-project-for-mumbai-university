<?php
session_start();
 
            
include "connect.php";
$query = "SELECT * FROM subject where department='{$_SESSION['de']}' AND subyear='".$_POST["year"]."' AND sem='{$_SESSION['eo']}'"; 
$result = mysqli_query($connect,$query);

?>
<option>--- Select an option ---</option>
<?php
	while($rs=mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $rs["subnm"];?>"><?php echo $rs["subnm"]; ?></option>
		<?php
	}
?>