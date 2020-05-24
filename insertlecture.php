<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");
             
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "connect.php";
 
// Escape user inputs for security
$teanm = mysqli_real_escape_string($connect, $_POST['teanm']);
$subnm = mysqli_real_escape_string($connect, $_POST['subnm']);
$class = mysqli_real_escape_string($connect, $_POST['class']);
//$crnm = mysqli_real_escape_string($connect, $_POST['crnm']);
$crnm2 = implode(',', $_POST['crnm']);
$cops = explode(',', $crnm2);
$lectype = implode(',', $_POST['lectype']);
$pops = explode(',', $lectype);
foreach ($pops as $index=>$code)
{
$sql = "INSERT INTO lecture (teanm, subnm, class, crnm, lectype,department,sem) VALUES ('$teanm', '$subnm', '$class', '$cops[$index]', '$code','{$_SESSION['de']}','{$_SESSION['eo']}')";
mysqli_query($connect, $sql);
}


	header("Location: lecture.php");
    echo '<script>alert("Subject added successfully!")</script>';


 
// close connection
mysqli_close($connect);
?>