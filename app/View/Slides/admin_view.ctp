<div class="slides view">
<h2><?php echo __('Slid'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($slid['Slid']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Archivo'); ?></dt>
		<dd>
			<?php echo h($slid['Slid']['archivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($slid['Slid']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($slid['Slid']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($slid['Slid']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Slid'), array('action' => 'edit', $slid['Slid']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Slid'), array('action' => 'delete', $slid['Slid']['id']), array(), __('Are you sure you want to delete # %s?', $slid['Slid']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Slides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slid'), array('action' => 'add')); ?> </li>
	</ul>
</div>
