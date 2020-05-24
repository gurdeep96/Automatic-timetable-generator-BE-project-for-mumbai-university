<?php 
session_start();
include "connect.php";
if (isset($_SESSION['login']) && $_SESSION['login'] == true)
{    }
else
     header("Location: admin.php");   

if(isset($_POST['departmentname']) && isset($_POST['evenodd'])){
$_SESSION['deadmin']=$_POST['departmentname'];
$_SESSION['eoadmin']=$_POST['evenodd'];
} 

if(!isset($_SESSION['eoadmin'])){
  $mon = date('m');
  if($mon>5 && $mon <12){
    $_SESSION['eoadmin']="odd";
  }
  else
    $_SESSION['eoadmin']="even";
}
$teaprint = $_POST['teachernameadmin'];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty-Wise timetable</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/generate.js"></script>
<script type="text/javascript">
        $(function(){
            $("#btnPrint").printPreview({
                obj2print:'#masterContent',
                width:'10100'
            });
        });
    </script>
<style> 
div.page {
height: 750px;
width: 800px;
filter: progid:D/XImageTransform.Microsoft.BasicImage(Rotation=1);}
  table,tr,td{
    page-break-inside: avoid;
    page-break-after: always;
    border-collapse: collapse;
    page-break-before: auto;
  }
  table tbody tr td{
    font-size: 15px;
}
table:last-child {
     page-break-after: auto;
}
 
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
	#vertical-orientation {
    transform: rotate(270deg);
        transform-origin: top 0;
    padding: 10px;
    text-transform: uppercase;
  }

</style>
  <link rel="stylesheet" href="css/generate.css">

</head>
<body onload="window.print()">

   <div id="hi">
        <div id="masterContent">
 						  <br>
                          <h3>&emsp;<?php echo strtoupper($teaprint) ?></h3><br>
                          <h4 id ="sehead" align="center" style="display:none;"><?php echo "SE ".strtoupper($_SESSION['deadmin']); if($_SESSION['eoadmin']=='even') echo 'sem4'; else echo 'sem3'; ?> </h4>
                          <br>
                          <table id="semytable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="semon">
                          <td align="center">MONDAY</td>
                          <td id="se10" align="center"></td>
                          <td id="se11" align="center"></td>
                          <td rowspan="6" align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
						  <td id="se12" align="center"></td>
                          <td id="se13" align="center"></td>
                          <td rowspan="6" align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
						  <td id="se14" align="center"></td>
                          <td id="se15" align="center"></td>
                          <td id="se16" align="center"></td>
                          </tr>
                          <tr id="setue">
                          <td align="center">TUESDAY
                          <td id="se20" align="center"></td>
                          <td id="se21" align="center"></td>
                          <td id="se22" align="center"></td>
                          <td id="se23" align="center"></td>
                          <td id="se24" align="center"></td>
                          <td id="se25" align="center"></td>
                          <td id="se26" align="center"></td>  
                          </tr>
                          <tr id="sewed">
                          <td align="center">WEDNESDAY
                          <td id="se30" align="center"></td>
                          <td id="se31" align="center"></td>
                          <td id="se32" align="center"></td>
                          <td id="se33" align="center"></td>
                          <td id="se34" align="center"></td>
                          <td id="se35" align="center"></td>
                          <td id="se36" align="center"></td>
                          </tr>
                          <tr id="sethu">
                          <td align="center">THURSDAY
                          <td id="se40" align="center"></td>
                          <td id="se41" align="center"></td>
                          <td id="se42" align="center"></td>
                          <td id="se43" align="center"></td>
                          <td id="se44" align="center"></td>
                          <td id="se45" align="center"></td>
                          <td id="se46" align="center"></td>
                          </tr>
                          <tr id="sefri">
                           <td align="center">FRIDAY
                           <td id="se50" align="center"></td>
                           <td id="se51" align="center"></td>
                           <td id="se52" align="center"></td>
                           <td id="se53" align="center"></td>
                           <td id="se54" align="center"></td>
                           <td id="se55" align="center"></td>
                           <td id="se56" align="center"></td>
                          </tr>
                          </table>
                           <br>
                          <h4 id ="tehead" align="center" style="display:none;" ><?php echo "TE ".strtoupper($_SESSION['deadmin']); if($_SESSION['eoadmin']=='even') echo 'sem6'; else echo 'sem5';?> </h4>
                          <br>
                           <table id="temytable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="temon">
                          <td align="center">MONDAY</td>
                          <td id="te10"align="center"></td>
                          <td id="te11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="te12"align="center"></td>
                          <td id="te13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="te14"align="center"></td>
                          <td id="te15"align="center"></td>
                          <td id="te16"align="center"></td>
                          </tr>
                          <tr id="tetue">
                          <td align="center">TUESDAY
                          <td id="te20"align="center"></td>
                          <td id="te21"align="center"></td>
                          <td id="te22"align="center"></td>
                          <td id="te23"align="center"></td>
                          <td id="te24"align="center"></td>
                          <td id="te25"align="center"></td>
                          <td id="te26"align="center"></td>  
                          </tr>
                          <tr id="tewed">
                          <td align="center">WEDNESDAY
                          <td id="te30"align="center"></td>
                          <td id="te31"align="center"></td>
                          <td id="te32"align="center"></td>
                          <td id="te33"align="center"></td>
                          <td id="te34"align="center"></td>
                          <td id="te35"align="center"></td>
                          <td id="te36"align="center"></td>
                          </tr>
                          <tr id="tethu">
                          <td align="center">THURSDAY
                          <td id="te40"align="center"></td>
                          <td id="te41"align="center"></td>
                          <td id="te42"align="center"></td>
                          <td id="te43"align="center"></td>
                          <td id="te44"align="center"></td>
                          <td id="te45"align="center"></td>
                          <td id="te46"align="center"></td>
                          </tr>
                          <tr id="tefri">
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
                          <h4 id ="behead" align="center" style="display:none;" ><?php echo "BE ".strtoupper($_SESSION['deadmin']); if($_SESSION['eoadmin']=='even') echo 'sem8'; else echo 'sem7';?> </h4>
                          <br>
                           <table id="bemytable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="bemon">
                          <td align="center">MONDAY</td>
                          <td id="be10"align="center"></td>
                          <td id="be11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="be12"align="center"></td>
                          <td id="be13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
						  <td id="be14"align="center"></td>
                          <td id="be15"align="center"></td>
                          <td id="be16"align="center"></td>
                          </tr>
                          <tr id="betue">
                          <td align="center">TUESDAY
                          <td id="be20"align="center"></td>
                          <td id="be21"align="center"></td>
                          <td id="be22"align="center"></td>
                          <td id="be23"align="center"></td>
                          <td id="be24"align="center"></td>
                          <td id="be25"align="center"></td>
                          <td id="be26"align="center"></td>  
                          </tr>
                          <tr id="bewed">
                          <td align="center">WEDNESDAY
                          <td id="be30"align="center"></td>
                          <td id="be31"align="center"></td>
                          <td id="be32"align="center"></td>
                          <td id="be33"align="center"></td>
                          <td id="be34"align="center"></td>
                          <td id="be35"align="center"></td>
                          <td id="be36"align="center"></td>
                          </tr>
                          <tr id="bethu">
                          <td align="center">THURSDAY
                          <td id="be40"align="center"></td>
                          <td id="be41"align="center"></td>
                          <td id="be42"align="center"></td>
                          <td id="be43"align="center"></td>
                          <td id="be44"align="center"></td>
                          <td id="be45"align="center"></td>
                          <td id="be46"align="center"></td>
                          </tr>
                          <tr id="befri">
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
                          
                          <h4 id ="semahead" align="center" style="display:none;" ><?php echo "SE ".strtoupper($_SESSION['deadmin'])." A"; if($_SESSION['eoadmin']=='even') echo 'sem4'; else echo 'sem3';?> </h4>
                          <br>
                           <table id="sematable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="semamon">
                          <td align="center">MONDAY</td>
                          <td id="sema10"align="center"></td>
                          <td id="sema11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="sema12"align="center"></td>
                          <td id="sema13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
						  <td id="sema14"align="center"></td>
                          <td id="sema15"align="center"></td>
                          <td id="sema16"align="center"></td>
                          </tr>
                          <tr id="sematue">
                          <td align="center">TUESDAY
                          <td id="sema20"align="center"></td>
                          <td id="sema21"align="center"></td>
                          <td id="sema22"align="center"></td>
                          <td id="sema23"align="center"></td>
                          <td id="sema24"align="center"></td>
                          <td id="sema25"align="center"></td>
                          <td id="sema26"align="center"></td>  
                          </tr>
                          <tr id="semawed">
                          <td align="center">WEDNESDAY
                          <td id="sema30"align="center"></td>
                          <td id="sema31"align="center"></td>
                          <td id="sema32"align="center"></td>
                          <td id="sema33"align="center"></td>
                          <td id="sema34"align="center"></td>
                          <td id="sema35"align="center"></td>
                          <td id="sema36"align="center"></td>
                          </tr>
                          <tr id="semathu">
                          <td align="center">THURSDAY
                          <td id="sema40"align="center"></td>
                          <td id="sema41"align="center"></td>
                          <td id="sema42"align="center"></td>
                          <td id="sema43"align="center"></td>
                          <td id="sema44"align="center"></td>
                          <td id="sema45"align="center"></td>
                          <td id="sema46"align="center"></td>
                          </tr>
                          <tr id="semafri">
                           <td align="center">FRIDAY
                           <td id="sema50"align="center"></td>
                           <td id="sema51"align="center"></td>
                           <td id="sema52"align="center"></td>
                           <td id="sema53"align="center"></td>
                           <td id="sema54"align="center"></td>
                           <td id="sema55"align="center"></td>
                           <td id="sema56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="temahead" align="center" style="display:none;" ><?php echo "TE ".strtoupper($_SESSION['deadmin'])." A"; if($_SESSION['eoadmin']=='even') echo 'sem6'; else echo 'sem5';?> </h4>
                          <br>
                           <table id="tematable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="temamon">
                          <td align="center">MONDAY</td>
                          <td id="tema10"align="center"></td>
                          <td id="tema11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="tema12"align="center"></td>
                          <td id="tema13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="tema14"align="center"></td>
                          <td id="tema15"align="center"></td>
                          <td id="tema16"align="center"></td>
                          </tr>
                          <tr id="tematue">
                          <td align="center">TUESDAY
                          <td id="tema20"align="center"></td>
                          <td id="tema21"align="center"></td>
                          <td id="tema22"align="center"></td>
                          <td id="tema23"align="center"></td>
                          <td id="tema24"align="center"></td>
                          <td id="tema25"align="center"></td>
                          <td id="tema26"align="center"></td>  
                          </tr>
                          <tr id="temawed">
                          <td align="center">WEDNESDAY
                          <td id="tema30"align="center"></td>
                          <td id="tema31"align="center"></td>
                          <td id="tema32"align="center"></td>
                          <td id="tema33"align="center"></td>
                          <td id="tema34"align="center"></td>
                          <td id="tema35"align="center"></td>
                          <td id="tema36"align="center"></td>
                          </tr>
                          <tr id="temathu">
                          <td align="center">THURSDAY
                          <td id="tema40"align="center"></td>
                          <td id="tema41"align="center"></td>
                          <td id="tema42"align="center"></td>
                          <td id="tema43"align="center"></td>
                          <td id="tema44"align="center"></td>
                          <td id="tema45"align="center"></td>
                          <td id="tema46"align="center"></td>
                          </tr>
                          <tr id="temafri">
                           <td align="center">FRIDAY
                           <td id="tema50"align="center"></td>
                           <td id="tema51"align="center"></td>
                           <td id="tema52"align="center"></td>
                           <td id="tema53"align="center"></td>
                           <td id="tema54"align="center"></td>
                           <td id="tema55"align="center"></td>
                           <td id="tema56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="bemahead" align="center"  style="display:none;"><?php echo "BE ".strtoupper($_SESSION['deadmin'])." A"; if($_SESSION['eoadmin']=='even') echo 'sem8'; else echo 'sem7';?> </h4>
                          <br>
                           <table id="bematable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="bemamon">
                          <td align="center">MONDAY</td>
                          <td id="bema10"align="center"></td>
                          <td id="bema11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="bema12"align="center"></td>
                          <td id="bema13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="bema14"align="center"></td>
                          <td id="bema15"align="center"></td>
                          <td id="bema16"align="center"></td>
                          </tr>
                          <tr id="bematue">
                          <td align="center">TUESDAY
                          <td id="bema20"align="center"></td>
                          <td id="bema21"align="center"></td>
                          <td id="bema22"align="center"></td>
                          <td id="bema23"align="center"></td>
                          <td id="bema24"align="center"></td>
                          <td id="bema25"align="center"></td>
                          <td id="bema26"align="center"></td>  
                          </tr>
                          <tr id="bemawed">
                          <td align="center">WEDNESDAY
                          <td id="bema30"align="center"></td>
                          <td id="bema31"align="center"></td>
                          <td id="bema32"align="center"></td>
                          <td id="bema33"align="center"></td>
                          <td id="bema34"align="center"></td>
                          <td id="bema35"align="center"></td>
                          <td id="bema36"align="center"></td>
                          </tr>
                          <tr id="bemathu">
                          <td align="center">THURSDAY
                          <td id="bema40"align="center"></td>
                          <td id="bema41"align="center"></td>
                          <td id="bema42"align="center"></td>
                          <td id="bema43"align="center"></td>
                          <td id="bema44"align="center"></td>
                          <td id="bema45"align="center"></td>
                          <td id="bema46"align="center"></td>
                          </tr>
                          <tr id="bemafri">
                           <td align="center">FRIDAY
                           <td id="bema50"align="center"></td>
                           <td id="bema51"align="center"></td>
                           <td id="bema52"align="center"></td>
                           <td id="bema53"align="center"></td>
                           <td id="bema54"align="center"></td>
                           <td id="bema55"align="center"></td>
                           <td id="bema56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="sembhead" align="center" style="display:none;" ><?php echo "SE ".strtoupper($_SESSION['deadmin'])." B"; if($_SESSION['eoadmin']=='even') echo 'sem4'; else echo 'sem3';?> </h4>
                          <br>
                           <table id="sembtable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="sembmon">
                          <td align="center">MONDAY</td>
                          <td id="semb10"align="center"></td>
                          <td id="semb11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="semb12"align="center"></td>
                          <td id="semb13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="semb14"align="center"></td>
                          <td id="semb15"align="center"></td>
                          <td id="semb16"align="center"></td>
                          </tr>
                          <tr id="sembtue">
                          <td align="center">TUESDAY
                          <td id="semb20"align="center"></td>
                          <td id="semb21"align="center"></td>
                          <td id="semb22"align="center"></td>
                          <td id="semb23"align="center"></td>
                          <td id="semb24"align="center"></td>
                          <td id="semb25"align="center"></td>
                          <td id="semb26"align="center"></td>  
                          </tr>
                          <tr id="sembwed">
                          <td align="center">WEDNESDAY
                          <td id="semb30"align="center"></td>
                          <td id="semb31"align="center"></td>
                          <td id="semb32"align="center"></td>
                          <td id="semb33"align="center"></td>
                          <td id="semb34"align="center"></td>
                          <td id="semb35"align="center"></td>
                          <td id="semb36"align="center"></td>
                          </tr>
                          <tr id="sembthu">
                          <td align="center">THURSDAY
                          <td id="semb40"align="center"></td>
                          <td id="semb41"align="center"></td>
                          <td id="semb42"align="center"></td>
                          <td id="semb43"align="center"></td>
                          <td id="semb44"align="center"></td>
                          <td id="semb45"align="center"></td>
                          <td id="semb46"align="center"></td>
                          </tr>
                          <tr id="sembfri">
                           <td align="center">FRIDAY
                           <td id="semb50"align="center"></td>
                           <td id="semb51"align="center"></td>
                           <td id="semb52"align="center"></td>
                           <td id="semb53"align="center"></td>
                           <td id="semb54"align="center"></td>
                           <td id="semb55"align="center"></td>
                           <td id="semb56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="tembhead" align="center"  style="display:none;"><?php echo "TE ".strtoupper($_SESSION['deadmin'])." B"; if($_SESSION['eoadmin']=='even') echo 'sem6'; else echo 'sem5';?> </h4>
                          <br>
                           <table id="tembtable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="tembmon">
                          <td align="center">MONDAY</td>
                          <td id="temb10"align="center"></td>
                          <td id="temb11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="temb12"align="center"></td>
                          <td id="temb13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="temb14"align="center"></td>
                          <td id="temb15"align="center"></td>
                          <td id="temb16"align="center"></td>
                          </tr>
                          <tr id="tembtue">
                          <td align="center">TUESDAY
                          <td id="temb20"align="center"></td>
                          <td id="temb21"align="center"></td>
                          <td id="temb22"align="center"></td>
                          <td id="temb23"align="center"></td>
                          <td id="temb24"align="center"></td>
                          <td id="temb25"align="center"></td>
                          <td id="temb26"align="center"></td>  
                          </tr>
                          <tr id="tembwed">
                          <td align="center">WEDNESDAY
                          <td id="temb30"align="center"></td>
                          <td id="temb31"align="center"></td>
                          <td id="temb32"align="center"></td>
                          <td id="temb33"align="center"></td>
                          <td id="temb34"align="center"></td>
                          <td id="temb35"align="center"></td>
                          <td id="temb36"align="center"></td>
                          </tr>
                          <tr id="tembthu">
                          <td align="center">THURSDAY
                          <td id="temb40"align="center"></td>
                          <td id="temb41"align="center"></td>
                          <td id="temb42"align="center"></td>
                          <td id="temb43"align="center"></td>
                          <td id="temb44"align="center"></td>
                          <td id="temb45"align="center"></td>
                          <td id="temb46"align="center"></td>
                          </tr>
                          <tr id="tembfri">
                           <td align="center">FRIDAY
                           <td id="temb50"align="center"></td>
                           <td id="temb51"align="center"></td>
                           <td id="temb52"align="center"></td>
                           <td id="temb53"align="center"></td>
                           <td id="temb54"align="center"></td>
                           <td id="temb55"align="center"></td>
                           <td id="temb56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="bembhead" align="center" style="display:none;"><?php echo "BE ".strtoupper($_SESSION['deadmin'])." B"; if($_SESSION['eoadmin']=='even') echo 'sem8'; else echo 'sem7';?></h4>
                          <br>
                           <table id="bembtable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="bembmon">
                          <td align="center">MONDAY</td>
                          <td id="bemb10"align="center"></td>
                          <td id="bemb11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="bemb12"align="center"></td>
                          <td id="bemb13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="bemb14"align="center"></td>
                          <td id="bemb15"align="center"></td>
                          <td id="bemb16"align="center"></td>
                          </tr>
                          <tr id="bembtue">
                          <td align="center">TUESDAY
                          <td id="bemb20"align="center"></td>
                          <td id="bemb21"align="center"></td>
                          <td id="bemb22"align="center"></td>
                          <td id="bemb23"align="center"></td>
                          <td id="bemb24"align="center"></td>
                          <td id="bemb25"align="center"></td>
                          <td id="bemb26"align="center"></td>  
                          </tr>
                          <tr id="bembwed">
                          <td align="center">WEDNESDAY
                          <td id="bemb30"align="center"></td>
                          <td id="bemb31"align="center"></td>
                          <td id="bemb32"align="center"></td>
                          <td id="bemb33"align="center"></td>
                          <td id="bemb34"align="center"></td>
                          <td id="bemb35"align="center"></td>
                          <td id="bemb36"align="center"></td>
                          </tr>
                          <tr id="bembthu">
                          <td align="center">THURSDAY
                          <td id="bemb40"align="center"></td>
                          <td id="bemb41"align="center"></td>
                          <td id="bemb42"align="center"></td>
                          <td id="bemb43"align="center"></td>
                          <td id="bemb44"align="center"></td>
                          <td id="bemb45"align="center"></td>
                          <td id="bemb46"align="center"></td>
                          </tr>
                          <tr id="bembfri">
                           <td align="center">FRIDAY
                           <td id="bemb50"align="center"></td>
                           <td id="bemb51"align="center"></td>
                           <td id="bemb52"align="center"></td>
                           <td id="bemb53"align="center"></td>
                           <td id="bemb54"align="center"></td>
                           <td id="bemb55"align="center"></td>
                           <td id="bemb56"align="center"></td>
                          </tr>
                          </table>
                          
                          <h4 id ="feahead" align="center"  style="display:none;"><?php echo "FE DIV-A"; if($_SESSION['eoadmin']=='even') echo 'sem2'; else echo 'sem1';?> </h4>
                          <br>
                           <table id="featable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="feamon">
                          <td align="center">MONDAY</td>
                          <td id="fea10"align="center"></td>
                          <td id="fea11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="fea12"align="center"></td>
                          <td id="fea13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="fea14"align="center"></td>
                          <td id="fea15"align="center"></td>
                          <td id="fea16"align="center"></td>
                          </tr>
                          <tr id="featue">
                          <td align="center">TUESDAY
                          <td id="fea20"align="center"></td>
                          <td id="fea21"align="center"></td>
                          <td id="fea22"align="center"></td>
                          <td id="fea23"align="center"></td>
                          <td id="fea24"align="center"></td>
                          <td id="fea25"align="center"></td>
                          <td id="fea26"align="center"></td>  
                          </tr>
                          <tr id="feawed">
                          <td align="center">WEDNESDAY
                          <td id="fea30"align="center"></td>
                          <td id="fea31"align="center"></td>
                          <td id="fea32"align="center"></td>
                          <td id="fea33"align="center"></td>
                          <td id="fea34"align="center"></td>
                          <td id="fea35"align="center"></td>
                          <td id="fea36"align="center"></td>
                          </tr>
                          <tr id="feathu">
                          <td align="center">THURSDAY
                          <td id="fea40"align="center"></td>
                          <td id="fea41"align="center"></td>
                          <td id="fea42"align="center"></td>
                          <td id="fea43"align="center"></td>
                          <td id="fea44"align="center"></td>
                          <td id="fea45"align="center"></td>
                          <td id="fea46"align="center"></td>
                          </tr>
                          <tr id="feafri">
                           <td align="center">FRIDAY
                           <td id="fea50"align="center"></td>
                           <td id="fea51"align="center"></td>
                           <td id="fea52"align="center"></td>
                           <td id="fea53"align="center"></td>
                           <td id="fea54"align="center"></td>
                           <td id="fea55"align="center"></td>
                           <td id="fea56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="febhead" align="center"  style="display:none;"><?php echo "FE DIV-B"; if($_SESSION['eoadmin']=='even') echo 'sem2'; else echo 'sem1';?> </h4>
                          <br>
                           <table id="febtable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="febmon">
                          <td align="center">MONDAY</td>
                          <td id="feb10"align="center"></td>
                          <td id="feb11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="feb12"align="center"></td>
                          <td id="feb13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="feb14"align="center"></td>
                          <td id="feb15"align="center"></td>
                          <td id="feb16"align="center"></td>
                          </tr>
                          <tr id="febtue">
                          <td align="center">TUESDAY
                          <td id="feb20"align="center"></td>
                          <td id="feb21"align="center"></td>
                          <td id="feb22"align="center"></td>
                          <td id="feb23"align="center"></td>
                          <td id="feb24"align="center"></td>
                          <td id="feb25"align="center"></td>
                          <td id="feb26"align="center"></td>  
                          </tr>
                          <tr id="febwed">
                          <td align="center">WEDNESDAY
                          <td id="feb30"align="center"></td>
                          <td id="feb31"align="center"></td>
                          <td id="feb32"align="center"></td>
                          <td id="feb33"align="center"></td>
                          <td id="feb34"align="center"></td>
                          <td id="feb35"align="center"></td>
                          <td id="feb36"align="center"></td>
                          </tr>
                          <tr id="febthu">
                          <td align="center">THURSDAY
                          <td id="feb40"align="center"></td>
                          <td id="feb41"align="center"></td>
                          <td id="feb42"align="center"></td>
                          <td id="feb43"align="center"></td>
                          <td id="feb44"align="center"></td>
                          <td id="feb45"align="center"></td>
                          <td id="feb46"align="center"></td>
                          </tr>
                          <tr id="febfri">
                           <td align="center">FRIDAY
                           <td id="feb50"align="center"></td>
                           <td id="feb51"align="center"></td>
                           <td id="feb52"align="center"></td>
                           <td id="feb53"align="center"></td>
                           <td id="feb54"align="center"></td>
                           <td id="feb55"align="center"></td>
                           <td id="feb56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="fechead" align="center"  style="display:none;"><?php echo "FE DIV-C"; if($_SESSION['eoadmin']=='even') echo 'sem2'; else echo 'sem1';?> </h4>
                          <br>
                           <table id="fectable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="fecmon">
                          <td align="center">MONDAY</td>
                          <td id="fec10"align="center"></td>
                          <td id="fec11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="fec12"align="center"></td>
                          <td id="fec13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="fec14"align="center"></td>
                          <td id="fec15"align="center"></td>
                          <td id="fec16"align="center"></td>
                          </tr>
                          <tr id="fectue">
                          <td align="center">TUESDAY
                          <td id="fec20"align="center"></td>
                          <td id="fec21"align="center"></td>
                          <td id="fec22"align="center"></td>
                          <td id="fec23"align="center"></td>
                          <td id="fec24"align="center"></td>
                          <td id="fec25"align="center"></td>
                          <td id="fec26"align="center"></td>  
                          </tr>
                          <tr id="fecwed">
                          <td align="center">WEDNESDAY
                          <td id="fec30"align="center"></td>
                          <td id="fec31"align="center"></td>
                          <td id="fec32"align="center"></td>
                          <td id="fec33"align="center"></td>
                          <td id="fec34"align="center"></td>
                          <td id="fec35"align="center"></td>
                          <td id="fec36"align="center"></td>
                          </tr>
                          <tr id="fecthu">
                          <td align="center">THURSDAY
                          <td id="fec40"align="center"></td>
                          <td id="fec41"align="center"></td>
                          <td id="fec42"align="center"></td>
                          <td id="fec43"align="center"></td>
                          <td id="fec44"align="center"></td>
                          <td id="fec45"align="center"></td>
                          <td id="fec46"align="center"></td>
                          </tr>
                          <tr id="fecfri">
                           <td align="center">FRIDAY
                           <td id="fec50"align="center"></td>
                           <td id="fec51"align="center"></td>
                           <td id="fec52"align="center"></td>
                           <td id="fec53"align="center"></td>
                           <td id="fec54"align="center"></td>
                           <td id="fec55"align="center"></td>
                           <td id="fec56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="fedhead" align="center" style="display:none;" ><?php echo "FE DIV-D"; if($_SESSION['eoadmin']=='even') echo 'sem2'; else echo 'sem1';?> </h4>
                          <br>
                           <table id="fedtable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="feamon">
                          <td align="center">MONDAY</td>
                          <td id="fea10"align="center"></td>
                          <td id="fea11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="fea12"align="center"></td>
                          <td id="fea13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="fea14"align="center"></td>
                          <td id="fea15"align="center"></td>
                          <td id="fea16"align="center"></td>
                          </tr>
                          <tr id="featue">
                          <td align="center">TUESDAY
                          <td id="fea20"align="center"></td>
                          <td id="fea21"align="center"></td>
                          <td id="fea22"align="center"></td>
                          <td id="fea23"align="center"></td>
                          <td id="fea24"align="center"></td>
                          <td id="fea25"align="center"></td>
                          <td id="fea26"align="center"></td>  
                          </tr>
                          <tr id="feawed">
                          <td align="center">WEDNESDAY
                          <td id="fea30"align="center"></td>
                          <td id="fea31"align="center"></td>
                          <td id="fea32"align="center"></td>
                          <td id="fea33"align="center"></td>
                          <td id="fea34"align="center"></td>
                          <td id="fea35"align="center"></td>
                          <td id="fea36"align="center"></td>
                          </tr>
                          <tr id="fedthu">
                          <td align="center">THURSDAY
                          <td id="fed40"align="center"></td>
                          <td id="fed41"align="center"></td>
                          <td id="fed42"align="center"></td>
                          <td id="fed43"align="center"></td>
                          <td id="fed44"align="center"></td>
                          <td id="fed45"align="center"></td>
                          <td id="fed46"align="center"></td>
                          </tr>
                          <tr id="fedfri">
                           <td align="center">FRIDAY
                           <td id="fed50"align="center"></td>
                           <td id="fed51"align="center"></td>
                           <td id="fed52"align="center"></td>
                           <td id="fed53"align="center"></td>
                           <td id="fed54"align="center"></td>
                           <td id="fed55"align="center"></td>
                           <td id="fed56"align="center"></td>
                          </tr>
                          </table>
                          <br>
                          <h4 id ="feehead" align="center"  style="display:none;"><?php echo "FE DIV-E"; if($_SESSION['eoadmin']=='even') echo 'sem2'; else echo 'sem1';?> </h4>
                          <br>
                           <table id="feetable" border="5" cellspacing="5" align="center" style="display:none;">
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
                         <tr id="feemon">
                          <td align="center">MONDAY</td>
                          <td id="fee10"align="center"></td>
                          <td id="fee11"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Short Break </h2></div></td>
                          <td id="fee12"align="center"></td>
                          <td id="fee13"align="center"></td>
                          <td rowspan="6"align="center"><div id="vertical-orientation"><h2 align="center"> Long Break </h2></div></td>
                          <td id="fee14"align="center"></td>
                          <td id="fee15"align="center"></td>
                          <td id="fee16"align="center"></td>
                          </tr>
                          <tr id="feetue">
                          <td align="center">TUESDAY
                          <td id="fee20"align="center"></td>
                          <td id="fee21"align="center"></td>
                          <td id="fee22"align="center"></td>
                          <td id="fee23"align="center"></td>
                          <td id="fee24"align="center"></td>
                          <td id="fee25"align="center"></td>
                          <td id="fee26"align="center"></td>  
                          </tr>
                          <tr id="feewed">
                          <td align="center">WEDNESDAY
                          <td id="fee30"align="center"></td>
                          <td id="fee31"align="center"></td>
                          <td id="fee32"align="center"></td>
                          <td id="fee33"align="center"></td>
                          <td id="fee34"align="center"></td>
                          <td id="fee35"align="center"></td>
                          <td id="fee36"align="center"></td>
                          </tr>
                          <tr id="feethu">
                          <td align="center">THURSDAY
                          <td id="fee40"align="center"></td>
                          <td id="fee41"align="center"></td>
                          <td id="fee42"align="center"></td>
                          <td id="fee43"align="center"></td>
                          <td id="fee44"align="center"></td>
                          <td id="fee45"align="center"></td>
                          <td id="fee46"align="center"></td>
                          </tr>
                          <tr id="feefri">
                           <td align="center">FRIDAY
                           <td id="fee50"align="center"></td>
                           <td id="fee51"align="center"></td>
                           <td id="fee52"align="center"></td>
                           <td id="fee53"align="center"></td>
                           <td id="fee54"align="center"></td>
                           <td id="fee55"align="center"></td>
                           <td id="fee56"align="center"></td>
                          </tr>
                          </table>
 <br>
			<!--<input type="button" onclick="window.print()" value="Print">
            <button  id="btnPrint" style="float:right">Print Preview</button> -->
 <div id="tray" hidden>
                      <?php
                        include "connect.php";
                        
                        echo "FE<br>";
                        $query = "SELECT * FROM lecture WHERE class='fe' AND department='{$_SESSION['deadmin']}' AND sem='{$_SESSION['eoadmin']}'";
                        $result = mysqli_query($connect,$query); 
                        $query2 = "SELECT * FROM subject WHERE department='{$_SESSION['deadmin']}'";
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
                        $query = "SELECT * FROM lecture WHERE class='se' AND department='{$_SESSION['deadmin']}' AND sem='{$_SESSION['eoadmin']}'";
                        $result = mysqli_query($connect,$query); 
                        $query2 = "SELECT * FROM subject  WHERE department='{$_SESSION['deadmin']}'";
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
                        $query = "SELECT * FROM lecture WHERE class='te' AND department='{$_SESSION['deadmin']}' AND sem='{$_SESSION['eoadmin']}'";
                        $result = mysqli_query($connect,$query); 
                        $query2 = "SELECT * FROM subject WHERE department='{$_SESSION['deadmin']}'";
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
                                                    
                                                    //x[<?php //echo $k;?>].style.top = top1;
                                                    //x[<?php //echo $k;?>].style.left = left1;
                                                    
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
                        $query = "SELECT * FROM lecture WHERE class='be' AND department='{$_SESSION['deadmin']}' AND sem='{$_SESSION['eoadmin']}'";
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
if($_SESSION['deadmin']=="extc" || $_SESSION['deadmin']=="EXTC" || $_SESSION['deadmin']=="it" || $_SESSION['deadmin']=="IT" || $_SESSION['deadmin']=="comps" || $_SESSION['deadmin']=="COMPS"){
  ?>
  <script>document.getElementById("sehead").style.display="block";</script>
  <script>document.getElementById("tehead").style.display="block";</script>
  <script>document.getElementById("behead").style.display="block";</script>
  <script>document.getElementById("semytable").style.display="table";</script>
  <script>document.getElementById("temytable").style.display="table";</script>
  <script>document.getElementById("bemytable").style.display="table";</script>
  <?php
  }
  if($_SESSION['deadmin']=="fe" || $_SESSION['deadmin']=="FE"){
    ?>
    <script>document.getElementById("featable").style.display="table";</script>
    <script>document.getElementById("feahead").style.display="block";</script>
    <script>document.getElementById("febtable").style.display="table";</script>
    <script>document.getElementById("febhead").style.display="block";</script>
    <script>document.getElementById("fectable").style.display="table";</script>
    <script>document.getElementById("fechead").style.display="block";</script>
    <script>document.getElementById("fedtable").style.display="table";</script>
    <script>document.getElementById("fedhead").style.display="block";</script>
    <script>document.getElementById("feetable").style.display="table";</script>
    <script>document.getElementById("feehead").style.display="block";</script>
    <?php
  }
  if($_SESSION['deadmin']=="mech" || $_SESSION['deadmin']=="MECH"){
    ?>
    <script>document.getElementById("sematable").style.display="table";</script>
    <script>document.getElementById("semahead").style.display="block";</script>
    <script>document.getElementById("tematable").style.display="table";</script>
    <script>document.getElementById("temahead").style.display="block";</script>
    <script>document.getElementById("bematable").style.display="table";</script>
    <script>document.getElementById("bemahead").style.display="block";</script>
    <script>document.getElementById("sembtable").style.display="table";</script>
    <script>document.getElementById("sembhead").style.display="block";</script>
    <script>document.getElementById("tembtable").style.display="table";</script>
    <script>document.getElementById("tembhead").style.display="block";</script>
    <script>document.getElementById("bembtable").style.display="table";</script>
    <script>document.getElementById("bembhead").style.display="block";</script>
    <?php 
  }
  include "showteacheradmin.php";
?>
