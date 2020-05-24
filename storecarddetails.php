<?php
session_start();
include "connect.php";
$flag=0;
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$year = $_POST['year'];
$sem  = $_SESSION['eo'];
$de = $_SESSION['de'];
$query = "SELECT * FROM storecarddetails WHERE department='{$_SESSION['de']}' AND semester='{$_SESSION['eo']}'";
$result = mysqli_query($connect,$query); 
while($row=mysqli_fetch_array($result)){
  if( strpos( $val1, $row['card']) !== false) {
    $query1 = "update storecarddetails set cell='$val2' where card='$val1' AND department='{$_SESSION['de']}' AND semester='{$_SESSION['eo']}'";
	$result1 = mysqli_query($connect,$query1); 
	$flag=1;
	break;

	}
}
if($flag==0){
$query2 = "INSERT INTO storecarddetails (department,parentid,semester,card,cell) values ('$de','$year','$sem','$val1','$val2')";
$result2 = mysqli_query($connect,$query2); 
}


?>