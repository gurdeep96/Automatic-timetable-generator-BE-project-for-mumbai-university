<?php
//session_start();
include "connect.php";
//$year = $_POST['val'];
$query = "SELECT * FROM storecarddetails WHERE semester='{$_SESSION['eo']}' AND department='{$_SESSION['de']}'";
$result = mysqli_query($connect,$query);

$i=1;
$flg=0;
$lab = "_Lab";
while($rs = mysqli_fetch_array($result)){
        ?>
        <script>
        var a = document.getElementById("<?php echo $rs['cell'] ?>");
        if(<?php echo $rs['card'] ?>.innerHTML.indexOf("<?php echo $lab ?>") !== -1){ 
               
            var tem = JSON.stringify("<?php echo $rs['cell'] ?>");
            var tem2 = JSON.stringify(tem);
            var drid = tem2.substr(-5,2);
            var value = tem2.slice(3,-5);
            
            //console.log(abc); 
            var child =  document.getElementById("<?php echo $rs['cell']?>").childElementCount;
            //console.log(child);
            var val2 = parseInt(drid);
            var val3 = val2+1;
            var del;
            var dayno = drid[drid.length -2];
        var temp = val3 % 10;
        temp = temp+1;
         if(dayno=="1"){
         	if(value=="se"){del = "semon";}
            else if(value=="te"){del ="temon";}
            else if(value=="be"){del ="bemon";}
            else if(value=="sema"){del ="semamon";}
            else if(value=="semb"){del ="sembmon";}
            else if(value=="tema"){del ="temamon";}
            else if(value=="temb"){del ="tembmon";}
            else if(value=="bema"){del ="bemamon";}
            else if(value=="bemb"){del ="bembmon";}
            else if(value=="fea"){del ="feamon";}
            else if(value=="feb"){del ="febmon";}
            else if(value=="fec"){del ="fecmon";}
            else if(value=="fed"){del ="fedmon";}
            else if(value=="fee"){del ="feemon";}
            if(temp>2 && temp <5){
                temp=temp+1;
            }
            else if(temp >=5 && temp<8){
                temp = temp+2;
            }
            else
            	{temp=temp;}
        }
        else if(dayno=="2"){
           
            if(value=="se"){del = "setue";}
            else if(value=="te"){del ="tetue";}
            else if(value=="be"){del ="betue";}
            else if(value=="sema"){del ="sematue";}
            else if(value=="semb"){del ="sembtue";}
            else if(value=="tema"){del ="tematue";}
            else if(value=="temb"){del ="tembtue";}
            else if(value=="bema"){del ="bematue";}
            else if(value=="bemb"){del ="bembtue";}
            else if(value=="fea"){del ="featue";}
            else if(value=="feb"){del ="febtue";}
            else if(value=="fec"){del ="fectue";}
            else if(value=="fed"){del ="fedtue";}
            else if(value=="fee"){del ="feetue";}
        }
        else if(dayno=="3"){
          
            if(value=="se"){del = "sewed";}
            else if(value=="te"){del ="tewed";}
            else if(value=="be"){del ="bewed";}
    		else if(value=="sema"){del ="semawed";}
            else if(value=="semb"){del ="sembwed";}
            else if(value=="tema"){del ="temawed";}
            else if(value=="temb"){del ="tembwed";}
            else if(value=="bema"){del ="bemawed";}
            else if(value=="bemb"){del ="bembwed";}
            else if(value=="fea"){del ="feawed";}
            else if(value=="feb"){del ="febwed";}
            else if(value=="fec"){del ="fecwed";}
            else if(value=="fed"){del ="fedwed";}
            else if(value=="fee"){del ="feewed";}
        }
        else if(dayno=="4"){
          
            if(value=="se"){del = "sethu";}
            else if(value=="te"){del ="tethu";}
            else if(value=="be"){del ="bethu";}
            else if(value=="sema"){del ="semathu";}
            else if(value=="semb"){del ="sembthu";}
            else if(value=="tema"){del ="temathu";}
            else if(value=="temb"){del ="tembthu";}
            else if(value=="bema"){del ="bemathu";}
            else if(value=="bemb"){del ="bembthu";}
            else if(value=="fea"){del ="feathu";}
            else if(value=="feb"){del ="febthu";}
            else if(value=="fec"){del ="fecthu";}
            else if(value=="fed"){del ="fedthu";}
            else if(value=="fee"){del ="feethu";}
        }
        else if(dayno=="5"){
          
            if(value=="se"){del = "sefri";}
            else if(value=="te"){del ="tefri";}
            else if(value=="be"){del ="befri";}
            else if(value=="sema"){del ="semafri";}
            else if(value=="semb"){del ="sembfri";}
            else if(value=="tema"){del ="temafri";}
            else if(value=="temb"){del ="tembfri";}
            else if(value=="bema"){del ="bemafri";}
            else if(value=="bemb"){del ="bembfri";}
            else if(value=="fea"){del ="feafri";}
            else if(value=="feb"){del ="febfri";}
            else if(value=="fec"){del ="fecfri";}
            else if(value=="fed"){del ="fedfri";}
            else if(value=="fee"){del ="feefri";}
        }
        
        		//console.log(del);
        		var i,j=0;
                document.getElementById("<?php echo $rs['card']; ?>").style.height="12px";
                var res = <?php echo $rs['card'] ?>.innerHTML.replace("<br>", " ");
                var res2 = res.replace("<br>", " ");
                var res3 = res2.replace("<br>", " ");
                document.getElementById("<?php echo $rs['card']?>").innerHTML= res3;
                document.getElementById("<?php echo $rs['card']?>").style.fontSize = "8px";
                document.getElementById("<?php echo $rs['card']?>").style.fontFamily = "sans-serif";
                document.getElementById("<?php echo $rs['card']?>").style.border = "thin solid black";
                if(child==0){
                	for(i=0;i<temp-1;i++){
                        if(document.getElementById(del).children[i].colSpan=="2"){
                            temp=temp-1;
                            
                        }
                    }
                document.getElementById(del).deleteCell(temp);
                document.getElementById("<?php echo $rs['cell']?>").colSpan="2";
                }
        }

        else
        {    
           		document.getElementById("<?php echo $rs['card']?>").style.fontFamily = "sans-serif";
                document.getElementById("<?php echo $rs['card']?>").style.height="80px"; 
                document.getElementById("<?php echo $rs['card']?>").style.fontSize = "12px"; 
            
            
        }
       
        a.appendChild(<?php echo $rs['card'] ?>);
        </script>
        <?php 
}

?>
