<?php 
session_start();
include "connect.php";
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


function dele(){
	$quer ="DELETE FROM storecarddetails WHERE semester='{$_SESSION['eo']}' AND department='{$_SESSION['de']}'";
    mysqli_query($connect,$quer);
}

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Automatic Time Table Generator BY NGPR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href=""><h4 style="font-size:30px;">Time Table</h4></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                       <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-cogs icon-wrap"></i> <span class="mini-click-non">Settings</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="batch.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro"><p>Create  &#8594;</p></span></a></li>
                                
                            </ul>
                            </ul>
                        </li>
                        <li class="false">
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-suitcase icon-wrap"></i> <span class="mini-click-non">Subjects</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="subject.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro"><p>Create  &#8594;</p></span></a></li>
                                <li><a title="View-All" href="subjectview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-home icon-wrap"></i> <span class="mini-click-non">Rooms</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="classroom.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro"><p>Create  &#8594;</p></span></a></li>
                                <li><a title="View-All" href="classroomview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i> <span class="mini-click-non">Faculties</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="teacher.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro"><p>Create  &#8594;</p></span></a></li>
                                <li><a title="View-All" href="teacherview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-book icon-wrap"></i> <span class="mini-click-non">Lectures</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                               <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="lecture.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro"><p>Create  &#8594;</p></span></a></li>
                                <li><a title="View-All" href="lectureview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Time Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href=""><i class="generate.php" aria-hidden="true"></i> <span class="mini-sub-pro"><p>Generate  &#8594;</p></span></a></li>
                                <li><a title="View-All" href=""><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Room Wise  &#8594;</span></a></li>
                               
                                <li><a title="Create" href="genteacher.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">
                                	<p>Faculty Wise  &#8594;</p></span></a></li>
                                <li><a title="View-All" href=""><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Semester Wise  &#8594;</span></a></li>
                                <li><a title="View-All" href=""><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Slot Wise  &#8594;</span></a></li>
                            </ul>
                            </ul>
                        
                      
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href=""><img class="main-logo" src="" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">                             
                                                 <li class="nav-item">
                                                    <a href="logout.php" data-toggle="" role="button" aria-expanded="true" class="">
															<i class="" aria-hidden="true"></i>
															<span class="fa fa-lock author-log-ic">Log Out</span>
													</a>
												</li>
										    </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <br>
           <link rel="stylesheet" href="css/generate.css">
           <br>
        
        <div class="container-fluid">
            <div class="col-md-4" style="width:100%;">
                <div class="form_main">
                <br>
                    <div>
                        <h3><center>DON BOSCO COLLEGE TIME TABLE</center></h3>
                        <div id="myhead" style="font-size: 20px;display:none;"><?php echo $_SESSION['de']; ?></div>
                        <table id="mytable" border="2" cellspacing="3" align="center" cellpadding="10" <?php  if($_SESSION['de']=="extc" || $_SESSION['de']=="EXTC" || $_SESSION['de']=="it" || $_SESSION['de']=="IT" || $_SESSION['de']=="comps" || $_SESSION['de']=="COMPS")
echo 'style="display:table;"';  else  echo 'style="display:none;"'; ?> >
                        <tr>
						<td align="center"></td>
						<td align="center" colspan="7">MONDAY</td>
						<td align="center" colspan="7">TUESDAY</td>
						<td align="center" colspan="7">WEDNESDAY</td>
						<td align="center" colspan="7">THURSDAY</td>
						<td align="center" colspan="7">FRIDAY</td>
						</tr>
						
						<tr>
                         <td align="center"></td>
                         <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
						 <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
						 <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
						 <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
						 <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
						 </tr>
                         <tr id="se">
                          <td align="center">SE</td>
                          <td align="center" id="se10" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="se20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						  <td align="center" id="se22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						  <td align="center" id="se24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
						  <td align="center" id="se30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
						  <td align="center" id="se40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						  <td align="center" id="se42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						  <td align="center" id="se44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="se46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
						  <td align="center" id="se50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="se51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						   <td align="center" id="se52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="se53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						   <td align="center" id="se54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="se55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="se56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
						  
						  
                         <tr id="te">
                          <td align="center">TE</td>
                          <td align="center" id="te10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="te11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="te20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						  <td align="center" id="te22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
						  <td align="center" id="te24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
						  <td align="center" id="te30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
						  <td align="center" id="te40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="te46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
						  <td align="center" id="te50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="te51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="te52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="te53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="te54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="te55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="te56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
						  
						  
                         <tr id="be">
                          <td align="center">BE</td>
                          <td align="center" id="be10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="be11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="be20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
						  <td align="center" id="be30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
						  <td align="center" id="be40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="be46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
						  <td align="center" id="be50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="be51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="be52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="be53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="be54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="be55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="be56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
                          </table>
                          <br>
                          <div id="meahead" style="font-size: 20px;display:none;">Mech A</div>
                          <table id="mechatable" border="2" cellspacing="3" align="center" cellpadding="10" <?php if($_SESSION['de']=="mech" || $_SESSION['de']=="MECH") 
echo 'style="display:table;"';  else  echo 'style="display:none;"'; ?> >

                        <tr>
            <td align="center"></td>
            <td align="center" colspan="7">MONDAY</td>
            <td align="center" colspan="7">TUESDAY</td>
            <td align="center" colspan="7">WEDNESDAY</td>
            <td align="center" colspan="7">THURSDAY</td>
            <td align="center" colspan="7">FRIDAY</td>
            </tr>
            
            <tr>
                         <td align="center"></td>
                         <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             </tr>
                         <tr id="sema">
                          <td align="center">SE</td>
                          <td align="center" id="sema10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="sema20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="sema22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="sema24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="sema30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="sema40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="sema42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="sema44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="sema46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="sema50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="sema51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
               <td align="center" id="sema52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="sema53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
               <td align="center" id="sema54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="sema55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="sema56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
              
              
                         <tr id="tema">
                          <td align="center">TE</td>
                          <td align="center" id="tema10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="tema20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="tema22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="tema24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="tema30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="tema40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="tema46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="tema50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="tema51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="tema52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="tema53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="tema54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="tema55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="tema56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
              
              
                         <tr id="bema">
                          <td align="center">BE</td>
                          <td align="center" id="bema10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="bema20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="bema30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="bema40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bema46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="bema50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bema51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bema52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bema53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bema54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bema55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bema56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
                          </table>
                          <br>
                          <div id="mebhead" style="font-size: 20px;display:none;">Mech B</div>
                          <table id="mechbtable" border="2" cellspacing="3" align="center" cellpadding="10" <?php if($_SESSION['de']=="mech" || $_SESSION['de']=="MECH") 
echo 'style="display:table;"';  else  echo 'style="display:none;"'; ?> >
                          
                        <tr>
            <td align="center"></td>
            <td align="center" colspan="7">MONDAY</td>
            <td align="center" colspan="7">TUESDAY</td>
            <td align="center" colspan="7">WEDNESDAY</td>
            <td align="center" colspan="7">THURSDAY</td>
            <td align="center" colspan="7">FRIDAY</td>
            </tr>
            
            <tr>
                         <td align="center"></td>
                         <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             </tr>
                         <tr id="semb">
                          <td align="center">SE</td>
                          <td align="center" id="semb10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="semb20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="semb22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="semb24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="semb30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="semb40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="semb42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="semb44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="semb46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="semb50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="semb51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
               <td align="center" id="semb52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="semb53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
               <td align="center" id="semb54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="semb55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="semb56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
              
              
                         <tr id="temb">
                          <td align="center">TE</td>
                          <td align="center" id="temb10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="temb20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="temb22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="temb24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="temb30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="temb40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="temb46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="temb50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="temb51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="temb52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="temb53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="temb54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="temb55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="temb56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
              
              
                         <tr id="bemb">
                          <td align="center">BE</td>
                          <td align="center" id="bemb10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="bemb20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="bemb30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="bemb40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="bemb46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="bemb50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bemb51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bemb52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bemb53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bemb54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bemb55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="bemb56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
                          </table>
                          <br>
                          <div id="fehead" style="font-size: 20px;display:none;">FE</div>
                          <table id="fetable" border="2" cellspacing="3" align="center" cellpadding="10" <?php if($_SESSION['de']=="fe" || $_SESSION['de']=="FE") 
echo 'style="display:table;"';  else  echo 'style="display:none;"'; ?> >

                        <tr>
            <td align="center"></td>
            <td align="center" colspan="7"><strong>MONDAY</strong></td>
            <td align="center" colspan="7"><strong>TUESDAY</strong></td>
            <td align="center" colspan="7"><strong>WEDNESDAY</strong></td>
            <td align="center" colspan="7"><strong>THURSDAY</strong></td>
            <td align="center" colspan="7"><strong>FRIDAY</strong></td>
            </tr>
            
            <tr>
                         <td align="center"></td>
                         <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             <td>9:00-10:00</td>
                         <td>10:00-11:00</td>
                         <td>11:15-12:15</td>
                         <td>12:15-1:15</td>
                         <td>2:00-3:00</td>
                         <td>3:00-4:00</td>
                         <td>4:00-5:00</td>
                         
             </tr>
                         <tr id="fea">
                          <td align="center" style="padding: 8px;"><strong>FE(A)</strong></td>
                          <td align="center" id="fea10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="fea20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="fea22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="fea24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="fea30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fea40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="fea42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="fea44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fea46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fea50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fea51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
               <td align="center" id="fea52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fea53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
               <td align="center" id="fea54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fea55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fea56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
              
              
                         <tr id="feb">
                          <td align="center"><strong>FE(B)</strong></td>
                          <td align="center" id="feb10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="feb20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="feb22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
              <td align="center" id="feb24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="feb30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="feb40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="feb46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="feb50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="feb51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="feb52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="feb53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="feb54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="feb55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="feb56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
              
              
                         <tr id="fec">
                          <td align="center"><strong>FE(C)</strong></td>
                          <td align="center" id="fec10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="fec20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="fec30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fec40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fec46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fec50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fec51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fec52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fec53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fec54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fec55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fec56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
                          
                          <tr id="fed">
                          <td align="center"><strong>FE(D)</strong></td>
                          <td align="center" id="fed10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="fed20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="fed30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fed40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fed46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fed50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fed51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fed52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fed53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fed54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fed55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fed56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
                          <tr id="fee">
                          <td align="center"><strong>FE(E)</strong></td>
                          <td align="center" id="fee10" ondrop="drop(event,this.id)"  ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee11" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee12" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee13" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee14" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee15" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee16" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
                          <td align="center" id="fee20" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee21" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee22" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee23" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee24" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee25" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee26" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>  
                          
              <td align="center" id="fee30" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee31" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee32" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee33" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee34" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee35" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee36" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fee40" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee41" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee42" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee43" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee44" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee45" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          <td align="center" id="fee46" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          
              <td align="center" id="fee50" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fee51" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fee52" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fee53" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fee54" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fee55" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                           <td align="center" id="fee56" ondrop="drop(event,this.id)" ondragover="allowDrop(event)"></td>
                          </tr>
                          </table>

                      <input type="button" onclick="automatic()" value="Generate">   &emsp;
                      <input type="button" onclick=" window.open('generate_SETEBE.php','_blank')" value="Print">
                      <br>
                      
                      <div id="tray" >
                      <?php
                        include "connect.php";
                        
                        echo "<strong>&emsp;FE</strong><br>";
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
                                                              $count = $rs['subpr']/2;

                                                            break;
                                                        }
                                                      }mysqli_data_seek($result2,0);
                                                      while($count>0){
                                                         while($rs3=mysqli_fetch_array($result3)){
                                                        if($rs3['teanm']==$row['teanm'] ){
                                                     break;}
                                                    } mysqli_data_seek($result3,0);
                                                    ?>

                                                    <div id="fe" class="columncard" ><div  id="fedrag<?php echo $i.$count;?>" class="card" draggable="true" onmouseover="disbox(this.id)" onmouseleave="cleartxt()" ondragstart="drag(event)"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>

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
                        
                        echo "<strong>&emsp;SE</strong><br>";
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
                                                    <div id ="se" class="columncard" ondrop="drop2(event)" ondragover="allowDrop(event)"> <div id="sedrag<?php echo $i.$count;?>" class="card" draggable="true" onmouseover="disbox(this.id)" onmouseleave="cleartxt()" ondragstart="drag(event)" style="cursor: pointer;"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>
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
                        echo "<strong>&emsp;TE</strong><br>";
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
                                                              $count = $rs['subpr']/2;

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
                                                      

                                                    <div id="te" class="columncard" ondrop="drop2(event)" ondragover="allowDrop(event)" ><div  id="tedrag<?php echo $i.$count;?>" class="card" draggable="true" onmouseover="disbox(this.id)" onmouseleave="cleartxt()" ondragstart="drag(event)"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>
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
                        echo "<strong>&emsp;BE</strong><br>";
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
                                                              $count = $rs['subpr']/2;

                                                            break;
                                                        }
                                                      }mysqli_data_seek($result2,0);
                                                      while($count>0){

                                                        while($rs3=mysqli_fetch_array($result3)){
                                                        if($rs3['teanm']==$row['teanm'] ){
                                                     break;}
                                                    } mysqli_data_seek($result3,0);
                                                    ?>
                                                      
                                                    <div id="be" class="columncard" ondrop="drop2(event)" ondragover="allowDrop(event)" ><div id="bedrag<?php echo $i.$count;?>" class="card"draggable="true" onmouseover="disbox(this.id)" onmouseleave="cleartxt()" ondragstart="drag(event)"><?php if($row['lectype']=="Th"){echo $row['subnm'];}elseif($row['lectype']=="Tut")echo $row['subnm'].'_Tut';else{ echo $row['subnm'].'_Lab<br>'; echo $row['lectype'];}?><br><?php echo $row['teanm']; ?><br><?php echo $row['crnm']; ?></div></div>

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
                      <div id="displaybox"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery
		============================================ -->
        
		<script src="js/generate.js"></script>

    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>
<?php 
if($_SESSION['de']=="extc" || $_SESSION['de']=="EXTC" || $_SESSION['de']=="it" || $_SESSION['de']=="IT" || $_SESSION['de']=="comps" || $_SESSION['de']=="COMPS"){
  ?>
  <!-- <script>document.getElementById("mytable").style.display="table";</script> -->
  <script>document.getElementById("myhead").style.display="block";</script>
  <?php
  }
  if($_SESSION['de']=="fe" || $_SESSION['de']=="FE"){
    ?>
    <!-- <script>document.getElementById("fetable").style.display="table";</script> -->
    <script>document.getElementById("fehead").style.display="block";</script>
    <?php
  }
  if($_SESSION['de']=="mech" || $_SESSION['de']=="MECH"){
    ?>
    <!-- <script>document.getElementById("mechatable").style.display="table";</script> -->
    <script>document.getElementById("meahead").style.display="block";</script>
    <!-- <script>document.getElementById("mechbtable").style.display="table";</script> -->
     <script>document.getElementById("mebhead").style.display="block";</script>
    <?php 
  }
  include "show.php";
?>


  
  
  
 