 <?php
 session_start();
 	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");

        include "connect.php";
        $sql="DELETE FROM lecture WHERE teanm='$_GET[teanm]' AND subnm='$_GET[subnm]'";
        if(mysqli_query($connect,$sql))
        	header("refresh:0,url=lectureview.php");
        else
        	echo "Not Deleted";
?>