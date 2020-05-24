 <?php
 session_start();
 		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");

        include "connect.php";
        $sql="DELETE FROM subject WHERE subsn='$_GET[subsn]'";
        if(mysqli_query($connect,$sql))
        	header("refresh:0,url=subjectview.php");
        else
        	echo "Not Deleted";
?>