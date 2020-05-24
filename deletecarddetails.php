<?php
session_start();
include "connect.php";
$data2 = $_POST['data2'];
$query = "delete from storecarddetails where card='$data2' AND department ='{$_SESSION['de']}' AND semester='{$_SESSION['eo']}'";
$result = mysqli_query($connect,$query); 
?>