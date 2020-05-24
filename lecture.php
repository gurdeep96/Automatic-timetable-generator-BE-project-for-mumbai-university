<?php session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");

if(!isset($_SESSION['ba'])){
	$_SESSION['ba']=4;
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
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/lecture.js"></script>
   
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div class="left-sidebar-pro" style="background-color: darkslategrey">
        <nav id="sidebar" class="" style="background-color: darkslategrey">
            <div style="background-color:whitesmoke;height:9.5%; text-align: center;" class="sidebar-header">
                <a href=""><h4 style="font-size:30px;font-style: normal; padding-top: 5%; color:orangered">ATG</h4></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul  style="background-color: darkslategrey" class="metismenu" id="menu1">
                        <li>
                            <a  style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-cogs icon-wrap"></i> <span class="mini-click-non">Settings</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="batch.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Create  &#8594;</span></a></li>
                            </ul>
                            </ul>
                        </li>
                        <li class="false">
                            <a style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-suitcase icon-wrap"></i> <span class="mini-click-non">Subjects</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
    
                                <li><a title="Create" href="subject.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Create  &#8594;</span></a></li>
                                <li><a title="View-All" href="subjectview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                        </li>
                         <li>
                            <a  style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-home icon-wrap"></i> <span class="mini-click-non">Rooms</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="classroom.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Create  &#8594;</span></a></li>
                                <li><a title="View-All" href="classroomview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                            </ul>
                        </li>
                        <li>
                            <a  style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i> <span class="mini-click-non">Faculties</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="teacher.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Create  &#8594;</span></a></li>
                                <li><a title="View-All" href="teacherview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a  style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-book icon-wrap"></i> <span class="mini-click-non">Lectures</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                               <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="lecture.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Create  &#8594;</span></a></li>
                                <li><a title="View-All" href="lectureview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                            </ul>
                        </li>
                        <li>
                            <a style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Time Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Create" href="generate_newtab.php" target="_blank"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Generate &#8594;</span></a></li>
                             <li><a title="View-All" href="genteacher.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Faculty Timetable &#8594;</span></a></li>
                           
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
                    <div style="background-color: darkslategrey" class="row">
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
															<span class="">Log Out</span>
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
           <link rel="stylesheet" href="css/classroom.css">
           <br>
        
        <div class="container-fluid">
            <div class="col-md-4" style="width:100%;">
                <div class="form_main">
                    <h4 class="heading"><strong>Lecture Page  </strong> <span></span></h4><br>
                    <div class="form">
                        <form action="insertlecture.php" method="post" id="lectureFrm" name="lectureform">
                        <strong>Teacher:&emsp;(Can select faculties from other department too)</strong>
                        <table id="lectable" >
                        <tr id="upout">
                            <td><strong>Select Department of Faculty:</strong></td>
                            <td><strong>Select Faculty from below:</strong><br></td>
                        </tr>
                        <tr id="botout">
                            <td> 
                             					<select onChange="getStatetea(this.value);" required>
                             						<option disabled selected value> --- Select an option --- </option>
                                                    <option value="fe" >FE</option>
                                                    <option value="it">IT</option>
                                                    <option value="comps">COMPS</option>
                                                    <option value="extc">EXTC</option>
                                                    <option value="mech">MECH</option>
                                                </select>
                            </td>
                            <td>
                             			 		
                                    <?php 
                                                include "connect.php";
                                                $query="SELECT teasn,teanm FROM teacher";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="teanm" name="teanm" required>';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['teanm'].'">'.$rs['teanm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                    ?>
                             </td>
                             </tr>
                             </div>
                             <tr>
                             <td></td><td></td>
                             </tr>                             
                             <tr>
                                <td><strong>Subject:</strong></td>
                                <td>&nbsp;</td>
                             </tr> 

                             <tr id="upout">
                                <td>
                                    <strong>Select the Class:</strong>
                                </td>
                                <td>
                                    <strong>Select the Subject:</strong>
                                </td>
                            </tr>
                            <tr id="botout">
                                <td>
								
                                    <select id="year" name="class" onChange="getState(this.value);" required>
                                                    <option disabled selected value>--- Select an option ---</option>
                                                    <option value="fe" <?php if($_SESSION['de']=='it' || $_SESSION['de']=='IT' || $_SESSION['de']=='comps' || $_SESSION['de']=='COMPS' || $_SESSION['de']=='mech' || $_SESSION['de']=='MECH' || $_SESSION['de']=='extc' || $_SESSION['de']=='EXTC' )echo "disabled";?>>FE</option>
                                                    <option value="se" <?php if($_SESSION['de']=='fe' || $_SESSION['de']=='FE')echo "disabled";?>>SE</option>
                                                    <option value="te" <?php if($_SESSION['de']=='fe' || $_SESSION['de']=='FE')echo "disabled";?>>TE</option>
                                                    <option value="be" <?php if($_SESSION['de']=='fe' || $_SESSION['de']=='FE')echo "disabled";?>>BE</option>
                                    </select>
                                </td>
                                <td>
                                  <select id="subnm" name="subnm" onChange="getStateth(this.value);" required>
                                    <option disabled selected value>--- Select an option ---</option>
                                    </select>
                            </tr>

                            </table>                            
                            <br> 
                              <strong>What all Faculty teaches?</strong> <br><br>
                              <div id="period">
                                  <input type="checkbox" name="lectype[]" id="thcls" value="Th" onclick="thhcls()" unchecked>Theory<br>
                                <!-- <input type="checkbox" name="lectype[]" id="b1cls" value="B1" onclick="b1cls()" unchecked>Batch 1 Lab &emsp;
                                  <input type="checkbox" name="lectype[]" id="b2cls" value="B2" onclick="b2cls()" unchecked>Batch 2 Lab &emsp;
                                  <input type="checkbox" name="lectype[]" id="b3cls" value="B3" onclick="b3cls()" unchecked>Batch 3 Lab &emsp;
                                  <input type="checkbox" name="lectype[]" id="b4cls" value="B4" unchecked>Batch 4 Lab &emsp;
                                  <input type="checkbox" name="lectype[]" id="b5cls" value="B5" unchecked>Batch 5 Lab <br>
                                 -->  
                                  <?php 
                                  $i=1;
                                  while($i <= $_SESSION['ba'])
                                  {
                                  ?><input type="checkbox" name="lectype[]" id="b<?php echo $i;?>cls" value="b<?php echo $i;?>lab" onclick="b<?php echo $i;?>cl()" unchecked>Batch <?php echo $i;?> Lab&emsp;
                                  <?php
                                  $i++; }
                                  ?>
                                  <br>
                                  <input type="checkbox" name="lectype[]" id="tutcls" value="Tut" onclick="tucls()" unchecked>Tutorial<br>           
                            </div>
                             <br>                   
                             <strong>Select the Classroom:</strong><br>
                             <div id="thshow" style="display:none;">
                             <br>Select room for theory from below:<br>
                              <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE department='{$_SESSION['de']}' AND crtype='class' ";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="thclsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br> 
                             </div> 
                             <div id="b1show" style="display:none;">
                              <br>Select room for Batch 1 Lab from below:<br>
                              <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE crtype='lab'";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="b1clsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br> 
                                </div>
                                <div id="b2show" style="display:none;">
                                <br>Select room for Batch 2 Lab from below:<br>
                                 <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE crtype='lab'";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="b2clsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br>
                                   </div>
                                   <div id="b3show" style="display:none;">
                                   <br>Select room for Batch 3 Lab from below:<br>
                                    <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE crtype='lab'";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="b3clsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br>
                                       </div>
                                       <div id="b4show" style="display:none;">
                                       <br>Select room for Batch 4 Lab from below:<br>
                                         <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE crtype='lab'";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="b4clsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br>
                                        </div>
                                        <div id="b5show" style="display:none;">
                                        <br>Select room for Batch 5 Lab from below:<br>
                                            <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE crtype='lab'";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="b5clsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br>
                                        </div>
                                        <div id="b6show" style="display:none;">
                                        <br>Select room for Batch 6 Lab from below:<br>
                                            <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE crtype='lab'";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="b6clsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br>
                             			</div>
                               <div id="tushow" style="display:none;">
                             <br>Select room for tutorial from below:<br>
                              <?php 
                                                
                                                $query="SELECT crsn,crnm FROM classroom WHERE department='{$_SESSION['de']}' AND crtype<>'lab'";
                                                $sql = mysqli_query($connect,$query);
                                                $select= '<select id="tutclsselect" name="crnm[]">';
                                                $select.='<option disabled selected value>--- Select an option ---</option>';
                                                if(mysqli_num_rows($sql)){
                                                    
                                                    while($rs=mysqli_fetch_array($sql)){
                                                    $select.='<option value="'.$rs['crnm'].'">'.$rs['crnm'].'</option>';
                                                    }
                                                }
                                                $select.='</select>';
                                                echo $select;
                                                ?> 
                                        <br> 
                             </div>       
                                
                            <input type="submit" style="background-color: gainsboro;color: black" class="btn btn-primary" value="Add Lecture" name="addlec" class="txt2">
                            <input type="submit" style="background-color: gainsboro;color: black" class="btn btn-primary" onclick="window.location.href='lectureview.php'" value="View">
                            <input type="submit" style="background-color: gainsboro;color: black" class="btn btn-primary" onclick="window.open('generate_newtab.php','_blank')" value="Next">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery
		============================================ -->
        
        
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
