<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: index.php");
             
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include "connect.php";
$checkBox = implode(',', $_POST['teacon']); 
// Escape user inputs for security
$teacher_name = mysqli_real_escape_string($connect, $_POST['teanm']);
$teachershort_name = mysqli_real_escape_string($connect, $_POST['teasn']);
//$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 $sql = "SELECT teanm FROM teacher WHERE teanm = '$teacher_name'";
 if($stmt = mysqli_query($connect, $sql)){
   if(mysqli_num_rows($stmt) == 1){
                    $username_err = "The teacher name is already present";
          echo $username_err;
          $_SESSION['ue'] = $username_err;
            header('Location: teacher.php');
          //header('Location: teacher.php?username_err=$username_err');
          }
   
 }
// attempt insert query execution
$sql = "INSERT INTO teacher (teanm, teasn, teacon,department) VALUES ('$teacher_name', '$teachershort_name', '".$checkBox."','{$_SESSION['de']}')";

$sql3 = "SELECT teacol from teachercolor";
$res = mysqli_query($connect,$sql3);

  /*end:?>
  <script>
   var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  </script>
  <?php $color = "<script>document.write(color);</script>";
  $co = $color;
  echo $color;
  echo $co;*/
  function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
  end: $color=rand_color();
  
  while($rs=mysqli_fetch_array($res)){
      if($rs['teacol']==$color){
        goto end;
      }
  }
 
/*


function setRandomColor() {
  $("#colorpad").css("background-color", getRandomColor());
}
*/
$sql2 = "INSERT INTO teachercolor (teanm, teasn, department , teacol) VALUES ('$teacher_name', '$teachershort_name','{$_SESSION['de']}','$color')";
if(mysqli_query($connect, $sql) && mysqli_query($connect, $sql2)){
  $_SESSION['flag']=1;
    
  header("Location: teacher.php");
    //echo '<script>alert("Teacher added successfully!")</script>';

} else{
    echo "ERROR: Could not able to execute Add. " . mysqli_error($connect);
}
 
// close connection
mysqli_close($connect);
?>