<!DOCTYPE html>
<html>
	<head>
		<title>Doce Raro</title>
		<meta charset="UTF-8">
		<?php echo $this -> Html -> css('style');?>
		<?php echo $this -> Html -> css('jquery.fancybox-1.3.4');?>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,800,800italic,600,600italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
		<?php echo $this -> Html -> script('jquery.fancybox-1.3.4.pack');?>
		<?php echo $this -> Html -> script('main');?>
		<?php echo $this -> Html -> script('jquery.reveal');?>
		<?php echo $this -> Html -> script('jquery.cycle.all');?>
		<?php echo $this -> Html -> script('jquery.easing.1.3');?>

		<?php echo $this -> Html -> meta('icon');

	//echo $this->Html->css('cake.generic');

	echo $this -> fetch('meta');
	echo $this -> fetch('css');
	echo $this -> fetch('script');
		?>
		<script>
			$(window).load(function() {
				checkPageHeight('home');
				initCycle();
			});

		</script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-6377030-10']);
			_gaq.push(['_setDomainName', 'doceraro.com.br']);
			_gaq.push(['_trackPageview']); (function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
	</head>
	<body>
		<!-- BEGIN: content -->
		<!-- BEGIN .header-bg -->
		<div class="header-bg">
			<div id="header">
				<div class="wrapper clearfix">
					<!-- BEGIN: logo -->
					<h1><a href="#home" id="logo">Doce Raro</a></h1><!-- END: logo -->
					<!-- BEGIN: menu -->
					<ul id="menu">
						<li>
							<a href="#home" class="nav_home current">home</a>
						</li>
						<li>
							<a href="#about" class="nav_about">Sobre</a>
						</li>
						<li>
							<a href="#portfolio" class="nav_portfolio">Portfólio</a>
						</li>
						<li>
							<a href="#services" class="nav_services">Serviços</a>
						</li>
						<li>
							<a href="#contact" class="nav_contact">Contato</a>
						</li>
					</ul><!-- END: menu -->
				</div>
			</div>
		</div><!-- END: header -->
		<!-- BEGIN: home page -->
		<div id="home" class="scrol-page">
			<div class="wrapper">
				<?php echo $this -> element('slider', array('cache' => true));?>
			</div>
		</div>
		<!-- END: slider -->
		<!-- BEGIN: home page -->
		<div class="wrapper">
			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this -> element('footer', array('cache' => true));?>
		<!-- End Footer  -->
	</body>
</html>