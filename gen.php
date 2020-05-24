<?php
session_start();
include "connect.php";
$flag=0;
$variable = $_POST['variable']; 
$val = $_POST['val']; 
$year =  $_POST['year'];
$card = $_POST['card'];
$clash = $_POST['clash'];
$query = "SELECT * FROM teacher";
$que = "SELECT crnm,crsn FROM classroom";
$result = mysqli_query($connect,$query); 
$res = mysqli_query($connect,$que);
while($row=mysqli_fetch_array($result)){
  if( strpos( $variable, $row['teanm']) !== false) {
    $teaconarr = explode(",",$row['teacon']);
    $abcd = $row['teanm'];
    break;
  }
}
while($rw=mysqli_fetch_array($res)){
  if( strpos( $variable, $rw['crnm']) !== false) {
    $crr = $rw['crnm'];
    break;
  }
}
//Clashing teacher
if( strpos( $clash, $abcd) !== false) {
  echo "teaclash";
  goto end;
}
//Clashing classroom
if( strpos( $clash, $crr) !== false) {
  echo "roomclash";
  goto end;
}

// Practical
$lab = '_Lab';
$slot = (int)$val;
$slt = $slot % 10;
$slot = $slot + 1;
$val2 = (string)$slot;
$length= count($teaconarr);

//$target = array($val,$val2);
//count(array_intersect($teaconarr, $target)) == count($target)
if(strpos( $variable,$lab) !== false){
  if($slt==6){
  echo "nolastslotprac";
  goto end;
 }
 if($slt==1 || $slt==3){
  echo "nopracbreak";
  goto end;
 }
  for($i=0;$i<$length;$i++){
  if($val==$teaconarr[$i]){
    $i++;
    if($val2==$teaconarr[$i]){
  	echo "prac";}
    else{echo "nopr";}
  	goto end;
    }
  }
}
// Elective Theory
$query2 = "SELECT subnm,subsn FROM subject WHERE subyear='$year' AND subelec=1 AND department='{$_SESSION['de']}' AND sem='{$_SESSION['eo']}'";
$result2 = mysqli_query($connect,$query2);
$countelec = mysqli_num_rows($result2);
while($rs=mysqli_fetch_array($result2)){
  if(strpos( $variable,$rs['subnm']) !== false){
    foreach($teaconarr as $tcon){
      if($val==$tcon){
        echo "elect";
        echo $countelec;
        goto end;
      }
    }
    echo "false";
    goto end; 
    
  }
}

// Theory 
foreach($teaconarr as $tcon){
  if($val==$tcon){
    echo "true";
    $flag=1;
  }
}
if($flag==0){
  echo "false";
}
end:
?>