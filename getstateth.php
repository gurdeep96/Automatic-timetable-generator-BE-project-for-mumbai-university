<?php


             
include "connect.php";
$query = "SELECT * FROM subject where subnm='".$_POST["subject"]."'";
$result = mysqli_query($connect,$query);



$rs=mysqli_fetch_array($result);
	
	
	//while($rs=mysqli_fetch_array($result)){
	
		if($rs["subth"]==0){
			?>
			<script>
			document.getElementById("thcls").disabled=true;
			</script>
		<?php
		}
		else
		{
			?>
			<script>
			document.getElementById("thcls").disabled=false;
			</script>
			<?php 
		}
		if($rs["subtu"]==0){
			?>
			<script>
			document.getElementById("tutcls").disabled=true;
			</script>
		<?php
		}
		else
		{
			?>
			<script>
			document.getElementById("tutcls").disabled=false;
			</script>
			<?php 
		}
			if($rs["subpr"]==0){
			?>
			<script>
			document.getElementById("b1cls").disabled=true;
			document.getElementById("b2cls").disabled=true;
			document.getElementById("b3cls").disabled=true;
			document.getElementById("b4cls").disabled=true;
			document.getElementById("b5cls").disabled=true;
			document.getElementById("b6cls").disabled=true;
			</script>
		<?php
		}
		else
		{
			?>
			<script>
			document.getElementById("b1cls").disabled=false;
			document.getElementById("b2cls").disabled=false;
			document.getElementById("b3cls").disabled=false;
			document.getElementById("b4cls").disabled=false;
			document.getElementById("b5cls").disabled=false;
			document.getElementById("b6cls").disabled=false;
			</script>
			<?php 
		}
		
	
	
	
	$query2="SELECT * FROM lecture WHERE subnm='".$_POST["subject"]."'";
$sql = mysqli_query($connect,$query2);

	while($row=mysqli_fetch_array($sql)){
	if($row["lectype"]=="Th"){
		?>
		<script> 
		document.getElementById("thcls").disabled=true;
		//document.getElementById("thcls").checked=true;
		</script>
		<?php
	}
	
	if($row["lectype"]=="Tut"){
		?>
		<script> 
		//document.getElementById("tutcls").checked=true;
		document.getElementById("tutcls").disabled=true;
		</script>
		<?php
	}
}

	//mysql_data_seek($rs, 0);
?>