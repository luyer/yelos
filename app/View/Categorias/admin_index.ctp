<div class="row">
<div class="col-md-12">
	<div class="widget">
		<div class="widget-content">
			<div class="data-table-toolbar">
				<div class="row">
					<div class="col-md-4">
						<form role="form">
						<input type="text" class="form-control" placeholder="Búsqueda">
						</form>
					</div>
					<div class="col-md-8">
						<div class="toolbar-btn-action">
							<a class="btn btn-success" href="/admin/categorias/add"><i class="fa fa-plus-circle"></i> Nueva Categoria</a>
						</div>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table data-sortable class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Activo</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach ($categorias as $categoria): ?>
						<tr>
							<td><?php echo h($categoria['Categoria']['id']); ?>&nbsp;</td>
							<td><?php echo h($categoria['Categoria']['nombre']); ?>&nbsp;</td>
							<td><?php echo h($categoria['Categoria']['activo']); ?>&nbsp;</td>
							<td>
								<div class="btn-group btn-group-xs">
									<a href="/admin/categorias/view/<?php echo h($categoria['Categoria']['id']); ?>" data-toggle="tooltip" title="Ver" class="btn btn-default">
										<i class="fa fa-eye"></i>
									</a>
									<a href="/admin/categorias/edit/<?php echo h($categoria['Categoria']['id']); ?>" data-toggle="tooltip" title="Editar" class="btn btn-default">
										<i class="fa fa-edit"></i>
									</a>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
				
			<div class="data-table-toolbar">
				<ul class="pagination">
				  <li class="disabled"><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
	
</div>
<!--<div class="categorias index">
	<h2><?php echo __('Categorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<th><?php echo $this->Paginator->sort('rght'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo h($categoria['Categoria']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoria['ParentCategoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $categoria['ParentCategoria']['id'])); ?>
		</td>
		<td><?php echo h($categoria['Categoria']['lft']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['rght']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoria['Categoria']['id']), array(), __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?>
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
-->