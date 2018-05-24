<?php foreach($systemsettings as $ss): ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Performance Drywall and Paint</title>
	<meta name="keywords" content="Performance Drywall and Paint, Drywall, Paint, Performance, Drywall and Paint" />
	<meta name="description" content="We do all kinds of construction jobs, general, painting, drywall, pluming, electrical.">
	<meta charset="utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>assets/ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/ico/favicon-16x16.png">
	<link rel="manifest" href="ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/easy-responsive-tabs.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chocolat.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	
	<!-- scripts -->
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/easyResponsiveTabs.js"></script>
	<script src="<?php echo base_url()?>assets/js/numscroller-1.0.js"></script>
	<script type="text/javascript" src="js/jquery.chocolat.js"></script>
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
	<div class="w3-start">
		<!--<div class="container nav1">
			<a> <span class="fa fa-volume-control-phone" aria-hidden="true"> </span>+892 586 2548</a>
			<a href="mailto:abcd@yoursite.com"><span class="fa fa-envelope-o" aria-hidden="true" ></span>admin@exclvb.com</a>
		</div>-->


		<div class="navbar navbar-inverse navbar-static-top w3ls-navbar">
			<div class= "container brand1">
				<?php foreach($systemsettings as $ss): ?>
				<a href="http://performancedrywallandpaint.com/" class="navbar-brand w3-logo"><span class="br">
				 
				 <img alt="" src="<?php echo base_url(); ?>assets/images/<?php echo $ss['logo']; ?>" alt="Performance Drywall and Paint">

				</a> 
				
				<?php endforeach; ?> 	
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right w3ls-nav">
						<li class="w3ls-menu"><a href="<?php echo base_url('home'); ?>">Home</a></li>
						<li><a href="<?php echo base_url('about'); ?>">About</a></li>
						<li><a href="<?php echo base_url('services'); ?>">Services</a></li>
						<li><a href="<?php echo base_url('projects'); ?>">Projects</a></li>
						<li><a href="<?php echo base_url('testimonials'); ?>">Testimonials</a></li>
						<li><a href="<?php echo base_url('careers'); ?>">Careers</a></li>
						<li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
						<li><a href="<?php echo base_url('payments'); ?>">Payment</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> 
<!-- //Navigation -->

<?php endforeach; ?> 	
