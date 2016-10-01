<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

	<meta name="description" content="<?php echo site_description(); ?>">

        <link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 400px)">
        
        
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="/pcs.com.do/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/pcs.com.do/img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="/pcs.com.do/css/bootstrap.css" >
<link rel="stylesheet" href="/pcs.com.do/css/style.css">
<link rel="stylesheet" href="/pcs.com.do/css/animate.css">
<link rel="stylesheet" href="/pcs.com.do/css/camera.css">
<link rel="stylesheet" href="/pcs.com.do/css/search-form.css">
<link rel="stylesheet" href="/pcs.com.do/fonts/font-awesome.css">
<!--JS-->
<script src="/pcs.com.do/js/jquery.js"></script>
<script src="/pcs.com.do/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/pcs.com.do/js/jquery.easing.1.3.js"></script>
<script src="/pcs.com.do/js/jquery.mobilemenu.js"></script>
<script src="/pcs.com.do/js/jquery.equalheights.js"></script> 
<script src="/pcs.com.do/js/camera.js"></script>
<script src="/pcs.com.do/js/sForm.js"></script> 
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src="/pcs.com.do/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="/pcs.com.do/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="/pcs.com.do/js/jquery.touchSwipe.min.js"></script>
<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
    });
</script>
<script>
$(window).load(function() {
    $(function() {
        $('#foo1').carouFredSel({
			auto: false,
			responsive: true,
			width: '100%',
			scroll: 1,
            pagination  : "#foo2_pag",
			items: {
				height: 'auto',
				width:370,
				visible: {
					min: 1,
					max: 1
				}
			},
			mousewheel: true,
			swipe: {
				onMouse: true,
				onTouch: true
			}
		});
	}); 	 				
});
</script>


<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/pcs.com.do/js/wow/wow.js"></script>
<script src="/pcs.com.do/js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
        

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">

		<!--<div class="main-wrap">
			<div class="slidey" id="tray">
				<div class="wrap">
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<label for="term">Search my blog:</label>
						<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
						<input type="hidden" id="whatSearch" name="whatSearch" value="all" />
					</form>

					<aside>
						<b>Categories</b>
						<ul>
						<?php while(categories()): 
								if (category_count() > 0) { ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
								</a>
							</li>
						<?php } endwhile; ?>
						</ul>
					</aside>
				</div>
			</div>-->
            
                <!--header-->
<header class="indent clearfix">
    <div class="follow-box">
        <div class="container"> 
            <h1 class="navbar-brand navbar-brand_"><a href="/pcs.com.do/index.html"><img src="/pcs.com.do/img/logo_smaller.png" alt="logo"></a></h1>
            <ul class="address_icon">
                <li><span></span><a href="#">Login</a></li>
                <li><span></span><a href="#">Register</a></li>
                <li><span class="fa fa-map-marker"></span>- </li>
                <li><span class="fa fa-envelope"></span><a href="#">info@bellarix.com</a></li>
                <li><span class="fa fa-phone"></span>+1 809 785 9935</li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <ul class="nav sf-menu clearfix">
                <li class="active"><a href="/pcs.com.do/index.html">Home</a></li>
                <li><a href="/pcs.com.do/index-1.html">Nosotros</a><span></span></li>
                <li><a href="/pcs.com.do/index-2.html">Servicios</a></li>
                <li><a href="/pcs.com.do/index-3.html">Precios</a></li>
                <li><a href="/pcs.com.do/index-4.html">Contactos</a></li>
                <li><a href="/pcs.com.do/capp/capp.php">Career Assessment Test</a></li>
                <li><a href="/pcs.com.do/blog/">Blog</a></li>
            </ul>
            <div class="js-search flt__l flt__n-xl">
            	<div class="toggle"></div>
            	<form id="search" class="search-form" action="/pcs.com.do/search.php" method="GET" accept-charset="utf-8">
            		<label class="input" for="in">
            			<input id="in" type="text" name="s" value="Search" onblur="if(this.value == '') { this.value='Search'}" onfocus="if (this.value == 'Search') {this.value=''}">
                        <a href="#" onClick="document.getElementById('search').submit()" class="js-find"></a>
            		</label>
            	</form>
            </div>
        </div>
    </nav>
</header>

			<!--<header id="top">
				<a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>

				<nav id="main" role="navigation">
					<ul>
						<?php if(has_menu_items()):
							while(menu_items()): ?>
						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile;
							endif; ?>
						<li class="tray">
							<a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
						</li>
					</ul>
				</nav>
			</header>-->
