<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>UserType | Awowa</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- BEGIN CORE CSS -->
	<link rel="stylesheet" href="clientside/library/admin1/css/admin1.css">
	<link rel="stylesheet" href="clientside/library/globals/css/elements.css">
	<link rel="stylesheet" href="clientside/library/globals/css/elements18db.css">
	<!-- END CORE CSS -->
	<link rel="stylesheet" href="clientside/library/globals/plugins/rickshaw/rickshaw.min.css">

	<!-- BEGIN PLUGINS CSS -->
	<link rel="stylesheet" href="clientside/library/globals/plugins/bootstrap-social/bootstrap-social.css">
	<!-- END PLUGINS CSS -->

	<!-- FIX PLUGINS -->
	<link rel="stylesheet" href="clientside/library/globals/css/plugins.css">
	<!-- END FIX PLUGINS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="http://teamfox.co/themes/pleasure/assets/globals/img/icons/favicon.ico">
	<link rel="apple-touch-icon" href="clientside/library/globals/img/icons/apple-touch-icon.png">
	<!-- END SHORTCUT AND TOUCH ICONS -->

	<script src="clientside/library/globals/plugins/modernizr/modernizr.min.js"></script>
	
	<script src="clientside/library/globals/plugins/rickshaw/rickshaw.min.js"></script>
	<style type="text/css">
	div#preloader { position: fixed; left: 0; top: 0; z-index: 999; width: 100%; height: 100%; overflow: visible; background: #fff url('loader.gif') no-repeat center center; }
	</style>
</head>
<body class="bg-login printable">
<div id="preloader"></div>
<script type="text/javascript">

function myFunction() {
    //location.reload();
	setTimeout(function() {
        alert('Your history has been cleared');
    },2000); 
}

</script>
	<div class="login-screen">
		<div class="panel-login blur-content">
			<div class="panel-heading"><img src="clientside/library/globals/img/teamfox.png" height="100" alt=""></div><!--.panel-heading-->

			<div id="pane-login" class="panel-body active">
			
		

				<div class="social-accounts" style="margin-top: 80px; margin-bottom: auto;">
					<div class="btn-group btn-merged btn-group-justified">
					<center>	<div class="btn-group">
							<a href="#" class="btn btn-social btn-facebook" onclick="myFunction()"><i class="fa fa-trash-o"></i>Clear History</a>
						</div>
					</center>
					</div>
				</div>
				
			   <div class="social-accounts">
					<div class="btn-group btn-merged btn-group-justified">
					<center>	<div class="btn-group">
							<a href="#" class="btn btn-social btn-green1"><i class="fa fa-recycle"></i>Referal Code</a>
						</div>
					</center>
					</div>
				</div>
				
			
				
				
				<!--#login.panel-body-->

		


		</div><!--.blur-content-->
	</div><!--.login-screen-->
</div>
	<div class="bg-blur dark">
		<div class="overlay"></div><!--.overlay-->
	</div><!--.bg-blur-->

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

	<!-- BEGIN GLOBAL AND THEME VENDORS -->
	<script src="clientside/library/globals/js/global-vendors.js"></script>
	<!-- END GLOBAL AND THEME VENDORS -->

	<!-- BEGIN PLUGINS AREA -->
	<!-- END PLUGINS AREA -->

	<!-- PLUGINS INITIALIZATION AND SETTINGS -->
	<script src="clientside/library/globals/scripts/user-pages.js"></script>
	<!-- END PLUGINS INITIALIZATION AND SETTINGS -->

	<!-- PLEASURE Initializer -->
	<script src="clientside/library/globals/js/pleasure.js"></script>
	<!-- ADMIN 1 Layout Functions -->
	<script src="clientside/library/admin1/js/layout.js"></script>

	<!-- BEGIN INITIALIZATION-->
	<script>
	jQuery(document).ready(function($) {  

// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
	$('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});

	$(document).ready(function () {
		Pleasure.init();
		Layout.init();
		UserPages.login();
	});
	</script>
	<!-- END INITIALIZATION-->

	<!-- BEGIN Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', Pleasure.settings.ga.urchin, Pleasure.settings.ga.url);
		ga('send', 'pageview');
	</script>
	<!-- END Google Analytics -->

</body>

<!-- Mirrored from teamfox.co/themes/pleasure/app/admin1/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2015 05:51:07 GMT -->
</html>