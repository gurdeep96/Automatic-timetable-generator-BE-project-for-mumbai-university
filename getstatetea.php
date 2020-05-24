<?php

             
include "connect.php";
$query = "SELECT * FROM teacher where department='".$_POST["department"]."'";
$result = mysqli_query($connect,$query);

?>
<option>--- Select an option ---</option>
<?php
	while($rs=mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $rs["teanm"];?>"><?php echo $rs["teanm"]; ?></option>
		<?php
	}
?>