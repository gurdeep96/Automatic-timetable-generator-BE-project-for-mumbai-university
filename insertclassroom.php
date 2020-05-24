<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: index.php");
             
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "connect.php";
 
// Escape user inputs for security
$cr_name = mysqli_real_escape_string($connect, $_POST['crnm']);
$crshort_name = mysqli_real_escape_string($connect, $_POST['crsn']);
$crcp = mysqli_real_escape_string($connect, $_POST['crcp']);
$crty = mysqli_real_escape_string($connect, $_POST['crtype']);

//$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 $sql = "SELECT crnm FROM classroom WHERE crnm = '$cr_name'";
 if($stmt = mysqli_query($connect, $sql)){
	 if(mysqli_num_rows($stmt) == 1){
                    $username_err = "The venue name is already present";
					echo $username_err;
					$_SESSION['ue'] = $username_err;
						header('Location: classroom.php');
					//header('Location: teacher.php?username_err=$username_err');
					}
	 
 }
// attempt insert query execution
$sql = "INSERT INTO classroom (crnm, crsn, crcp, crtype,department) VALUES ('$cr_name', '$crshort_name', '$crcp', '$crty','{$_SESSION['de']}')";
if(mysqli_query($connect, $sql)){
	$_SESSION['flag']=1;
    
	header("Location:classroom.php");
    //echo '<script>alert("Subject added successfully!")</script>';

} else{
    echo "ERROR: Could not able to execute Add. " . mysqli_error($connect);
}
 
// close connection
mysqli_close($connect);
?>