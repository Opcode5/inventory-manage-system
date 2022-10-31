<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventory Management System | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="<?php echo base_url(); ?>assets/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>IMS!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('current_user_name'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a>
                    <!-- <ul class="nav child_menu">
                      
                      <li><a href="index.php">Dashboard</a></li>
                      
                    </ul> -->
                  </li>
                  <li><a href="<?php echo base_url('brand'); ?>"><i class="fa fa-edit"></i> Brand</a>
                   <!--  <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('brand'); ?>">Manage Brand</a></li>
                      
                    </ul> -->
                  </li>
                  <li><a href="<?php echo base_url('category'); ?>"><i class="fa fa-desktop"></i> Category </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="category.php">Manage Category</a></li>
                      </ul> -->
                  </li>
                  <li><a href="<?php echo base_url('unit'); ?>"><i class="fa fa-desktop"></i> Unit </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="category.php">Manage Category</a></li>
                      </ul> -->
                  </li>
                  <li><a href="<?php echo base_url('purchase'); ?>"><i class="fa fa-table"></i> Purchase </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="product.php">Manage Product</a></li>
                      </ul> -->
                  </li>
                  <li><a href="<?php echo base_url('order'); ?>"><i class="fa fa-bar-chart-o"></i> Orders</a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="orders.php">Manage Orders</a></li>
                      </ul> -->
                  </li>
                  <li><a href="<?php echo base_url('customer'); ?>"><i class="fa fa-table"></i> Customers </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="product.php">Manage Product</a></li>
                      </ul> -->
                  </li>
                  <li><a href="<?php echo base_url('supplier'); ?>"><i class="fa fa-table"></i> Suppliers </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="product.php">Manage Product</a></li>
                      </ul> -->
                  </li>
                
                  <li><a href="report.php"><i class="fa fa-clone"></i>Report</a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul> -->
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <!-- <h3>Live On</h3> -->
                <ul class="nav side-menu">
                  <li><a href="e_commerce.html"><i class="fa fa-bug"></i> Sign Up</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt=""><?php echo $this->session->userdata('current_user_name'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <!-- <span class="badge bg-red pull-right">50%</span> -->
                        <span>Settings</span>
                      </a>
                    </li>
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->