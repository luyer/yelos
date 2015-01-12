<div class="widget-content padding" style="display: block;">
<?php echo $this->Form->create('Producto',array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('categoria_id',array('class'=>'form-control'));
		echo $this->Form->input('nombre',array('class'=>'form-control'));
		echo $this->Form->input('marca_id',array('class'=>'form-control'));
		echo $this->Form->input('sku',array('class'=>'form-control'));
		echo $this->Form->input('precio',array('class'=>'form-control'));
		echo $this->Form->input('descripcion');
		echo $this->Form->input('material_id');
		echo $this->Form->input('color_id');
		echo $this->Form->input('medida');
		echo $this->Form->input('activo');
		echo $this->Form->input('destacado');
		echo $this->Form->input('foto1');
		echo $this->Form->input('foto2');
		echo $this->Form->input('foto3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
