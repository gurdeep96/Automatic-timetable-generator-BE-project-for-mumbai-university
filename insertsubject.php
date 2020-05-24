<?php
session_start();

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");           

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "connect.php";
$count=count($_POST['subsn']); 
// Escape user inputs for security
/*$sub_name = mysqli_real_escape_string($connect, $_POST['subnm']);
$subshort_name = mysqli_real_escape_string($connect, $_POST['subsn']);
$subth = mysqli_real_escape_string($connect, $_POST['subth']);
$subpr = mysqli_real_escape_string($connect, $_POST['subpr']);
$subtu = mysqli_real_escape_string($connect, $_POST['subtu']);
$subyear = mysqli_real_escape_string($connect, $_POST['subyear']);


for($i=0;$i<$count;$i++){
if(isset($_POST['subelec'])){
    //$stok is checked and value = 1
	if(is_null($_POST['subelec'][$i]))
	{$subelec[$i]=0;
		continue;
	}	
    $subelec[$i] = $_POST['subelec'][$i];

}
}
*/

for($i=0;$i<$count;$i++){
	//echo $subelec[$i];
	//echo $_POST['subelec'][$i];
}

$flag=0;
for($i=0;$i<$count;$i++){
$sql = "INSERT INTO subject (subnm, subsn, subth, subpr, subtu, subelec, subyear,department,sem) VALUES ('";
$sql .= $_POST['subnm'][$i]."', '";
$sql .= $_POST['subsn'][$i]."', '";
$sql .= $_POST['subth'][$i]."', '";
$sql .= $_POST['subpr'][$i]."', '";
$sql .= $_POST['subtu'][$i]."', '"; 
$sql .= $_POST['subelec'][$i]."', '";
$sql .= $_POST['subyear']."', '";
$sql .= $_SESSION['de']."', '";
$sql .= $_SESSION['eo']."')";
mysqli_query($connect, $sql);
$flag=1;
}
if($flag==1){
	header("Location: subject.php");
    //echo '<script>alert("Subject added successfully!")</script>';

} else{
    echo "ERROR: Could not able to execute Add. " . mysqli_error($connect);
}
 
// close connection
mysqli_close($connect);
?>