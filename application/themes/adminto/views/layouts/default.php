<?php
    $c = $this->router->fetch_class();
    $m = $this->router->fetch_method();
	
    // bug menu aside
    $withaside = false;
    if ($c == 'inbox_controller' || $c == 'account_controller' || $c == 'settings_controller' || $c == 'contacts_controller') {
        $withaside = true;
    } else if ($c == 'billing_controller' && $m == 'index') {
        $withaside = true;
    } else if ($c == 'dashboard_controller' && $m == 'getstarted') {
		  $withaside = true;
	}
	
	if ($c == 'contacts_controller' && $m == 'profile') {
		$withaside = false;
	}
	
	// detect cookie for sb-collapsed to not have animation
    $sbcollapsed = false;
    if (isset($_COOKIE['FLATDREAM_sidebar']) && $_COOKIE['FLATDREAM_sidebar'] == 'closed') {
        $sbcollapsed = true;
    }		
    
    $withchart = false;
    if ($c == 'dashboard_controller' || $c == 'reports_controller') {
        $withchart = true;
    }
	
	$bgwhite = false;
	if (($c == 'campaigns_controller' && $m == 'index') || ($c == 'billing_controller') ) {
		$bgwhite = true;
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Reseller Platform">
	<meta name="author" content="WebCreators">
	<title>Partners - <?php echo $template['title']; ?></title>
	<!--
	<?php /* disablze font fot ssl error & too light fonts */?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>
	-->
	<?
	/*
	<!-- Bootstrap core CSS -->
	<link href="<?=APP_THEME_PATH?>js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" href="<?=APP_THEME_PATH?>fonts/font-awesome-4/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.nanoscroller/nanoscroller.css" /> 
	<link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/intro.js/introjs.css" />  
    
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />

    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.vectormaps/jquery-jvectormap-1.2.2.css"  media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.magnific-popup/dist/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.niftymodals/css/component.css" />
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/bootstrap.summernote/dist/summernote.css" /> 
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.icheck/skins/flat/green.css">
    <!-- multiselect -->
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/bootstrap.multiselect/css/bootstrap-multiselect.css"/>
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.multiselect/css/multi-select.css" />
  
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>js/jquery.icheck/skins/square/blue.css">
    <link rel="stylesheet" type="text/css" href="<?=APP_THEME_PATH?>css/skin-prusia.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/blastis.css?t=<?php echo time();?>" />
	*/
	?>
	
	 <!-- Icons -->
    <link rel="shortcut icon" href="/assets/shortcuts/favicon.ico" />
	<!--<link rel="shortcut icon" href="<?=APP_THEME_PATH?>assets/images/favicon.ico">-->
    <link rel="apple-touch-icon" href="/assets/shortcuts/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/shortcuts/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/shortcuts/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/shortcuts/apple-touch-icon-144x144.png" />

	
        <link href="<?=APP_THEME_PATH?>assets/plugins/summernote/dist/summernote.css" rel="stylesheet" /><!-- Custom box css -->
        <link href="<?=APP_THEME_PATH?>assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

        <!-- App CSS -->
        <link href="<?=APP_THEME_PATH?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=APP_THEME_PATH?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=APP_THEME_PATH?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=APP_THEME_PATH?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=APP_THEME_PATH?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=APP_THEME_PATH?>assets/css/menu_dark.css" rel="stylesheet" type="text/css" />
        <link href="<?=APP_THEME_PATH?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=APP_THEME_PATH?>assets/js/modernizr.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="/assets/css/blastis.css?t=<?php echo time();?>" />
		
</head>
<body class="fixed-left" <?php if (!empty($pageId)) echo 'id="'.$pageId.'"'; ?>>

    <!-- Begin page -->
    <div id="wrapper">
	
			<!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
				<!--<img src="/assets/products/partners-logo.png" width="42" />-->
                    <a href="/" class="logo"><img src="/assets/products/blastis_thinner.png" width="130" /><!--<span>Blast<span>is</span>--></span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title"><?php echo $template['title']; ?></h4>
                            </li>
                        </ul>

							  
		<p class="navbar-text navbar-right" style="margin:0px;margin-top:15px;margin-left:10px;padding:0px;">            
            <?php if (!empty($pageTopButton)) echo $pageTopButton; ?>            
        </p>

        <?php if (!empty($pageTopButtonMore)) { ?>
        <ul class="nav navbar-nav navbar-right more-nav">	
          <li class="dropdown more_menu">
			 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>More</span> <b class="caret"></b></a> 
            <ul class="dropdown-menu">
            <?php 
            foreach($pageTopButtonMore as $value) { 
                echo $value;
            }
            ?>
            </ul>
          </li>
        </ul>	
        <?php } ?>
		
                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
							<!--
							<li>
							 <form id="formChooseProduct" name="formChooseProduct" class="navbar-form navbar-left" role="form" method="POST" action="">
								<div class="form-group">	
							   <select id="change_product" name="change_product">
							   <option value="all"  <?php if (empty($current_product) || $current_product == 'all') echo 'selected'; ?>>All products</option>
							   <option value="">------------------</option>
							   <option value="1" <?php if (isset($current_product) && $current_product == '1') echo 'selected'; ?>>Live Chat</option>
							   <option value="2" <?php if (isset($current_product) && $current_product == '2') echo 'selected'; ?>>Text Marketing</option></select>
							   </div>
							  </form>
							</li>
							-->
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->
			
			<!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
				
                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">						
							<img src="/assets/products/gold.png" alt="user-img" title="Mat Helme" class="img-circle img-thumbnailx img-responsive">
                            <!--<img src="<?=APP_THEME_PATH?>assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">-->
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="/account"><?php echo $current_user['company'];?></a> </h5>
                        <ul class="list-inline">
                            <li>
                                <a href="/account" >
                                    <i class="zmdi zmdi-settings"></i>
                                </a>
                            </li>

                            <li>
                                <a href="/auth/logout" class="text-custom" title="Log Out">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="/" class="waves-effect <?php echo ($c == 'dashboard_controller' && ($m == 'index' || $m == 'getstarted')) ? 'active' : ''; ?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li>
                                <a href="/users" class="waves-effect <?php echo ($c == 'users_controller') ? 'active' : ''; ?>"><i class="zmdi zmdi-format-underlined"></i> <span> Users </span> </a>
                            </li>
							
							<li>
                                <a href="/resources" class="waves-effect <?php echo ($c == 'resources_controller') ? 'active' : ''; ?>"><i class="zmdi zmdi-collection-text"></i> <span> Resources </span> </a>
                            </li>							                            

                            <li>
                                <a href="/withdrawals" class="waves-effect <?php echo ($c == 'withdrawals_controller') ? 'active' : ''; ?>"><i class="fa fa-credit-card"></i><span class="label label-purple pull-right">New</span><span> Withdrawals </span></a>
                            </li>

                       
							<?php if ($current_user['is_super_admin'] == '1') { ; ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-layers"></i><span>ADMIN </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li class="<?php echo ($c == 'virtual_number_controller') ? 'active' : ''; ?>"><a href="/admin/virtual_number"><i class="fa fa-phone"></i> Virtual Numbers</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>
							<?php }?>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->
			
			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page <?php if (!empty($pageClass)) echo $pageClass; ?>" >
                <!-- Start content -->
                <div class="content">
                    <div class="container">
						<?php if (isset($breadcrumbs)) echo $breadcrumbs; ?>

						<?php display_feedback_information($flashdata); ?>
						
						<?php echo $template['body']; ?>
					</div> <!-- container -->

                </div> <!-- content -->
			</div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

			<!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->			

    </div>
    <!-- END wrapper -->
		
	<!-- Modal -->
    <div id="custom-modal" class="modal-demo text-left">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Compose Mail</h4>
            <div class="card-box">
                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="To">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Cc">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Bcc">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <div class="summernote">
                            <h6>Hello Summernote</h6>
                            <ul>
                                <li>
                                    Select a text to reveal the toolbar.
                                </li>
                                <li>
                                    Edit rich document on-the-fly, so elastic!
                                </li>
                            </ul>
                            <p>
                                End of air-mode area
                            </p>

                        </div>
                    </div>

                    <div class="btn-toolbar form-group m-b-0">
                        <div class="pull-right">
                            <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i
                                    class="fa fa-floppy-o"></i></button>
                            <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i
                                    class="fa fa-trash-o"></i></button>
                            <button class="btn btn-purple waves-effect waves-light"><span>Send</span> <i
                                    class="fa fa-send m-l-10"></i></button>
                        </div>
                    </div>

                </form>

            </div>
    </div>
		
    <!-- common modal -->
  	<div class="modal colored-header fade" id="modal-custom" tabindex="-1" role="dialog" aria-hidden="true" data-modal-overflow="true">
            	<div class="modal-dialog custom-width">
                    <div class="modal-content">               
				  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    
    <!-- sound notification -->
    <div class="play"></div>
        
    <!-- form filters -->
    <form action="" id="formHidden" method="post" role="form" data-ajax="true">
        <input type="hidden" name="initPage" id="initPage" value="1" />
        <input type="hidden" name="fieldName" id="fieldName" value="" />
        <input type="hidden" name="filterSearch" id="filterSearch" value="_" />
        <input type="hidden" name="filterCustomType" id="filterCustomType" value="_" />
        <input type="hidden" name="filterCustomValue" id="filterCustomValue" value="_" />
    </form>   
    
    <!-- start: JavaScript-->
    <script type="text/javascript">
    //<![CDATA[	
		var blastisLanguage = "<?php if (!empty($current_user['lg'])) echo strtolower($current_user['lg']); else echo 'en'; ?>"; 
        var blastisCountry = "<?php echo $current_user['country']; ?>";
	//]]>
	</script>
	
	<script>
            var resizefunc = [];
    </script>

        <!-- jQuery  -->
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/detect.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/fastclick.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/jquery.blockUI.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/waves.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/jquery.nicescroll.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/pages/jquery.inbox.js"></script>
		
		<!-- google chart -->
     	<!--<script type="text/javascript" src="https://www.google.com/jsapi"></script> -->
	    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script> 

        <!--form validation init-->
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/plugins/summernote/dist/summernote.min.js"></script>

        <!-- Modal-Effect -->
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/plugins/custombox/dist/custombox.min.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/plugins/custombox/dist/legacy.min.js"></script>

        <!-- App js -->
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/jquery.core.js"></script>
        <script type="text/javascript" src="<?=APP_THEME_PATH?>assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){
				
				if ($("#change_product").length) { 
					$('#change_product').change(function() {		
						var product_id = $(this).val();
						if (product_id != '') {			
							//var url = document.location.href + '?change_product='+product_id;
							//document.location.href = url;				
							$("#formChooseProduct").submit();
						}
						
					});	
				}
	
                $('.summernote').summernote({
                    height: 320,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

            });
        </script>
		
	<?php
/*	
  
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.js"></script>
	<!-- google chart -->
	<!--<script type="text/javascript" src="https://www.google.com/jsapi"></script> -->
	 <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script> 
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.cookie/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.pushmenu/js/jPushMenu.js"></script>
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.ui/jquery-ui.js" ></script>
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="<?=APP_THEME_PATH?>js/behaviour/core.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="<?=APP_THEME_PATH?>js/bootstrap/dist/js/bootstrap.min.js"></script>
  
  <!--<script type="text/javascript" src="<?=APP_THEME_PATH?>js/behaviour/dashboard2.js"></script>-->
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.vectormaps/jquery-jvectormap-1.2.2.min.js"></script>
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.vectormaps/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.niftymodals/js/jquery.modalEffects.js"></script>   
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/bootstrap.summernote/dist/summernote.min.js"></script>
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.icheck/icheck.min.js"></script>
  <!--<script type="text/javascript" src="<?=APP_THEME_PATH?>js/skycons/skycons.js"></script>-->
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  
  <!--<script type="text/javascript" src="/assets/js/jquery.maskedinput.min.js"></script>-->
<!--
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.parsley/dist/parsley.remote.min.js"></script>
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.parsley/dist/parsley.min.js"></script>
-->
  
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.select2/select2.min.js" ></script>
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/bootstrap.multiselect/js/bootstrap-multiselect.js"></script>
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.multiselect/js/jquery.multi-select.js"></script>
  
  <script type="text/javascript" src="<?=APP_THEME_PATH?>js/intro.js/intro.min.js"></script>
  */
  ?>
<script type="text/javascript">
    $(document).ready(function(){
          
      <?php if (isset($flashdata) && !empty($flashdata['notification_gritter'])) {      
         $notification_type = (isset($flashdata['notification_gritter'][1])) ? $flashdata['notification_gritter'][1] : 'primary';
		 $notification_msg = '';
		 if (is_array($flashdata['notification_gritter'][0])) {
			 $notification_msg = implode('<br>',$flashdata['notification_gritter'][0]);
		 } else {
			 $notification_msg = $flashdata['notification_gritter'][0];
		 }
         ?>
         setTimeout(function() {
          $.gritter.add({
            position: 'top-right',
            title: '<?php echo ucfirst($notification_type); ?>',
            text: '<?php echo $notification_msg; ?>',
            class_name: '<?php echo $notification_type; ?>'
          });   
         }, 500);
    <?php } ?>    
	
	
	   
   
	if ($("#change_product").length) { 
		$('#change_product').change(function() {		
			var product_id = $(this).val();
			if (product_id != '') {			
				//var url = document.location.href + '?change_product='+product_id;
				//document.location.href = url;				
				$("#formChooseProduct").submit();
			}
			
		});	
	}
   

    
      $('.image-zoom').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it
          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function 
          opener: function(openerElement) {
            var parent = $(openerElement);
            return parent;
          }
        }
      });
      
      //Nifty Modals Init
      $('.md-trigger').modalEffects();
      
  
		
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue checkbox',
        radioClass: 'icheckbox_square-blue'
      });
	  	  
      
      $("#check-all").on('ifChanged',function(){
        var checkboxes = $(".mails,.listcheck").find(':checkbox');
        if($(this).is(':checked')) {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
      });
      
        
    });
	
	
/**
 * Router util
 */
var Router_Util = {

    
    /**
     * LOADING show
     */
    loading_show : function(isFull) {
        if (isFull) {
            $(div_content).html('<div class="" id="tabLoading" style=""><p>Loading...</p><p class="loading" style="height:200px;"></p></div>');
            CreateSpinner($(div_content).find('.loading'));
        } else {
            // light : for filters
            $("#loading-ajax").show();
        }
    },
    
    /**
     * LOADING hide
     */
    loading_hide : function(isFull) {
        if (isFull) {
            // do nothing as the dev will be erase by the content automatically
        } else {
            $("#loading-ajax").hide();
        }
    },
    
    /**
     * Tools for filters
     */
    searchTable : function() { 
            //$("#loading-ajax").show();
            Router_Util.loading_show(false);
            var search = $('form.search #s').val();
            //alert(search);
            $("#formHidden #filterSearch").val(search);
            $("#formHidden").submit();
    },
        
    filterTable : function(filter, value) {
            console.log(filter+' '+value);
            //$("#loading-ajax").show();
            Router_Util.loading_show(false);
            $("#formHidden #filterCustomType").val(filter);
            $("#formHidden #filterCustomValue").val(value);
            $("#formHidden").submit();
    },
       
    sortTable : function(fieldName) {
            //$("#loading-ajax").show();
            Router_Util.loading_show(false);
            $("#fieldName").val(fieldName);
            $("#formHidden").submit();
    }    
    
};
  </script>  
  
  <?php if ($withchart) { ?>
<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=APP_THEME_PATH?>js/jquery.flot/jquery.flot.labels.js"></script>
  <?php } ?>
  
  <?php 
  $cjs = str_replace('_controller','', $c);
  if ($cjs == 'dashboard') $cjs = 'dashboard2';
  $custom_js = APP_THEME_PATH.'js/behaviour/'.$cjs.'.js';
  if (!empty($custom_js) && file_exists(APPPATH.'..'.$custom_js)) { ?>
  <script type="text/javascript" src="<?=$custom_js?>?c=<?php echo date('His'); ?>"></script>
  <?php if (isset($_GET['guide'])) { ?><script type="text/javascript">if (typeof startIntro == 'function') { startIntro(); }</script><?php } ?>
  <?php } ?>
  
</body>

<!-- Page rendered in {elapsed_time} seconds-->
</html>