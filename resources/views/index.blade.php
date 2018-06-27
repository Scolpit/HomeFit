<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Home Fit</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header page-section dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="img/logo-dark.png"><img src="img/logo.png" alt="Canvas Logo"></a>
						<a href="/" class="retina-logo" data-dark-logo="img/logo-dark@2x.png"><img src="img/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

	
				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax dark full-screen" style="background: url(img/landing.jpg) center;">

			<div class="slider-parallax-inner">

				<div class="container clearfix">

					<div class="vertical-middle">

						<div class="heading-block center nobottomborder">
							<h1 data-animate="fadeInUp">Está na hora de treinar com o HomeFit</h1>
							<span data-animate="fadeInUp" data-delay="300">Resultados em 12 semanas.</span>
						</div>
                                    
						<form method="post" class="landing-wide-form clearfix" action="/login">
                                                    {{ csrf_field() }}
                                                    <div class="col_five_fifth nobottommargin">
                                                            <div class="col_one_third nobottommargin">
                                                                    <input name="name" type="text" class="form-control input-lg not-dark" value="" placeholder="Username">
                                                            </div>
                                                            <div class="col_one_third nobottommargin">
                                                                    <input name="password" type="password" class="form-control input-lg not-dark" value="" placeholder="Password*">
                                                            </div>
                                                            <div class="col_one_third col_last nobottommargin">
                                                                <button class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit" style="">Login</button>
                                                            </div>
                                                    </div>
						</form>

					</div>

					

				</div>

			</div>

		</section>

		

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">
		$(function() {
			$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
		});
	</script>

</body>
</html>