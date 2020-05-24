 <?php
      session_start();
         if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{    }
else
    header("Location: login.php");

 		include "connect.php";
 		
        if(isset($_GET['edit']))
        {
        	$_SESSION['sn'] = $_GET['edit'];
        	$query = "SELECT * FROM teacher WHERE teasn='".$_SESSION['sn']."'";
        	$result = mysqli_query($connect,$query);
        	$row = mysqli_fetch_array($result);
        	$cbox = $row['teacon'];
        	$xbox = explode(",",$cbox);
        	
    	}
    	
       	if(isset($_POST['newteasn']) || isset($_POST['newteanm']))
        {
        	$newname = $_POST['newteanm'];
        	$newcode = $_POST['newteasn'];
        	$checkx = $_POST['newteacon'];
        	$checkup = implode(",",$checkx);
        	$queryup = "UPDATE teacher SET teanm='$newname',teasn='$newcode',teacon='".$checkup."' WHERE teasn='".$_SESSION['sn']."'";
        	$result2 = mysqli_query($connect,$queryup);
        	header("Location:teacherview.php");
        	/*echo "<meta http-equiv='refresh' content='0;url=teacherview.php'>";*/
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
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <div class="left-sidebar-pro" style="background-color: darkslategray">
        <nav id="sidebar" class="" style="background-color: darkslategray">
            <div style="background-color:whitesmoke;height:9.5%; text-align: center;" class="sidebar-header">
                <a href=""><h4 style="font-size:30px;font-style: normal; padding-top: 5%; color:orangered">ATG</h4></a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul style="background-color:darkslategray"class="metismenu" id="menu1">
                        <li>
                            <a style="color:white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-cogs icon-wrap"></i> <span class="mini-click-non">Settings</span></a>
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
                            <a style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-home icon-wrap"></i> <span class="mini-click-non">Rooms</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="classroom.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Create  &#8594;</span></a></li>
                                <li><a title="View-All" href="classroomview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                            </ul>
                        </li>
                        <li>
                            <a style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i> <span class="mini-click-non">Faculties</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Create" href="teacher.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Create  &#8594;</span></a></li>
                                <li><a title="View-All" href="teacherview.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">View-All  &#8594;</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a style="color: white" class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-book icon-wrap"></i> <span class="mini-click-non">Lectures</span></a>
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
                            <li><a title="Create" href="generate_newtab.php"><i class="" aria-hidden="true"></i> <span class="mini-sub-pro">Generate &#8594;</span></a></li>
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
                                <div class="row" style="background-color: darkslategrey">
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
															<span >Log Out</span>
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
           <link rel="stylesheet" href="css/teacher.css">
           <br>
        
        <div class="container-fluid">
            <div class="col-md-4" style="width:100%;">
                <div class="form_main">
                    <h4 class="heading"><strong>Faculty Page  </strong> <span></span></h4><br>
                    <div class="form">
                        <form action="edittea.php" method="post" id="teacherFrm2" name="teacherform2">
                            <strong>Enter Name of the Faculty:</strong><br><input type="text" required="" placeholder="Faculty Name" value="<?php echo $row[0]; ?>" name="newteanm" class="txt"><br><br>
                            <strong>Enter shortcoded Name:</strong><br><input type="text" required="" placeholder="Short code" value="<?php echo $row[1]; ?>" name="newteasn" class="txt"><br><br>

                            <strong>Select the slots when faculty is available from below:</strong>
                           
                            
                            <table border="2" cellspacing="3" align="center">
                                <tr>
                                    <td align="center"><input hidden unchecked type="checkbox"></input>
                                    <td>9:00-10:00
                                    <td>10:00-11:00
                                    <td>11:00-11:15
                                    <td>11:15-12:15
                                    <td>12:15-1:15
                                    <td>1:15-2:00
                                    <td>2:00-3:00
                                    <td>3:00-4:00
                                    <td>4:00-5:00
                                </tr>
                                <tr>
                                 <td align="center">MONDAY</td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="10" <?php if(in_array("10",$xbox)){echo "checked";}else echo "unchecked"; ?> ></input></td>

                                 <td align="center"><input type="checkbox" name="newteacon[]" value="11" <?php if(in_array("11",$xbox)){echo "checked";}else echo "unchecked"; ?> ></input></td>
                                 <td rowspan="6"align="center"></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="12" <?php if(in_array("12",$xbox)){echo "checked";}else echo "unchecked"; ?> ></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="13" <?php if(in_array("13",$xbox)){echo "checked";}else echo "unchecked"; ?> ></input></td>
                                 <td rowspan="6"align="center"></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="14" <?php if(in_array("14",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="15" <?php if(in_array("15",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="16" <?php if(in_array("16",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                </tr>
                                <tr>
                                 <td align="center">TUESDAY</td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="20" <?php if(in_array("20",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="21" <?php if(in_array("21",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="22" <?php if(in_array("22",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="23" <?php if(in_array("23",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="24" <?php if(in_array("24",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="25" <?php if(in_array("25",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="26" <?php if(in_array("26",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                </tr>
                                <tr>
                                 <td align="center">WEDNESDAY</td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="30" <?php if(in_array("30",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="31" <?php if(in_array("31",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="32" <?php if(in_array("32",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="33" <?php if(in_array("33",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="34" <?php if(in_array("34",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="35" <?php if(in_array("35",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="36" <?php if(in_array("36",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                </tr>
                                <tr>
                                 <td align="center">THURSDAY</td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="40" <?php if(in_array("40",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="41" <?php if(in_array("41",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="42" <?php if(in_array("42",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="43" <?php if(in_array("43",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="44" <?php if(in_array("44",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="45" <?php if(in_array("45",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="46" <?php if(in_array("46",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                </tr>
                                <tr>
                                 <td align="center">FRIDAY</td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="50" <?php if(in_array("50",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="51" <?php if(in_array("51",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="52" <?php if(in_array("52",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="53" <?php if(in_array("53",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="54" <?php if(in_array("54",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="55" <?php if(in_array("55",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                 <td align="center"><input type="checkbox" name="newteacon[]" value="56" <?php if(in_array("56",$xbox)){echo "checked";}else echo "unchecked"; ?>></input></td>
                                </tr>
                                </table>
                           
                            <br>
                            
                            <input style="background-color: orangered;color: white" type="submit" class="btn btn-primary" value="Update" name="update" class="txt2">
                             &nbsp;&nbsp;<input style="background-color: darkslategrey;color: white" type="submit" class="btn btn-primary"  value="Go Back" name="back" onclick="window.location.href='teacherview.php'" class="txt2">
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery
		============================================ -->
        
        <script src="js/teacher.js"></script>
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
