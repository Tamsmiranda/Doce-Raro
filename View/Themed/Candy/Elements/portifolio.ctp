<!-- BEGIN: portfolio page -->
<div id="portfolio" class="scrol-page">
	<div class="wrapper">
		<!-- BEGIN: page title -->
		<div class="page_title">
			<h2>Portfólio</h2>
			<p>Projetos recentes</p>
		</div>
		<!--END: page title -->
		<!-- BEGIN: portfolio filter -->
		<div id="portfolio">
			<div id="portfolio-filter">
				<ul>
					<li><a class="" href="#all">Todos</a></li>
					<li><a class="" href="#Web">Web Design </a></li>
					<li><a class="" href="#Sys">Sistemas </a></li>
					<li><a class="" href="#Logo">Logo &amp; Branding </a></li>
				</ul><!--END ul-->
			</div>
			<!--END ul gallery-filter-->
			<div class="clear"></div>    
			<!-- BEGIN: Portfolio -->
			<div id="portfolio_box">
				<ul>
					<li class="Web">
						<a href="example/large_image.jpg" class="iframe" data-id="fancybox-portfolio">
							<?php echo $this->Html->image('captures/soletro.com.br.png', array('alt' => '#'))?>
						</a>
						<div class="project_info">
							<h2>Soletro</h2>
							<h3>Web Design</h3>
							<a href="#" class="info_button" data-reveal-id="myModal"></a>	
						</div>
					</li>
					<li class="Web">
						<a href="example/large_image.jpg" class="iframe" data-id="fancybox-portfolio"><?php echo $this->Html->image('captures/emtags.com.br.png', array('alt' => '#'))?></a>
						<div class="project_info">
							<h2>Emtags</h2>
							<h3>Web Design</h3>
							<a href="#" class="info_button" data-reveal-id="myModal"></a>	
						</div>
					</li>
					<li class="Web">
						<a href="example/large_image.jpg" class="iframe" data-id="fancybox-portfolio"><?php echo $this->Html->image('captures/theprogramer.com.br.png', array('alt' => '#'))?></a>
						<div class="project_info">
							<h2>The Programer</h2>
							<h3>Web Design</h3>
							<a href="#" class="info_button" data-reveal-id="myModal"></a>	
						</div>
					</li>
					<!--
					<li class="Sys">
						<a href="example/large_image.jpg" class="iframe" data-id="fancybox-portfolio"><?php echo $this->Html->image('captures/extranet.rttvclipping.com.br.png', array('alt' => '#'))?></a>
						<div class="project_info">
							<h2>RTTV Clipping</h2>
							<h3>Sistema</h3>
							<a href="#" class="info_button" data-reveal-id="myModal"></a>	
						</div>
					</li>
					-->
					<li class="Web">
						<a href="example/large_image.jpg" class="iframe" data-id="fancybox-portfolio"><?php echo $this->Html->image('captures/ciadib.org.png', array('alt' => '#'))?></a>
						<div class="project_info">
							<h2>Ciadib</h2>
							<h3>Web Design</h3>
							<a href="#" class="info_button" data-reveal-id="myModal"></a>	
						</div>
					</li>
					<li class="Sys">
						<a href="example/large_image.jpg" class="iframe" data-id="fancybox-portfolio"><?php echo $this->Html->image('captures/clarotv.co.png', array('alt' => '#'))?></a>
						<div class="project_info">
							<h2>Claro TV</h2>
							<h3>Sistema</h3>
							<a href="#" class="info_button" data-reveal-id="myModal"></a>	
						</div>
					</li>
				</ul>
				<!--END ul-->
			</div>
			<!--END portfolio_box-->
			<br class="clear"/>
		</div>
	</div>
	<div id="myModal" class="reveal-modal">
		<h4>Seu site aqui</h4>
		<p>Seja mais um caso de sucesso tornando-se um cliente Doce Raro!<br />Fazemos questão de poder ajudar a sua empresa, transformando seu site em uma ferramenta indispensável para o seu sucesso.</p>
		<a class="close-reveal-modal">&#215;</a>
	</div>
</div>
<!-- end PORTFOLIO -->