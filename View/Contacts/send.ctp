<div class="page_title">
	<a href="#contact"></a>
	<h2>Contato</h2>
	<p><small>21</small> 4063-3407</p>
</div>
<div class="one-two">
	<?php echo $this->Session->flash();?>
	<?php echo $this->Form->create('Contact', array('id' => 'contact_form')); ?>
	<fieldset>
		<?php echo $this->Form->input('name',array('label'=>__('Nome'))); ?>
		<?php echo $this->Form->input('email',array('label'=>__('E-mail'))); ?>
		<?php echo $this->Form->input('phone',array('label'=>__('Telefone'))); ?>
		<?php echo $this->Form->input('message',array('type'=>'textarea', 'label'=>__('Mensagem'))); ?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?> 
</div>