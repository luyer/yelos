<div class="slides form">
<?php echo $this->Form->create('Slid'); ?>
	<fieldset>
		<legend><?php echo __('Add Slid'); ?></legend>
	<?php
		echo $this->Form->input('archivo');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Slides'), array('action' => 'index')); ?></li>
	</ul>
</div>
