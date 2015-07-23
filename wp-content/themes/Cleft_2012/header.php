<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<!-- General meta information -->
		<title>The Cleft - A Student Ministry in Xenia OH</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="robots" content="index, follow" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<!-- // General meta information -->
	
	
<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="https://thecleft.org/wp-content/themes/Cleft_2012/css/960.css" media="screen" /><!-- no need to edit, 960.gs Framework -->
	<link type="text/css" rel="stylesheet" href="https://thecleft.org/wp-content/themes/Cleft_2012/css/screen.css" media="screen" />
	<link id="theme-colors" type="text/css" rel="stylesheet" href="https://thecleft.org/wp-content/themes/Cleft_2012/style.css" media="screen" /><!-- replace css/themes/xxxxxx.css with the theme you want to use -->
	<link type="text/css" rel="stylesheet" href="https://thecleft.org/wp-content/themes/Cleft_2012/css/print.css" media="print" />
	<link type="text/css" rel="stylesheet" href="https://thecleft.org/wp-content/themes/Cleft_2012/css/jquery.fancybox-1.3.4.css" media="screen" /><!-- no need to edit, lightbox css -->
	<!--[if lt IE 7]><link type="text/css" rel="stylesheet" href="http://thecleft.org/wp-content/themes/Cleft_2012/css/ie6.css" media="screen" /><![endif]-->
<!-- // Load stylesheets -->
	
	
	<!-- Load Javascript / jQuery -->
		<!--[if lt IE 7]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script><![endif]-->    
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://thecleft.org/wp-content/themes/Cleft_2012/js/superfish-combined.js"></script>
		<script type="text/javascript" src="https://thecleft.org/wp-content/themes/Cleft_2012/js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" src="https://thecleft.org/wp-content/themes/Cleft_2012/js/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="https://thecleft.org/wp-content/themes/Cleft_2012/js/jquery.tweet.js"></script>
		<script type="text/javascript" src="https://thecleft.org/wp-content/themes/Cleft_2012/js/general.js"></script>
	<!-- // Load Javascript / jQuery -->
	
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/gif" href="images/favicon.gif" />
	<!-- // Favicon -->
<?php wp_head(); ?>	
</head>
<body>
	
    
	<div id="outer" class="clearfix">
	
        
        <div id="topbar" class="clearfix">
            
            <div class="container_12">
                
                <div class="grid_6">
                    <p><a href="http://thecleft.org"><strong>The Cleft</strong></a> is an outreach for students</p>
                </div><!-- //grid_6 -->

                <div class="grid_4">
                    <p>phone: <strong>937.203.8336</strong> email: <strong><a href="info@thecleft.org<">info@thecleft.org</a></strong></p>
                </div><!-- //grid_4 -->
                
                <div class="grid_2">
                    <form title="Search!" action="search.html" method="get" class="clearfix" id="searchform">
                        <input type="text" value="" size="15" id="s" name="s" class="rounded" />
                        <input type="submit" value="Seach" id="searchsubmit" title="Search the Site" />
                    </form>
                </div><!-- //grid_2 -->
                
            </div><!-- //container_12 -->
            
        </div><!-- //topbar -->
            
            
		<div id="header" class="clearfix">          
        	
        	<div class="container_12">
            	
           		<div class="grid_12" id="header-container">
                    
                    <div id="logo">
                        <h1><a href="http://TheCleft.org" title="Go to the home page"><img src="http://thecleft.org/wp-content/themes/Cleft_2012/img/Cleft_Logo.png" width="300px" alt="Logo" /></a></h1>
                    </div><!-- //logo -->
                    
                    <ul class="sf-menu">
                    <?php wp_nav_menu( array( 'menu' => 'main', 'sort_column' => 'menu_order', 'items_wrap' => '%3$s') ); ?>
						
					</ul>
            	</div><!-- //grid_12 -->
            
			</div><!-- //container_12 -->
            
        
        </div><!-- //header -->