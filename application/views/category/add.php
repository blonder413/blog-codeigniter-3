<div class="posts col-md-9">
	<div class='panel panel-default'>
		<div class='panel panel-heading'>
			<h4>Crear Categoría</h4>
		</div>
		<div class='panel panel-body'>
			
			<?php if(validation_errors()) { ?>
				<div class='alert alert-danger'>
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
			
			<?php echo form_open_multipart(null, ["name" => "form_category"]); ?>
			
			<div class="form-group">
				<?php echo form_label('Category', 'category'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'category',
						'id'            => 'category',
						'value'			=> set_value_input(array(),'category','category'),
						'maxlength'     => '150',
						'size'          => '50',
						'style'         => 'width:50%'
				);
				echo form_input($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Image', 'image'); ?>
			
				<?php
				$data = array(
						'class'			=> 'form-control',
						'name'          => 'image',
						'id'            => 'image',
//						'value'			=> set_value_input(array(),'image','image'),
//						'maxlength'     => '150',
//						'size'          => '50',
//						'style'         => 'width:50%'
				);
				echo form_upload($data);
				?>
			</div>
			
			<div class="form-group">
				<?php echo form_label('Description', 'description'); ?>
			
				<?php
				$data = array(
					'class'			=> 'form-control',
					'name'          => 'description',
					'id'            => 'description',
				//        'value'         => 'johndoe',
				//        'maxlength'     => '150',
				//        'size'          => '50',
				//        'style'         => 'width:50%'
				);
			
				echo form_textarea($data);
				?>
			</div>
			
			<div class="controls">
				<?php
				$attributes = array( 'class' => 'btn btn-primary' );
				echo form_submit('guardar', 'Guardar', $attributes);
				?>
			</div>
			
		</div>
	</div>
	
</div>