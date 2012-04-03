<!DOCTYPE html>
<html>
<head>
   <title>Doce Raro</title>
   <!--<link href="css/style.css" rel="stylesheet" type="text/css" />
   <link href="css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
   <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,800,800italic,600,600italic' rel='stylesheet' type='text/css'>
	-->
	<?php echo $this->Html->css('style'); ?>
	<?php echo $this->Html->css('jquery.fancybox-1.3.4'); ?>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,800,800italic,600,600italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	<?php echo $this->Html->script('jquery.fancybox-1.3.4.pack'); ?>
	<?php echo $this->Html->script('main'); ?>
	<?php echo $this->Html->script('jquery.reveal'); ?>
	<?php echo $this->Html->script('jquery.cycle.all'); ?>
	<?php echo $this->Html->script('jquery.easing.1.3'); ?>

	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
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
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta charset="UTF-8"></head>
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
        <li><?php echo $this->Html->link(__('Home'),'/#home',array('class' => 'nav_home')); ?></li>
		<li><?php echo $this->Html->link(__('Sobre'),'/#about',array('class' => 'nav_about')); ?></li>
		<li><?php echo $this->Html->link(__('Portfólio'),'/#portfolio',array('class' => 'nav_portfolio')); ?></li>
		<li><?php echo $this->Html->link(__('Serviços'),'/#services',array('class' => 'nav_services')); ?></li>
		<li><?php echo $this->Html->link(__('Contato'),'/#contact',array('class' => 'nav_contact')); ?></li>
      </ul><!-- END: menu -->
    </div>
  </div><!-- END: header -->
  
  <!-- BEGIN: home page -->
  <div id="home" class="scrol-page">
    <div class="wrapper">
		<?php echo $this->element('slider', array('cache' => true)); ?>
    </div>
  </div>
  <!-- END: slider -->
  
  <!-- BEGIN: home page -->
  <div class="wrapper">
	<?php echo $this->Html->script('jquery.mousewheel'); ?>
	<?php echo $this->Html->script('jquery.gridnav'); ?>
	<?php echo $this->Html->script('grid_function'); ?>
	<?php echo $this->fetch('content'); ?>
    <div class="clear"></div>
   <!-- END: home page -->
   
   <div class="space"></div>
	<?php //echo $this->element('about_us', array('cache' => true)); ?>
 </div><!-- END: about page -->
 <?php echo $this->element('footer', array('cache' => true)); ?>
  </div>
</body>
</html>