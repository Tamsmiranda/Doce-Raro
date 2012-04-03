<!-- BEGIN: contact page -->
<div id="contact" class="scrol-page">
	<div class="wrapper">
		<!-- BEGIN: page title -->
		<div class="page_title">
			<h2>Contato</h2>
			<p>
				<small>21</small> 4063-3407
			</p>
		</div>
		<!--END: page title -->
		<!-- BEGIN: Contact Form -->
		<div class="one-two">
			<div class="contact-form">
				<?php echo $this -> Session -> flash();?>
				<?php echo $this -> Form -> create('Contact', array('id' => 'contact_form', 'action' => 'send'));?>
				<fieldset>
					<?php echo $this -> Form -> input('name');?>
					<?php echo $this -> Form -> input('email');?>
					<?php echo $this -> Form -> input('phone');?>
					<?php echo $this -> Form -> input('message', array('type' => 'textarea'));?>
				</fieldset>
				<?php echo $this -> Form -> end(__('Submit'));?>
			</div>
			<!-- END: Contact Form -->
		</div>
		<!-- BEGIN: Map -->
		<div class="one-two last">
			<!--<div class="map"><iframe width="448" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Serbia,+Belgrade,+Central+Serbia&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=30.185946,86.572266&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Belgrade,+City+of+Belgrade,+Central+Serbia,+Serbia&amp;t=h&amp;ll=44.802301,20.466156&amp;spn=0.243602,0.613861&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe></div>-->
			<div class="contact-information">
				<ul>
					<!--<li class="address"><strong>Address:</strong> Street 9890, New Something 1234, Country</li>-->
					<li class="phone">
						<strong>Telefone:</strong><small>21</small> 4063-3407
					</li>
					<li class="email">
						<strong>Email:</strong><a href="mailto:comercial@doceraro.com.br">comercial@doceraro.com.br</a>
					</li>
				</ul><!--END ul-->
			</div><!--END contact-information-->
		</div>
	</div>
</div>
<!-- END: Contact Page -->