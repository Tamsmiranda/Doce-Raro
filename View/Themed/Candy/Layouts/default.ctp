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
        <li><a href="#home" class="nav_home current">home</a></li>
        <li><a href="#about" class="nav_about">Sobre</a></li>
        <li><a href="#portfolio" class="nav_portfolio">Portfólio</a></li>
        <li><a href="#services" class="nav_services">Serviços</a></li>
        <li><a href="#contact" class="nav_contact">Contato</a></li>
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
    <div class="col_left" >
      <div id="tj_container" class="tj_container">
        <div class="tj_nav">
          <span id="tj_prev" class="tj_prev">Previous</span>
          <span id="tj_next" class="tj_next">Next</span>
        </div>
        
        <div class="tj_wrapper">
          <ul class="tj_gallery">
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00001.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00002.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00003.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00004.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00005.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00006.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00007.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00008.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00009.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00010.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00011.jpg', array('alt' => ''))?></a></li>
            <li><a href="#" onClick="scrollTo_function('#contact');" ><?php echo $this->Html->image('featured/00012.jpg', array('alt' => ''))?></a></li>
         </ul>
        </div>
      </div>
    </div>
	<div class="col_right">
		<h4>Criação e revitalização de sites</h4>
		<p>Aproveite nossos preços promocionais para criação ou revitalização do seu site! Faça a escolha certa, somos o melhor time de desenvolvimento além da excelência em suporte e infraestrutura.</p>
		<p>Desenvolvemos seu site com visual agradável utilizando a tecnologia que mais se adéqua ao seu caso. Sites institucionais, blogs ou portais, gerenciáveis com conteúdo dinâmico ou estáticos.</p>
		<p>Confira as vantagens que nós oferecemos:</p>
		<ul class="list">
			<li>Faça agora a transferência gratuita de seu site para os nossos servidores e ganhe 3 meses de hospedagem grátis.</li>
			<li>Registro de domínio gratuito para todos os novos projetos.</li>
			<li>Nossos sites possuem código otimizado para mecanismos de buscas como: Google, Yahoo e Bing.</li>
		</ul>
		<p>Entre em contato conosco, peça um <a href="#" onClick="scrollTo_function('#contact');" >orçamento gratuito</a>.</p>
     </div>
	<?php echo $this->Html->script('jquery.mousewheel'); ?>
	<?php echo $this->Html->script('jquery.gridnav'); ?>
	<?php echo $this->Html->script('grid_function'); ?>
    <div class="clear"></div>
   <!-- END: home page -->
   
   <div class="clear"></div>
   <div class="space"></div>
   
	<?php echo $this->element('about_us', array('cache' => true)); ?>
 </div><!-- END: about page -->
  
  <div class="clear"></div>
  <div class="space"></div>
   
	<?php echo $this->element('portifolio', array('cache' => true)); ?>

   <div class="clear"></div>
   <div class="space"></div>

    <?php echo $this->element('services', array('cache' => true)); ?>
    <div class="clear"></div>
    <div class="space"></div>
	
	<?php echo $this->element('contact', array('cache' => true)); ?>
	<?php echo $this->element('footer', array('cache' => true)); ?>   
 </div>
 </div>
 <!-- End Footer  -->

</body>
</html>