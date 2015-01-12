<div class="row">
	<div class="col-sm-12">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong><?php echo __('Agregar Producto'); ?></strong></h2>
			</div>
			<div class="widget-content padding">						
				<div id="horizontal-form">
					<?php echo $this->Form->create('Producto',array('class'=>'form-horizontal')); ?>
					<?php
						echo $this->Form->input('categoria_id',array('class'=>'form-control'));
						echo $this->Form->input('nombre',array('class'=>'form-control'));
						echo $this->Form->input('marca_id',array('class'=>'form-control'));
						echo $this->Form->input('sku',array('class'=>'form-control'));
						echo $this->Form->input('precio',array('class'=>'form-control'));
						echo $this->Form->input('descripcion',array('class'=>'form-control'));
						echo $this->Form->input('material_id',array('class'=>'form-control'));
						
					?>
					<?php #echo $this->Form->end(__('Submit'),array('class'=>'btn btn-default')); ?>
					<?php
						echo $this->Form->input('color_id',array('class'=>'form-control'));
						echo $this->Form->input('medida',array('class'=>'form-control'));
						echo $this->Form->input('activo',array('class'=>''));
						echo $this->Form->input('destacado',array('class'=>'form-control'));
						echo $this->Form->input('foto1',array('class'=>'form-control'));
						echo $this->Form->input('foto2',array('class'=>'form-control'));
						echo $this->Form->input('foto3',array('class'=>'form-control'));
					?>
				</div>
			</div>
		</div>
		
	</div>
</div>
