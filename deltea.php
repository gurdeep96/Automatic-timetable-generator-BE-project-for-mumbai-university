 <?php
 session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");

        include "connect.php";
        $sql="DELETE FROM teacher WHERE teasn='$_GET[teasn]'";
        if(mysqli_query($connect,$sql))
        	header("refresh:0,url=teacherview.php");
        else
        	echo "Not Deleted";
?>