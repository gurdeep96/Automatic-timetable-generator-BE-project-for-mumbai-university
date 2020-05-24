<?php
//session_start();
include "connect.php";
//$year = $_POST['val'];
$year = "<script>document.writeln(abc);</script>";

$que1 = "SELECT * FROM storecarddetails WHERE semester='{$_SESSION['eo']}' AND department='{$_SESSION['de']}'";
$res1 = mysqli_query($connect,$que1);

$i=1; 
$lab = "_Lab";
while($rst1 = mysqli_fetch_array($res1)){
        ?>
        <script>
        var a = document.getElementById("<?php echo $rst1['cell'] ?>");
        if(<?php echo $rst1['card'] ?>.innerHTML.indexOf("<?php echo $lab ?>") !== -1){ 
               
            var temp = JSON.stringify("<?php echo $rst1['cell'] ?>");
            var temp2 = JSON.stringify(temp);
            var drid = temp2.substr(-5,2);
            //console.log(drid); 
            var child =  document.getElementById("<?php echo $rst1['cell']?>").childElementCount;
            //console.log(child);
            var val2 = parseInt(drid);
            var val3 = val2+1;
            var dayno = drid[drid.length -2];
        var temps = val3 % 10;
         if(dayno=="1"){
          dayindex=1;
        }
        else if(dayno=="2"){
          dayindex=8;
        
        }
        else if(dayno=="3"){
          dayindex=15;
        
        }
        else if(dayno=="4"){
          dayindex=22;
        
        }
        else if(dayno=="5"){
          dayindex=29;
        
        }
        var temp = dayindex+temps;
         var i;
                document.getElementById("<?php echo $rst1['card']; ?>").style.height="15px";
                var res = <?php echo $rst1['card'] ?>.innerHTML.replace("<br>", " ");
                var res2 = res.replace("<br>", " ");
                var res3 = res2.replace("<br>", " ");
                document.getElementById("<?php echo $rst1['card']?>").innerHTML= res3;
                document.getElementById("<?php echo $rst1['card']?>").style.fontSize = "6px";
                document.getElementById("<?php echo $rst1['card']?>").style.border = "thin solid black";
                if(child==0){
                      for(i=0;i<temp-1;i++){
                        if(document.getElementById("<?php echo $rst1['parentid']?>").children[i].colSpan=="2"){
                            temp=temp-1;
                        }
                    }
                document.getElementById("<?php echo $rst1['parentid']?>").deleteCell(temp);
                document.getElementById("<?php echo $rst1['cell']?>").colSpan="2";
                }
        }

        else
        {    
            var child =  document.getElementById("<?php echo $rst1['cell'] ?>").childElementCount;
            if(child==0){
                document.getElementById("<?php echo $rst1['card'] ?>").style.height="60px"; 
                document.getElementById("<?php echo $rst1['card'] ?>").style.fontSize = "8px"; 
            }
            else
            {   
                
                var temp = JSON.stringify("<?php echo $rst1['parentid'] ?>");
                var temp2 = JSON.stringify(temp);
                var year = temp2.substr(3,2);
                //let yr = JSON.parse('year');
                console.log(year);
              // $.post('show.php', {val:year});
                

                <?php 
				
                 $query2 = "SELECT subnm,subsn FROM subject WHERE subyear='$year' AND subelec=1 AND department='{$_SESSION['de']}' AND sem='{$_SESSION['eo']}'";
            $result2 = mysqli_query($connect,$query2);
	
            $countelec = mysqli_num_rows($result2); 
			?>
                 var cht = 60/<?php echo $countelec ?>; // 60px is card height
                 var cht2 = cht.toString();
                 var cht3 = cht2+"px";
                 document.getElementById("<?php echo $rst1['card'] ?>").style.height=cht3;
                document.getElementById("<?php echo $rst1['card'] ?>").style.fontSize = "8px";
                document.getElementById("<?php echo $rst1['card'] ?>").style.border = "thin solid black";
            
            }
        }
        a.appendChild(<?php echo $rst1['card'] ?>);
        </script>
        <?php 
}
?>
