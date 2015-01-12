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
							<a class="btn btn-success" href="/admin/productos/add"><i class="fa fa-plus-circle"></i> Nuevo Producto</a>
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
							<th>Marca</th>
							<th>Precio</th>
							<th>Descripcion</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach ($productos as $producto): ?>
						<tr>
							<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
							<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
							<td><?php echo h($producto['Marca']['nombre']); ?>&nbsp;</td>
							<td><?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
							<td><?php echo h($producto['Producto']['descripcion']); ?>&nbsp;</td>
							<td>
								<div class="btn-group btn-group-xs">
									<a href="/admin/productos/edit/<?php echo h($producto['Producto']['id']); ?>" data-toggle="tooltip" title="Edit" class="btn btn-default">
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

<!--<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sku'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('material_id'); ?></th>
			<th><?php echo $this->Paginator->sort('color_id'); ?></th>
			<th><?php echo $this->Paginator->sort('medida'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th><?php echo $this->Paginator->sort('destacado'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('foto1'); ?></th>
			<th><?php echo $this->Paginator->sort('foto2'); ?></th>
			<th><?php echo $this->Paginator->sort('foto3'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $producto['Categoria']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Marca']['nombre'], array('controller' => 'marcas', 'action' => 'view', $producto['Marca']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['sku']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Material']['nombre'], array('controller' => 'materiales', 'action' => 'view', $producto['Material']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Color']['nombre'], array('controller' => 'colores', 'action' => 'view', $producto['Color']['id'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['medida']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['activo']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['destacado']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['created']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['modified']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['foto1']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['foto2']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['foto3']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?>
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