<!DOCTYPE HTML>
<html>
<head>
<base href="<?php echo get_template_directory_uri(); ?>/" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<?php wp_head(); ?>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- webfonts -->
<link href='http://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<!-- webfonts -->
<link href="editor-style.css" rel='stylesheet' type='text/css' />
<link href="editor-style-rtl.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<body <?php body_class(); ?>>
		<!-- container -->
		<!-- header -->
		<div class="header">
			<!-- top-header -->
			<div class="top-header">
				<div class="container">
					<?php //wp_nav_menu("primary"); ?>
					<div class="rigister-info">

						<ul>
							<li><a href="/wp-login.php">Login</a></li>
							<li><a href="/wp-login.php?action=register">SignUp</a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- /top-header -->
			<!-- bottom-header -->
			<div class="bottom-header">
				<div class="container">
					<div class="bottom-header-left">
						<p>Chia sẻ là niềm vui </p>
					</div>
					<div class="logo">
						<a href="/"><img src="images/logo.png" title="gaia" /></a>
					</div>
					<div class="bottom-header-right" style="display:none;">
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Wishlist</a></li>
							<li><a href="#">Checkout</a></li>
						</ul>
						<div class="search-cart">
							<div class="search-box">
								<form>
									<input type="text" value="Search..." />
									<input type="submit" value="" />
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<!-- /bottom-header -->
		</div>
		<!-- header -->
		<!--- top-nav -->
		<div class="top-nav">
			<div class="container"><span class="menu"> </span>
				<?php 
				$vihoangson_navwalker = new wp_bootstrap_navwalker;
				wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class' => 'nav-menu clearfix',
				'menu_id' => 'primary-menu',
				'walker' => $vihoangson_navwalker
				) );
				?>
				
				<!-- <ul>
					<li class="active"><a href="/">Trang chủ<span> </span></a></li>
					<li><a href="/">Liên hệ<span> </span></a></li>
				</ul> -->
			</div>
		</div>
		<!--- top-nav -->
		<!-- script-for-nav -->
		<script>
			$(document).ready(function(){
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle(500);
				});
			});
		</script>
		<!-- /script-for-nav -->
		<!-- bottom-grids -->
		<div class="bottom-grids error-page">
			<div class="container">
