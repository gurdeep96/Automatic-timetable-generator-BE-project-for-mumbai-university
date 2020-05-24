 <?php
 session_start();
 		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");

        include "connect.php";
        $sql="DELETE FROM classroom WHERE crsn='$_GET[crsn]'";
        if(mysqli_query($connect,$sql))
        	header("refresh:0,url=classroomview.php");
        else
        	echo "Not Deleted";
?>