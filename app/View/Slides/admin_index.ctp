<div class="slides index">
	<h2><?php echo __('Slides'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('archivo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($slides as $slid): ?>
	<tr>
		<td><?php echo h($slid['Slide']['id']); ?>&nbsp;</td>
		<td><?php echo h($slid['Slide']['archivo']); ?>&nbsp;</td>
		<td><?php echo h($slid['Slide']['created']); ?>&nbsp;</td>
		<td><?php echo h($slid['Slide']['modified']); ?>&nbsp;</td>
		<td><?php echo h($slid['Slide']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $slid['Slide']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $slid['Slide']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $slid['Slide']['id']), array(), __('Are you sure you want to delete # %s?', $slid['Slide']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Slid'), array('action' => 'add')); ?></li>
	</ul>
</div>
