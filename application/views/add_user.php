<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

  <head>
    <meta charset="utf-8" />
    <title>Dance Manager</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Dance Manager" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="assets/DM-Master-Logo.png" /> </head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="assets/DM-Master-Logo.png" alt="logo" class="logo-default" style="width: 143px; height: 69px;" /> </a>
                <div class="menu-toggler sidebar-toggler">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
               
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN PAGE ACTIONS -->
            <!-- DOC: Remove "hide" class to enable the page header actions -->
            <!-- BEGIN PAGE TOP -->
            <div class="page-top">
                <!-- BEGIN HEADER SEARCH BOX -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="separator hide"> </li>
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> Nick </span>
                                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                <img alt="" class="img-circle" src="assets/layouts/layout4/img/avatar9.jpg" /> </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="index.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
       <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                    <li class="sidebar-search-wrapper">
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                    <li class="nav-item start active open">
                        <a href="dashboard" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>

                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-tasks"></i>
                            <span class="arrow"></span>
                            <span class="title">Tables</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="table_accounts" class="nav-link ">
                                    <span class="title">Accounts</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item  ">
                                <a href="accounts_charges" class="nav-link ">
                                    <span class="title">Accounts Charges</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="payments" class="nav-link ">
                                    <span class="title">Payments</span>
                                </a>
                            </li> -->

                            <li class="nav-item  ">
                                <a href="table_students" class="nav-link ">
                                    <span class="title">Students</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_classes" class="nav-link ">
                                    <span class="title">Classes</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_vendors" class="nav-link ">
                                    <span class="title">Vendors</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_staff" class="nav-link ">
                                    <span class="title">Staff</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_staff" class="nav-link ">
                                    <span class="title">Prospects</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-sticky-note"></i>
                            <span class="arrow"></span>
                            <span class="title">Reports</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="report_accounts" class="nav-link ">
                                    <span class="title">Accounts</span>
                                </a>
                                <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="report_students" class="nav-link ">
                                    <span class="title">Report 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Report 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Report 3</span>
                                </a>
                            </li>
                        </ul>
                            </li>
                           
                        </ul>
                        <li class="nav-item ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-sticky-note"></i>
                            <span class="arrow"></span>
                            <span class="title">Students</span>
                        </a>
                        <ul class="sub-menu">
                           
                            <li class="nav-item  ">
                                <a href="report_students" class="nav-link ">
                                    <span class="title">Report 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Report 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Report 3</span>
                                </a>
                            </li>
                        </ul>
                        <li class="nav-item ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-sticky-note"></i>
                            <span class="arrow"></span>
                            <span class="title">Classes</span>
                        </a>
                        <ul class="sub-menu">
                           
                            <li class="nav-item  ">
                                <a href="report_students" class="nav-link ">
                                    <span class="title">Report 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Report 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Report 3</span>
                                </a>
                            </li>
                        </ul>
                        <!-- <li class="nav-item  ">
                        <a href="add_user" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add User</span>
                            <span class="selected"></span>

                        </a>
                        </li> -->

                        <li class="nav-item ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-sticky-note"></i>
                            <span class="arrow"></span>
                            <span class="title">More</span>
                        </a>
                        <ul class="sub-menu">
                           
                            <li class="nav-item  ">
                                <a href="report_students" class="nav-link ">
                                    <span class="title">Costume Cycle</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Recitals</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="report_classes" class="nav-link ">
                                    <span class="title">Attendance</span>
                                </a>
                            </li>
                        </ul>
                        <li class="nav-item  ">
                        <a href="add_user" class="nav-link ">
                            <i class="fa fa-paper-plane-o"></i>
                            <span class="title">Extras</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        <li class="nav-item  ">
                        <a href="add_user" class="nav-link ">
                            <i class="fa fa-wrench"></i>
                            <span class="title">Options</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        <li class="nav-item  ">
                        <a href="add_user" class="nav-link ">
                            <i class="fa fa-buysellads"></i>
                            <span class="title">About</span>
                            <span class="selected"></span>

                        </a>
                        </li>
                        
                        <li class="nav-item  ">
                            <a href="login" class="nav-link nav-toggle">
                                <i class="fa fa-sign-out"></i>
                                <span class="title">Log out</span>
                            </a>
                        </li>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                       
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                          
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                   
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12 ">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="fa fa-user"></i>
                                        


                                        <span class="caption-subject bold uppercase" style="color: #32c5d2"> ADD USER</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <?php if ($error = $this->session->flashdata('response') ): ?>
                                        <div class="row" style="padding-left: 443px;color: green;font-size: 22px;">
                                        <div class="col-md-9">
                                        <div class="form-group">
                                        <?php echo $error;?>
                                        </div>
                                        </div>

                                        </div>
                                        <?php endif; ?>
                                    <form role="form" action="<?php echo base_url() ?>Add_user/registar_user" method="post">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="email" class="form-control" name="email" placeholder="Email Address"> </div>
                                            </div>
                                          
                                            <div class="form-group">

                                                <label for="exampleInputPassword1">Password</label>
                                                <div class="input-group">
                                                	<span class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                    
                                                </div>
                                            </div>
                                           
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>table_users"> <button class="btn blue"><i class="fa fa-arrow-left"></i> Back</button></a>
                            <!-- END SAMPLE FORM PORTLET-->
                            
                            
        <!-- END CONTAINER -->
       <!-- BEGIN FOOTER -->
   <div class="page-footer" style="padding-right: 198px; padding-top: 142px;">
            <div class="page-footer-inner"> 2018 &copy; Dance Manager. All Rights Reserved.</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    <!-- END FOOTER -->
    <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
    <script src="assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
    <script src="assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
    <script src="assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <script src="assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
    <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function() {
            $('#clickmewow').click(function() {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>
</body>

</html>