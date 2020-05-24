<?php session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
     header("Location: login.php");
             

if(!isset($_SESSION['eo'])){
  $mon = date('m');
  if($mon>5 && $mon <12){
    $_SESSION['eo']="odd";
  }
  else
    $_SESSION['eo']="even";
}
 ?>
<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
              <tr>
                <th><b>TIME</b></th>
                <th><b>Monday</b></th>
                <th><b>Tuesday</b></th>
                <th><b>Wednesday</b></th>
                <th><b>Thursday</b></th>
                <th><b>Friday</b></th>
              </tr>
            <tbody>

                <?php
                    error_reporting(1);
                    session_start();
                    if ((isset($_SESSION['login'])) && (isset($_REQUEST['cls']))) {
                        $classname = $_REQUEST['cls'];
                        $conn = mysqli_connect("localhost", "root", "oracle", "atg");
                        $sql = "select DISTINCT (time) as time from time_table where classname = "."'$classname'";
                        $rest = mysqli_query($conn, $sql);
                        while($t = mysqli_fetch_assoc($rest)){
                        $sql = "select * from time_table where classname = "."'$classname'". " AND time = '".$t['time']."'";
                        //print_r($sql);exit;
                        $res = mysqli_query($conn, $sql);
                        ?>
                        <tr>
                            <td><?php echo $t['time'] ?></td>
                        <?php
                        $week_days = array('Monday','Tuesday','Wednesday','Thurshday','Friday');
                        $classes = array();
                        while($row = mysqli_fetch_assoc($res)) {
                            $classes[$row['day']] = $row;
                        }
                        foreach ($week_days as $day) {
                        ?>
                            <?php if (array_key_exists($day, $classes)) { $row = $classes[$day]; ?>
                            <td><?php echo $row['subject'] . '<br />' . $row['teacher'] ?></td>
                            <?php } else { ?>
                            <td>No Class</td>
                            <?php } ?>
                        <?php    
                        }
                        ?>
                        </tr>
                             <?php
                        }     
                ?>
                </tbody>
            </table>