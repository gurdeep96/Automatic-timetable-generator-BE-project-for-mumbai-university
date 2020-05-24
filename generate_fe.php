<?php 
session_start();

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

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Print Preview</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/printPreview.js"></script>
<script type="text/javascript">
        $(function(){
            $("#btnPrint").printPreview({
                obj2print:'#masterContent',
                width:'10100'
            });
        });
    </script>
<style> ype="text/css" media="print">
div.page {
height: 750px;
width: 800px;
filter: progid:D/XImageTransform.Microsoft.BasicImage(Rotation=1);}
    /*{
        margin:0px;
        padding:0px;
        font-family: arial;
    }
    body{
        background: #EEE;
    }
    #header{
        background: #666;
        color:#FFF;
        height:100px;
        padding: 50px;
    }
    .clear{
        clear:both;
    }
    #sideMenu{
        width:200px;
        float:left;
        background: #FFC;
        margin: 10px;
        min-height: 700px;
    }
    #sideMenu ul li{
        list-style: none;
        padding: 5px;
        border-bottom: 1px dotted #CCC;
    }
    #masterContent{
        background: #FFF;
        float: left;
        width: 760px;
        padding: 10px;
        margin: 10px;
    }
    #masterContent ol{
        margin-left: 20px;
    }
    #masterContent pre{
        background: #EEE;
        color:blue;
        padding:10px;
        width: 96%;
        display: inline-block;
        overflow: auto;
        font-size: 85%;
    }
    .note{
        color:red;
    }
    #footer{
        text-align: center;
        padding: 20px;
        font-size: 85%;
        background: #666;
        color:#FFF;
    }
    #hi{
		margin-left:200px;
    }
    #btnprint{
        text-align: center;
        } */
</style>
  <link rel="stylesheet" href="css/generate.css">

</head>
<body>

   <div id="hi">
        <div id="masterContent">
 						  <br>
                          <br>
                          <h4 align="center" > SE__ </h4>
        <table border="5" cellspacing="5" align="center" cellpadding="10">
                        <tr>
                         <td align="center"><input hidden unchecked type="checkbox"></input>
                         <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:00-11:15</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>1:15-2:00</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         </tr>
                         <tr>
                          <td align="center">MONDAY</td>
                          <td id="se10" align="center"></td>
                          <td id="se11"align="center"></td>
                          <td rowspan="6"align="center"></td>
                          <td id="se12"align="center"></td>
                          <td id="se13"align="center"></td>
                          <td rowspan="6"align="center"></td>
                          <td id="se14"align="center"></td>
                          <td id="se15"align="center"></td>
                          <td id="se16"align="center"></td>
                          </tr>
                          <tr>
                          <td align="center">TUESDAY
                          <td id="se20"align="center"></td>
                          <td id="se21"align="center"></td>
                          <td id="se22"align="center"></td>
                          <td id="se23"align="center"></td>
                          <td id="se24"align="center"></td>
                          <td id="se25"align="center"></td>
                          <td id="se26"align="center"></td>  
                          </tr>
                          <tr>
                          <td align="center">WEDNESDAY
                          <td id="se30"align="center"></td>
                          <td id="se31" align="center"></td>
                          <td id="se32"align="center"></td>
                          <td id="se33"align="center"></td>
                          <td id="se34"align="center"></td>
                          <td id="se35" align="center"></td>
                          <td id="se36" align="center"></td>
                          </tr>
                          <tr>
                          <td align="center">THURSDAY
                          <td id="se40"align="center"></td>
                          <td id="se41"align="center"></td>
                          <td id="se42"align="center"></td>
                          <td id="se43"align="center"></td>
                          <td id="se44"align="center"></td>
                          <td id="se45"align="center"></td>
                          <td id="se46"align="center"></td>
                          </tr>
                          <tr>
                           <td align="center">FRIDAY
                           <td id="se50"align="center"></td>
                           <td id="se51"align="center"></td>
                           <td id="se52"align="center"></td>
                           <td id="se53"align="center"></td>
                           <td id="se54"align="center"></td>
                           <td id="se55"align="center"></td>
                           <td id="se56"align="center"></td>
                          </tr>
                          </table>
                           <br>
                          <h4 align="center" > TE__ </h4>
                          <br>
                           <table border="5" cellspacing="5" align="center" cellpadding="10">
                        <tr>
                         <td align="center"><input hidden unchecked type="checkbox"></input>
                         <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:00-11:15</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>1:15-2:00</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         </tr>
                         <tr>
                          <td align="center">MONDAY</td>
                          <td id="te10"align="center"></td>
                          <td id="te11"align="center"></td>
                          <td rowspan="6"align="center"></td>
                          <td id="te12"align="center"></td>
                          <td id="te13"align="center"></td>
                          <td rowspan="6"align="center"></td>
                          <td id="te14"align="center"></td>
                          <td id="te15"align="center"></td>
                          <td id="te16"align="center"></td>
                          </tr>
                          <tr>
                          <td align="center">TUESDAY
                          <td id="te20"align="center"></td>
                          <td id="te21"align="center"></td>
                          <td id="te22"align="center"></td>
                          <td id="te23"align="center"></td>
                          <td id="te24"align="center"></td>
                          <td id="te25"align="center"></td>
                          <td id="te26"align="center"></td>  
                          </tr>
                          <tr>
                          <td align="center">WEDNESDAY
                          <td id="te30"align="center"></td>
                          <td id="te31"align="center"></td>
                          <td id="te32"align="center"></td>
                          <td id="te33"align="center"></td>
                          <td id="te34"align="center"></td>
                          <td id="te35"align="center"></td>
                          <td id="te36"align="center"></td>
                          </tr>
                          <tr>
                          <td align="center">THURSDAY
                          <td id="te40"align="center"></td>
                          <td id="te41"align="center"></td>
                          <td id="te42"align="center"></td>
                          <td id="te43"align="center"></td>
                          <td id="te44"align="center"></td>
                          <td id="te45"align="center"></td>
                          <td id="te46"align="center"></td>
                          </tr>
                          <tr>
                           <td align="center">FRIDAY
                           <td id="te50"align="center"></td>
                           <td id="te51"align="center"></td>
                           <td id="te52"align="center"></td>
                           <td id="te53"align="center"></td>
                           <td id="te54"align="center"></td>
                           <td id="te55"align="center"></td>
                           <td id="te56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 align="center" > BE__ </h4>
                          <br>
                           <table border="5" cellspacing="5" align="center" cellpadding="10">
                        <tr>
                         <td align="center"><input hidden unchecked type="checkbox"></input>
                         <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:00-11:15</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>1:15-2:00</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         </tr>
                         <tr>
                          <td align="center">MONDAY</td>
                          <td id="be10"align="center"></td>
                          <td id="be11"align="center"></td>
                          <td rowspan="6"align="center"></td>
                          <td id="be12"align="center"></td>
                          <td id="be13"align="center"></td>
                          <td rowspan="6"align="center"></td>
                          <td id="be14"align="center"></td>
                          <td id="be15"align="center"></td>
                          <td id="be16"align="center"></td>
                          </tr>
                          <tr>
                          <td align="center">TUESDAY
                          <td id="be20"align="center"></td>
                          <td id="be21"align="center"></td>
                          <td id="be22"align="center"></td>
                          <td id="be23"align="center"></td>
                          <td id="be24"align="center"></td>
                          <td id="be25"align="center"></td>
                          <td id="be26"align="center"></td>  
                          </tr>
                          <tr>
                          <td align="center">WEDNESDAY
                          <td id="be30"align="center"></td>
                          <td id="be31"align="center"></td>
                          <td id="be32"align="center"></td>
                          <td id="be33"align="center"></td>
                          <td id="be34"align="center"></td>
                          <td id="be35"align="center"></td>
                          <td id="be36"align="center"></td>
                          </tr>
                          <tr>
                          <td align="center">THURSDAY
                          <td id="be40"align="center"></td>
                          <td id="be41"align="center"></td>
                          <td id="be42"align="center"></td>
                          <td id="be43"align="center"></td>
                          <td id="be44"align="center"></td>
                          <td id="be45"align="center"></td>
                          <td id="be46"align="center"></td>
                          </tr>
                          <tr>
                           <td align="center">FRIDAY
                           <td id="be50"align="center"></td>
                           <td id="be51"align="center"></td>
                           <td id="be52"align="center"></td>
                           <td id="be53"align="center"></td>
                           <td id="be54"align="center"></td>
                           <td id="be55"align="center"></td>
                           <td id="be56"align="center"></td>
                          </tr>
                          </table>
                          <br>
 <button  id="btnPrint" class="btn btn-primary" style="float:right">Print Preview</button>
 <div id="tray" hidden>
                      <?php
                        include "connect.php";
                        
                        echo "FE<br>";
                        $query = "SELECT * FROM lecture WHERE class='fe' AND department='{$_SESSION['de']}' AND sem='{$_SESSION['eo']}'";
                        $result = mysqli_query($connect,$query); 
                        $query2 = "SELECT * FROM subject WHERE department='{$_SESSION['de']}'";
                        $result2 = mysqli_query($connect,$query2);
                        $query3 = "SELECT * FROM teachercolor";
                        $result3 = mysqli_query($connect,$query3);
                        $i=1;
                        $k=0;
                           echo '<div class="rowcard" >';                         
                            while($row=mysqli_fetch_array($result)){

                                                    while($rs=mysqli_fetch_array($result2)){
                                                        if($rs['subnm']==$row['subnm'] )
                                                        {
                                                          if($row['lectype']=="Th")
                                                             $count = $rs['subth'];
                                                           elseif($row['lectype']=="Tut")
                                                              $count = $rs['subtu'];
                                                            else
                                                              $count = $rs['subpr'];

                                                            break;
                                                        }
                                                      }mysqli_data_seek($result2,0);
                                                      while($count>0){
                                                         while($rs3=mysqli_fetch_array($result3)){
                                                        if($rs3['teanm']==$row['teanm'] ){
                                                     break;}
                                                    } mysqli_data_seek($result3,0);
                                                    ?>

                                                    <div id="fe" class="columncard" ><div  id="fedrag<?php echo $i.$count;?>" class="card" draggable="true" ondragstart="drag(event)"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>

                                                    <script>
                                                    
                                                    var x = document.getElementsByClassName("card");
                                                    x[<?php echo $k;?>].style.backgroundColor = "<?php echo $rs3['teacol']; ?>";
                                                    
                                                    </script>
                                                   <?php $k++;$count--;
                                                     }$i++;
                                                  }
                          echo '</div>';
                      ?>
                      
                      <br><br>
                      <?php
                        include "connect.php";
                        
                        echo "SE<br>";
                        $query = "SELECT * FROM lecture WHERE class='se' AND department='{$_SESSION['de']}' AND sem='{$_SESSION['eo']}'";
                        $result = mysqli_query($connect,$query); 
                        $query2 = "SELECT * FROM subject  WHERE department='{$_SESSION['de']}'";
                        $result2 = mysqli_query($connect,$query2);
                        $query3 = "SELECT * FROM teachercolor";
                        $result3 = mysqli_query($connect,$query3);
                        $i=1;
                        
                          
                           echo '<div class="rowcard" >';  

                            while($row=mysqli_fetch_array($result)){
                                                     
                                                    while($rs=mysqli_fetch_array($result2)){
                                                        if($rs['subnm']==$row['subnm'] )
                                                        {
                                                          if($row['lectype']=="Th")
                                                             $count = $rs['subth'];
                                                           elseif($row['lectype']=="Tut")
                                                              $count = $rs['subtu'];
                                                            else
                                                              $count = $rs['subpr']/2;

                                                            break;
                                                        }
                                                      } mysqli_data_seek($result2,0);

                                                      while($count>0){
                                                     
                                                        while($rs3=mysqli_fetch_array($result3)){
                                                        if($rs3['teanm']==$row['teanm'] ){
                                                     break;}
                                                    } mysqli_data_seek($result3,0);
                                                    ?>
                                                    <div id ="se" class="columncard" ondrop="drop2(event)" ondragover="allowDrop(event)"> <div id="sedrag<?php echo $i.$count;?>" class="card" draggable="true" ondragstart="drag(event)" style="cursor: pointer;"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>
                                                   <script>
                                                    
                                                    var x = document.getElementsByClassName("card");
                                                    x[<?php echo $k;?>].style.backgroundColor = "<?php echo $rs3['teacol']; ?>";
                                                    
                                                    </script>
                                                    
                                                   <?php $k++;$count--;
                                                  
                                                    }$i++; 
                                                  }

                                                  
                          echo '</div>';
                      ?>
                      <br><br><br>
                      
                       <?php
                        include "connect.php";
                        echo "TE<br>";
                        $query = "SELECT * FROM lecture WHERE class='te' AND department='{$_SESSION['de']}' AND sem='{$_SESSION['eo']}'";
                        $result = mysqli_query($connect,$query); 
                        $query2 = "SELECT * FROM subject WHERE department='{$_SESSION['de']}'";
                        $result2 = mysqli_query($connect,$query2);
                        $query3 = "SELECT * FROM teachercolor";
                        $result3 = mysqli_query($connect,$query3);
                        $i=1;
                        
                           echo '<div class="rowcard">';                         
                            while($row=mysqli_fetch_array($result)){
                                                      
                                                    while($rs=mysqli_fetch_array($result2)){
                                                        if($rs['subnm']==$row['subnm'] )
                                                        {
                                                          if($row['lectype']=="Th")
                                                             $count = $rs['subth'];
                                                           elseif($row['lectype']=="Tut")
                                                              $count = $rs['subtu'];
                                                            else
                                                              $count = $rs['subpr'];

                                                            break;
                                                        }
                                                      }mysqli_data_seek($result2,0);
                                                      ?><script>
                                                      var z=10;
                                                      var top1="20px";
                                                      var left1="20px";
                                                      </script>
                                                      <?php
                                                      while($count>0){

                                                        while($rs3=mysqli_fetch_array($result3)){
                                                        if($rs3['teanm']==$row['teanm'] ){
                                                     break;}
                                                    } mysqli_data_seek($result3,0);
                                                    ?>
                                                      

                                                    <div id="te" class="columncard" ondrop="drop2(event)" ondragover="allowDrop(event)" ><div  id="tedrag<?php echo $i.$count;?>" class="card" draggable="true" ondragstart="drag(event)"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>
                                                    <script>
                                                    
                                                    var x = document.getElementsByClassName("card");
                                                    x[<?php echo $k;?>].style.backgroundColor = "<?php echo $rs3['teacol']; ?>";
                                                    
                                                    </script>
                                                    <script>
                                                     
                                                    var x = document.getElementsByClassName("card");
                                                    x[<?php echo $k;?>].style.zIndex = "z";
                                                    
                                                    //x[<?php echo $k;?>].style.top = top1;
                                                    //x[<?php echo $k;?>].style.left = left1;
                                                    
                                                    //var top1 = parseInt(top1,10)+parseInt("20px",10)+"px";
                                                    //var left1 = parseInt(left1,10)+parseInt("20px",10)+"px";
                                                    z = z+1;
                                                      </script> 
                                                   <?php $k++;$count--;
                                                     }$i++;
                                                  }
                          echo '</div>';
                      ?>
                      <br><br><br>
                       <?php
                        include "connect.php";
                        echo "BE<br>";
                        $query = "SELECT * FROM lecture WHERE class='be' AND department='{$_SESSION['de']}' AND sem='{$_SESSION['eo']}'";
                        $result = mysqli_query($connect,$query); 
                        $query2 = "SELECT * FROM subject";
                        $result2 = mysqli_query($connect,$query2);
                        $query3 = "SELECT * FROM teachercolor";
                        $result3 = mysqli_query($connect,$query3);
                        $i=1;
                           echo '<div class="rowcard">';                         
                            while($row=mysqli_fetch_array($result)){
                                                    
                                                    while($rs=mysqli_fetch_array($result2)){
                                                        if($rs['subnm']==$row['subnm'] )
                                                        {
                                                          if($row['lectype']=="Th")
                                                             $count = $rs['subth'];
                                                           elseif($row['lectype']=="Tut")
                                                              $count = $rs['subtu'];
                                                            else
                                                              $count = $rs['subpr'];

                                                            break;
                                                        }
                                                      }mysqli_data_seek($result2,0);
                                                      while($count>0){

                                                        while($rs3=mysqli_fetch_array($result3)){
                                                        if($rs3['teanm']==$row['teanm'] ){
                                                     break;}
                                                    } mysqli_data_seek($result3,0);
                                                    ?>                                                      
                                                    <div id="be" class="columncard" ondrop="drop2(event)" ondragover="allowDrop(event)" ><div id="bedrag<?php echo $i.$count;?>" class="card"draggable="true" ondragstart="drag(event)"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>

                                                    <script>
                                                    
                                                    var x = document.getElementsByClassName("card");
                                                    x[<?php echo $k;?>].style.backgroundColor = "<?php echo $rs3['teacol']; ?>";
                                                    
                                                    </script>
                                                   <?php $k++;$count--;
                                                     }$i++;
                                                  }
                          echo '</div>';
                      ?>
                      </div>

      
  
</body>
</html>
<?php 
if($_SESSION['de']=="extc" || $_SESSION['de']=="EXTC" || $_SESSION['de']=="it" || $_SESSION['de']=="IT" || $_SESSION['de']=="comps" || $_SESSION['de']=="COMPS"){
  ?>
  <script>document.getElementById("mytable").style.display="block";</script>
  <script>document.getElementById("myhead").style.display="block";</script>
  <?php
  }
  if($_SESSION['de']=="fe" || $_SESSION['de']=="FE"){
    ?>
    <script>document.getElementById("fetable").style.display="block";</script>
    <script>document.getElementById("fehead").style.display="block";</script>
    <?php
  }
  if($_SESSION['de']=="mech" || $_SESSION['de']=="MECH"){
    ?>
    <script>document.getElementById("mechatable").style.display="block";</script>
    <script>document.getElementById("meahead").style.display="block";</script>
    <script>document.getElementById("mechbtable").style.display="block";</script>
    <script>document.getElementById("mebhead").style.display="block";</script>
    <?php 
  }
  include "show.php";
?>
